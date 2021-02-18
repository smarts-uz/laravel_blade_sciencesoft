<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Portfolio;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\CardLists;
use Illuminate\Support\Facades\View;
use App\Models\CompanyTeam;
use App\Models\Blog;
use App\Models\Consultation;

class HomePageController extends Controller
{
    public function index(){
        // dd('hi');
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')->whereNull('deleted_at')
            ->get();
        $blogs = Blog::all();
        $partnerships=Category::where('category_id', '=', 8)->whereNull('deleted_at')->get();
        return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'blogs'=>$blogs, 'partnerships'=>$partnerships]);
    }

    public function getDynamicPage($page, $collections=null, $category_id=null, $translation='en')
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')->whereNull('deleted_at')
            ->get();
        if($category_id){
            $categories = Category::where('category_id', '=', $category_id)
                ->with('childrenCategories')->whereNull('deleted_at')
                ->get();
        }

        if(!view()->exists('front.pages.'.$page) || $page=='index'){
            return $this->index();
        }
        return view('page_controller', ['page'=>'front.pages.'.$page,'categories'=> $categories])->with($collections);

    }

    public function getBlade($page, $translation='en')
    {
        if(str_contains($page, 'blog')){
            $blogs = Blog::all();
            return $this->getDynamicPage($page, ['blogs' => $blogs]);
        }else if(str_contains($page, 'management_team')){
            $teams = CompanyTeam::all();
            return $this->getDynamicPage($page, ['teams' => $teams]);
        }else if(str_contains($page, 'news')){
            $news = News::all();
            return $this->getDynamicPage($page, ['news' => $news]);
        }else if(str_contains($page, 'products')){
            $products = Product::all();
            return $this->getDynamicPage($page, ['products' => $products]);
        }else if(str_contains($page, 'portfolios')){
            $technologies=Category::where('category_id', '=', 47)->whereNull('deleted_at')->get();
            $industries=Category::where('category_id', '=', 55)->whereNull('deleted_at')->get();
            $portfolios = Portfolio::all();
            return $this->getDynamicPage($page, ['portfolios'=> $portfolios, 'technologies'=>$technologies, 'industries'=>$industries]);
        }else if(str_contains($page, 'partnerships')){
            $partnerships=Category::where('category_id', '=', 8)->whereNull('deleted_at')->get();
            return $this->getDynamicPage($page, ['partnerships' => $partnerships]);
        }else if(str_contains($page, 'ecommerce')){
            return $this->getDynamicPage($page, null,  38);
        }
        return $this->getDynamicPage($page);

    }
    public function getCategoryByName($name, $view)
    {
        $categories=Category::where('name', 'like', '%'.$name.'%')->first();
//      return View::make($view)->with(compact('categories'));
        return response($categories);
    }
    public function getBlogByTag(Request $request)
    {
        $blogs = Blog::all();

//        Product::('JSON_CONTAINS(shops,"'.$this->id.'")');
//        if($blogs = DB::table('blogs')->orWhereJsonContains('tag->category', $request->tag_name)->get()){
        if($blogs = Blog::whereJsonContains('tag->category', $request->tag_name)){
//        if($blogs = Blog::whereRaw('JSON_CONTAINS(blogs, tag->category', $request->tag_name)->get()){
            return $this->getDynamicPage('blog', 'blogs', $blogs);
//            return View::make('front.pages.blog')->with(compact('blogs', $blogs));
        }
        return $this->getBlade('blog', ['blogs'=>$blogs]);
    }

    public function getCategoryById($id)
    {
        $categories=Category::where('id', '=', $id)->first();
        return response($categories);
    }

    public function postConsultation(Request $request){

        $this->validate($request, [
            'fullname' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'description' => 'required',
        ]);

        $posts = new Consultation();
        $posts->fullname = $request->fullname;
        $posts->company = $request->company;
        $posts->email = $request->email;
        $posts->phone_number = $request->phone_number;
        $posts->description = $request->description;
        $posts->save();

        return redirect('/')->with('success', 'Your information has been sent successfully!');

    }

    public function SingleBlog($id)
    {
        $blog = Blog::all()->find($id);
        return $this->getDynamicPage('blog_single_page', ['blog' => $blog]);
    }
    public function SingleProduct($id)
    {
        $product = Product::all()->find($id);
        return $this->getDynamicPage('products.product_single_page', ['product' => $product]);
    }
}
