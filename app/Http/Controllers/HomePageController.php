<?php

namespace App\Http\Controllers;

use App\Models\News;
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
            ->with('childrenCategories')
            ->get();
//        $cardlists = CardLists::orderBy('id', 'desc')->get();
//        $lists = Category::with('lists')->get();

//        return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'cardlists'=>$cardlists, 'lists' => $lists]);
        $cards = CardLists::all();
        return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'cards'=>$cards]);
    }
    public function getDynamicPage($page, $name, $items, $translation='en')
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        if(!view()->exists('front.pages.'.$page)){
            $cards = CardLists::all();
            return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'cards'=>$cards]);
        }
        return view('page_controller', ['page'=>'front.pages.'.$page, $name=>$items,'categories'=> $categories]);

    }


    public function getBlade($page, $translation='en')
    {

        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        $teams = CompanyTeam::all();
        $blogs = Blog::all();
        $news = News::all();
        $cards = CardLists::all();
        if(!view()->exists('front.pages.'.$page)){
//            $cards = CardLists::all();
            return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'cards'=>$cards]);
        }

        return view('page_controller', ['page'=>'front.pages.'.$page, 'categories'=>$categories, 'teams'=>$teams, 'blogs'=>$blogs, 'news'=>$news, 'cards'=>$cards]);

            $cardlists = CardList::orderBy('id', 'desc')->get();
            return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'cardlists'=>$cardlists]);
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

}
