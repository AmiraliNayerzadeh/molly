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

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required' ,
            'phone' => 'required',
            'email' => 'nullable' ,
            'web' => 'nullable' ,
            'category' => 'nullable' ,
            'status' => 'required' ,
        ]);

        dd('yes this is sended') ;
    }
}
