<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $user = User::all();
        return view('admin.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
            'phone' => 'nullable',
            'image' => 'nullable',
            'banner' => 'nullable',
            'about' => 'nullable'
        ]);


//image
        if ($request->file('image')) {
            $image = $request->file('image');
            $image->move(public_path('/users/personal/'), $image->getClientOriginalName());
            $validData['image'] = '/users/personal/' . $image->getClientOriginalName();
        }
//banner
        if ($request->file('banner')) {
            $banner = $request->file('banner');
            dd($validData['banner']);
            $banner->move(public_path('/users/banner/'), $banner->getClientOriginalName());
            $validData['banner'] = '/users/banner/' . $banner->getClientOriginalName();
        }

        User::create([
            'name' => $validData['name'],
            'email' => $validData['email'],
            'password' => Hash::make($validData['password']),
            'instagram' => $validData['instagram'],
            'twitter' => $validData['twitter'],
            'linkedin' => $validData['linkedin'],
            'phone' => $validData['phone'],
            'about' => $validData['about'],
        ]);

        if (!isNull($request->file('banner'))) {
            User::create([
                'banner' => $validData['banner'],
            ]);
        }

        if (!isNull($request->file('image'))) {
            User::create([
                'image' => $validData['image'],
            ]);
        }

        Alert::success('Success ', 'Profile Created!');
        return redirect(route('users.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:4', 'confirmed'],
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
            'phone' => 'nullable',
            'image' => 'nullable',
            'banner' => 'nullable',
            'about' => 'nullable'

        ]);
        $user->update([
            'name' => $validData['name'],
            'email' => $validData['email'],
            'password' => Hash::make($validData['password']),

            'instagram' => $validData['instagram'],
            'twitter' => $validData['twitter'],
            'linkedin' => $validData['linkedin'],
            'phone' => $validData['phone'],
            'about' => $validData['about'],
        ]);


        if (!isNull($request->file('banner'))) {
            $user->update([
                'banner' => $validData['banner'],
            ]);
        }

        if (!isNull($request->file('image'))) {
            $user->update([
                'image' => $validData['image'],
            ]);
        }

        Alert::success('Success ', 'Profile Updated!');
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        Alert::success('Success ', 'Profile Deleted!');
        return back();
    }
}
