<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customer)
    {
        $customer = Customer::latest()->paginate(15) ;
        return view('admin.customers.index' , compact('customer')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'CEO' => 'nullable',
            'web' =>'nullable',
            'logo' => 'required',
            'description' => 'nullable',
        ]);


//clientLogo
        if ($request->file('logo')) {
            $logo = $request->file('logo');
            $logo->move(public_path('/Project/Logo/'), $logo->getClientOriginalName());
            $validData['logo'] = '/Project/Logo/' . $logo->getClientOriginalName();
        }


        Customer::create([
            'name' => $validData['name'],
            'CEO' => $validData['CEO'],
            'web' => $validData['web'],
            'logo' => $validData['logo'],
            'description' => $validData['description'] ,


        ]);

        Alert::success('Success ', 'Customer Created!');
        return redirect(route('customers.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit' , compact('customer')) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'CEO' => 'nullable',
            'web' =>'nullable',
            'logo' => 'nullable',
            'description' => 'nullable',
        ]);


//clientLogo
        if ($request->file('logo')) {
            $logo = $request->file('logo');
            $logo->move(public_path('/Project/Logo/'), $logo->getClientOriginalName());
            $validData['logo'] = '/Project/Logo/' . $logo->getClientOriginalName();
        }


        $customer->update([
            'name' => $validData['name'],
            'CEO' => $validData['CEO'],
            'web' => $validData['web'],
            'description' => $validData['description']
        ]);

        if ($request->file('logo')) {
            $customer->update([
                'logo' => $validData['logo'],
            ]);
        }

        Alert::success('Success ', 'Customer Updated!');
        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
