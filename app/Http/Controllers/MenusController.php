<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {
    	$menus = Menu::latest()->get();
    	return view('public.menus.index', compact('menus'));
    }
}
