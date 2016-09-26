<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
    	return Category::with('menus')->latest()->get();
    }

    public function show($category)
    {
    	return $category;
    }
}
