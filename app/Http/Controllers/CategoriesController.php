<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categories = Category::latest()->get();
    	return view('public.categories.index', compact('categories'));
    }

    public function show($category)
    {
    	return view('public.categories.show', compact('category'));
    }
}
