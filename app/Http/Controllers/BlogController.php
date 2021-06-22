<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $parentCategories = Category::where('parent_id',0)->get();
        return view('blog',compact('parentCategories'));
    }
}
