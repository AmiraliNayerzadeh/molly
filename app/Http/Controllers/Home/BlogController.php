<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function archive(Blog $blog)
    {
        $this->seo()->setTitle('مجله') ;
        $blog = Blog::latest()->paginate(9) ;
        return view('home.blog.archive' , compact('blog')) ;
    }


    public function single(Blog $blog)
    {

        if ($blog->meta_title) {
            $this->seo()->setTitle($blog->meta_title) ;
        } else{
            $this->seo()->setTitle($blog->title) ;
        }
        if ($blog->meta_description) {
            $this->seo()->setDescription($blog->meta_description) ;
        }

        if ($blog->meta_keyword) {
            $this->seo()->setDescription($blog->meta_keyword) ;
        }

        return view('home.blog.single' , compact('blog')) ;
    }


}
