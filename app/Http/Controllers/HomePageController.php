<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\CompanyTeam;
use App\Models\CardLists;
use App\Models\Blog;

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
        return view('page_controller', ['page'=>'front.pages.'.$page, 'categories'=>$categories, 'teams'=>$teams, 'blogs'=>$blogs]);
    }


}
