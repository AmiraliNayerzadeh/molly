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
        $this->seo()->setTitle('صفحه اصلی');
        $this->seo()->setDescription(   "تیم توسعه و طراحی مولی در سال 2021 باهدف ایجاد تغییر و تحول در فضای کسب و کارهای دیجیتال و وب ایران فعالیت رسمی خود را آغاز کرد.");
        $this->seo()->metatags()->setKeywords("مولی , دیجیتال مارکتینگ مولی, طراحی سایت مولی");
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setUrl(url()->current());



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
