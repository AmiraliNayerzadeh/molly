<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class SitemapController extends Controller
{

    public function index()
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');

    }


    public function static()
    {
        return response()->view('sitemap.static')->header('Content-Type', 'text/xml');
    }

    public function service ()
    {
        $service = Category::all() ;
        return response()->view('sitemap.service' , compact('service'))->header('Content-Type', 'text/xml');
    }

    public function article()
    {
        $article = Blog::where('status' , 1)->get();
        return response()->view('sitemap.article' , compact('article'))->header('Content-Type', 'text/xml');
    }

    public function project()
    {
        $project = Project::all() ;
        return response()->view('sitemap.project' , compact('project'))->header('Content-Type', 'text/xml');
    }

}
