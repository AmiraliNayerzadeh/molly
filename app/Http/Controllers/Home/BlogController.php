<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function archive(Blog $blog)
    {
        $blog = Blog::latest()->paginate(9) ;
        return view('home.blog.archive' , compact('blog')) ;
    }


    public function single(Blog $blog)
    {
        return view('home.blog.single' , compact('blog')) ;
    }


}
