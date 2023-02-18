<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function main()
    {
        $this->seo()->setTitle('پروژه های پیاده سازی شده') ;
        return view('home.service.main') ;
    }

    public function index(Category $category)
    {
        if ($category->meta_title) {
            $this->seo()->setTitle($category->meta_title) ;
        } else{
            $this->seo()->setTitle($category->name) ;
        }
        if ($category->meta_description) {
            $this->seo()->setDescription($category->meta_description) ;
        }

        if ($category->meta_keyword) {
            $this->seo()->setDescription($category->meta_keyword) ;
        }

        return view('home.service.index' , compact('category'));
    }
}
