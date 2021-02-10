<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\CompanyTeam;
use App\Models\CardLists;
use App\Models\Blog;
use App\Models\Consultation;

class HomePageController extends Controller
{
    public function index(){
        // dd('hi');
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        $cards = CardLists::all();
        return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'cards'=>$cards]);
    }
    public function getPage($page, $translation='en')
    {
        //
        // $categories = Category::whereNull('category_id')
        //     ->with('childrenCategories')
        //     ->get();
        // return view('front.pages.'.$page, compact('categories'));
        return View::make('front.layout', ['page' => $page]);
    }


    public function getBlade($page, $translation='en')
    {

        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        if(!view()->exists('front.pages.'.$page)){
            return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index']);
        }
        $teams = CompanyTeam::all();
        $blogs = Blog::all();
        $news = News::all();
        return view('page_controller', ['page'=>'front.pages.'.$page, 'categories'=>$categories, 'teams'=>$teams, 'blogs'=>$blogs, 'news'=>$news]);

    }
    public function getCategoryByName($name, $view)
    {
        $categories=Category::where('name', 'like', '%'.$name.'%')->first();
//        return View::make($view)->with(compact('categories'));
        return response($categories);
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
