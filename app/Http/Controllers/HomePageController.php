<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class HomePageController extends Controller
{
    public function index(){
        // dd('hi');
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index']);
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
        if(!view()->exists('front.layout'.$page)){
            return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index']);
        }
        return view('page_controller', ['page'=>'front.pages.'.$page, 'categories'=>$categories]);
    }

    // public function index(){  
    //     $parentCategories = Category::where('parent_id',NULL)->get();
    //     return view('categories', compact('parentCategories'));
    // }
}
