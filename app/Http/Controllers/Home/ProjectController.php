<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::latest()->paginate(12);
        $this->seo()->setTitle('نمونه کارها');


        return view('home.project.index' , compact('project'));
    }

    public function single(Project $project)
    {
            $this->seo()->setTitle($project->name) ;
        return view('home.project.single' , compact('project'));
    }
}
