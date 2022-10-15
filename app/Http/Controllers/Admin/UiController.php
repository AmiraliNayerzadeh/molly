<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ui;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ui $ui)
    {
       $ui =  Ui::latest()->paginate(20);
        return view('admin.ui.index' , compact('ui')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ui.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Ui $ui)
    {
        $valid = $request->validate([
            'name' => ['required' , 'unique:uis'],
            'image' => ['required','mimes:jpg,jpeg,webp,gif,png'] ,
            'alt' => 'required'
        ]);

        $file = $request->file('image') ;
        $file->move(public_path('/asset/images/slider') , $file->getClientOriginalName()) ;
        $valid['image'] = '/asset/images/slider/'.$file->getClientOriginalName();

        $ui = Ui::create($valid) ;
        Alert::success('Success ', 'Banner Created!');
        return redirect(route('Ui.index')) ;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ui $Ui)
    {
        return view('admin.ui.edit' , compact('Ui'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ui $Ui)
    {
        $valid = $request->validate([
            'name' => '' ,
            'image' => ['required','mimes:jpg,jpeg,webp,gif,png'] ,
            'alt' => 'required'
        ]);

        $file = $request->file('image') ;
        $file->move(public_path('/asset/images/slider') , $file->getClientOriginalName()) ;
        $valid['image'] = '/asset/images/slider/'.$file->getClientOriginalName();

        $Ui->update($valid) ;
        Alert::success('Success ', 'Banner Updated!');
        return redirect(route('Ui.index')) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ui $Ui)
    {
        $Ui->delete() ;
        Alert::success('Success ', 'Banner Deleted!');
        return redirect(route('Ui.index')) ;
    }
}
