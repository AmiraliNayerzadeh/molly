<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Counseling;
use App\Models\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CounselingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Counseling $counseling)
    {
        $counseling = Counseling::latest()->paginate(15) ;
        return view('admin.counseling.index' , compact('counseling')) ;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counseling $counseling)
    {
        $valid = $request->validate([
            'status' => 'required'
        ]);
        $counseling->update([
            'status'=> $valid['status']
        ]);
        Alert::success('Success ', 'Counseling Status updated... .');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counseling $counseling)
    {
        $counseling->delete() ;
        Alert::success('Success ', 'Counseling Deketed!');
        return back();
    }
}
