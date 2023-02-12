<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Category $category)
    {
        return view('home.service.index' , compact('category'));
    }
}
