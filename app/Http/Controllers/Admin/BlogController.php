<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::paginate(12);
        return view('admin.blogs.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['string' , 'required' , 'min:5' , 'max:40' , ] ,
            'description' => ['required' , 'min:30'] ,
            'meta_title' => 'nullable' ,
            'meta_keyword' => 'nullable' ,
            'meta_description' => 'nullable' ,
            'image' => ['required' , 'mimes:jpg,jpeg,png' , 'max:2048'],
            'status' => 'required' ,
            'category' => 'required'

        ]);

        $file = $request->file('image') ;
        $file->move(public_path('/blogs/'), $file->getClientOriginalName()) ;
        $validate['image'] = '/blogs/'.$file->getClientOriginalName();

        if ($validate['status'] == '0') {
            Alert::success('Success ', 'Blog drafted!');
        } else {
            Alert::success('Success ', 'Blog Created!');

        }
        $blog = auth()->user()->blogs()->create($validate) ;
        $blog->categories()->sync($validate['category']) ;

        return redirect(route('blogs.index')) ;
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
    public function edit(Blog $blog)
    {
        return view('admin.blogs.create' , compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => ['string' , 'required' , 'min:5' , 'max:40' , ] ,
            'description' => ['required' , 'min:30'] ,
            'meta_title' => 'nullable' ,
            'meta_keyword' => 'nullable' ,
            'meta_description' => 'nullable' ,
            'image' => ['required' , 'mimes:jpg,jpeg,png' , 'max:2048'],
            'status' => 'required' ,
            'category' => 'required'
        ]);

        $file = $request->file('image') ;
        $file->move(public_path('/blogs/'), $file->getClientOriginalName()) ;
        $validate['image'] = '/blogs/'.$file->getClientOriginalName();

        if ($validate['status'] == '0') {
            Alert::success('Success ', 'Blog drafted!');
        } else {
            Alert::success('Success ', 'Blog Created!');

        }
        $blog = auth()->user()->blogs()->update($validate) ;
        $blog->categories()->sync($validate['category']) ;
        return redirect(route('blogs.index')) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete() ;
        Alert::success('Success ', 'Blog Deleted!');
        return redirect(route('blogs.index'));
    }
}
