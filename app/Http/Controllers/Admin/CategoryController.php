<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(20) ;
        return view('admin.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');

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
            'name' => 'required' ,
            'description' => 'nullable' ,
            'parent' => 'required' ,
            'image' => ['nullable' , 'mimes:png,jpg,jpeg,webp,gif'] ,
            'meta_title' => 'nullable',
            'meta_keyword' => 'nullable' ,
            'meta_description' => 'nullable'
        ]);

        if ($request->file('image')){
        $file = $request->file('image') ;
        $file->move(public_path('/categories/') , $file->getClientOriginalName()) ;
        $validate['image'] = '/categories/'.$file->getClientOriginalName();
        }
        Category::create($validate) ;

        Alert::success('Success ', 'Category Created!');

        return redirect(route('categories.index')) ;

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
    public function edit(Category $category)
    {
        return view('admin.categories.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validate = $request->validate([
            'name' => 'required' ,
            'description' => 'nullable' ,
            'parent' => 'required' ,
            'image' => ['nullable' , 'mimes:png,jpg,jpeg,webp,gif'] ,
            'meta_title' => 'nullable',
            'meta_keyword' => 'nullable' ,
            'meta_description' => 'nullable'
        ]);

        if ($request->file('image')){
            $file = $request->file('image') ;
            $file->move(public_path('/categories/') , $file->getClientOriginalName()) ;
            $validate['image'] = '/categories/'.$file->getClientOriginalName();
        }
        $category->update($validate) ;

        Alert::success('Success ', 'Category Updated!');
        return redirect(route(' gallery_categories.index')) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete() ;
        Alert::success('Success ', 'Category Deleted!');
        return redirect(route('categories.index'));
    }
}
