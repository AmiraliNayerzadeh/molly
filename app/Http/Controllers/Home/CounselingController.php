<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CounselingController extends Controller
{
    public function Counseling()
    {
        return view('home.counseling.index');
    }
}
