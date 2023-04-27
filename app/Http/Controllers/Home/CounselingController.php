<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Counseling;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class
CounselingController extends Controller
{
    public function Counseling()
    {
        $this->seo()->setTitle('درخواست مشاوره');
        $this->seo()->setDescription(   "با ثبت در خواست خود برای ایجاد پروژه، کارشناسان تیم توسعه مولی در کوتاه ترین زمان با شما تماس خواهند گرفت.");
        $this->seo()->metatags()->setKeywords("مولی , درخواست تماس");
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setUrl(url()->current());

        return view('home.counseling.index');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required' ,
            'phone' => 'required',
            'email' => 'nullable' ,
            'web' => 'nullable' ,
            'category' => 'nullable' ,
            'status' => 'required' ,
            'description' => 'nullable' ,
        ]);
        Counseling::create($valid);
        Alert::success('ثبت درخواست', 'درخواست شما با موفقیت ثبت شد!');
        return back();
    }
}
