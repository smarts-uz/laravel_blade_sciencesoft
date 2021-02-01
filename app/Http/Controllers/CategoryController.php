<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();

            dd($categories);
        return view('categories', compact('categories'));
    }


    // public function index(){  
    //     $parentCategories = Category::where('parent_id',NULL)->get();
    //     return view('categories', compact('parentCategories'));
    // }
}
