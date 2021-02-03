<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CardList;
use Illuminate\Support\Facades\View;

class HomePageController extends Controller
{
    public function index(){
        // dd('hi');
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        $cardlists = CardList::orderBy('id', 'desc')->get();
        return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index', 'cardlists'=>$cardlists]);
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

    public function getBlade($page, $translation='en')
    {
        
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        if(!view()->exists('front.pages.'.$page)){
            return view('front.pages.index', ['categories'=> $categories, 'page'=>'front.pages.index']);
        }
        $cardlists = CardList::orderBy('id', 'desc')->get();
        return view('page_controller', ['page'=>'front.pages.'.$page, 'categories'=>$categories]);
    }

    // public function index(){  
    //     $parentCategories = Category::where('category_id',NULL)->get();
    //     return view('categories', compact('parentCategories'));
    // }
}
