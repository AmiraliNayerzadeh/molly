<?php

namespace App\Http\Controllers;


use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->seo()->setTitle('خانه');
        return view('home.index');
    }

    public function contacts()
    {
//        return view('home.connect')
    }


    public function faqs()
    {
        $this->seo()->setTitle('سوالات متداول');
//        return view('home.connect')
    }

    public function Counseling()
    {

    }
}
