<?php

namespace App\Http\Controllers;

use App\Models\CardList;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Consultation;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();

            // dd($categories);
        return view('categories', compact('categories'));
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
    
    public function getCardList(){
        
        $cardlists = CardList::orderBy('id', 'desc')->get();
        
        return view('front.pages.index')->with('cardlists', $cardlists);
    }
   
}
