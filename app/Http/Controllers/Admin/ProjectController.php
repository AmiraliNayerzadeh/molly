<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\isNull;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $project = Project::latest()->paginate(12) ;
        return view('admin.projects.index' , compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
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
            'title' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'client' =>'required',
            'web' => 'nullable',
            'clientLogo' => 'required',
            'featuring' => 'required',
            'featuringMobile' => 'required',
        ]);


//clientLogo
        if ($request->file('clientLogo')) {
            $clientLogo = $request->file('clientLogo');
            $clientLogo->move(public_path('/Project/Logo/'), $clientLogo->getClientOriginalName());
            $validData['clientLogo'] = '/Project/Logo/' . $clientLogo->getClientOriginalName();
        }



//featuring
        if ($request->file('featuring')) {
            $featuring = $request->file('featuring');
            $featuring->move(public_path('/Project/featuring/'), $featuring->getClientOriginalName());
            $validData['featuring'] = '/Project/featuring/' . $featuring->getClientOriginalName();
        }

        //featuringMobile
        if ($request->file('featuringMobile')) {
            $featuringMobile = $request->file('featuringMobile');
            $featuringMobile->move(public_path('/Project/featuring/Mobile/'), $featuringMobile->getClientOriginalName());
            $validData['featuringMobile'] = '/Project/featuring/Mobile/' . $featuringMobile->getClientOriginalName();
        }

        Project::create([
            'title' => $validData['title'],
            'description' => $validData['description'],
            'client' => $validData['client'],
            'web' => $validData['web'],
            'clientLogo' => $validData['clientLogo'] ,
            'featuring' => $validData['featuring'] ,
            'featuringMobile' => $validData['featuringMobile'] ,


        ]);

        Alert::success('Success ', 'Project Created!');
        return redirect(route('projects.index'));
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
    public function edit(Project $project)
    {
        return view('admin.projects.edit' , compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'client' =>'required',
            'web' => 'nullable',
            'clientLogo' => 'nullable',
            'featuring' => 'nullable',
            'featuringMobile' => 'nullable',
        ]);


//clientLogo
        if ($request->file('clientLogo')) {
            $clientLogo = $request->file('clientLogo');
            $clientLogo->move(public_path('/Project/Logo/'), $clientLogo->getClientOriginalName());
            $validData['clientLogo'] = '/Project/Logo/' . $clientLogo->getClientOriginalName();
        }



//featuring
        if ($request->file('featuring')) {
            $featuring = $request->file('featuring');
            $featuring->move(public_path('/Project/featuring/'), $featuring->getClientOriginalName());
            $validData['featuring'] = '/Project/featuring/' . $featuring->getClientOriginalName();
        }

        //featuringMobile
        if ($request->file('featuringMobile')) {
            $featuringMobile = $request->file('featuringMobile');
            $featuringMobile->move(public_path('/Project/featuring/Mobile/'), $featuringMobile->getClientOriginalName());
            $validData['featuringMobile'] = '/Project/featuring/Mobile/' . $featuringMobile->getClientOriginalName();
        }

        $project->update([
            'title' => $validData['title'],
            'description' => $validData['description'],
            'client' => $validData['client'],
            'web' => $validData['web'],
        ]);


        if (!isNull($request->file('clientLogo'))) {
            $project->update([
                'clientLogo' => $validData['clientLogo'],
            ]);
        }

        if (!isNull($request->file('featuring'))) {
            $project->update([
                'featuring' => $validData['featuring'],
            ]);
        }

        if (!isNull($request->file('featuringMobile'))) {
            $project->update([
                'featuringMobile' => $validData['featuringMobile'],
            ]);
        }

        Alert::success('Success ', 'Project Updated!');
        return redirect(route('projects.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete() ;
        Alert::success('Success ', 'Project Deketed!');
        return redirect(route('projects.index'));
    }
}
