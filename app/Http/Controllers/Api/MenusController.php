<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {
    	return Menu::latest()->get();
    }
}
