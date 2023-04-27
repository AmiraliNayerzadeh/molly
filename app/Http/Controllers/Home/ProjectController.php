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
        $this->seo()->setDescription(   "نمونه کار های تیم توسعه مولی میتواند این اطمینان را به شما بدهد که پروژه های شما به بهترین نحو ممکن انجام خواهد شد.");
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setUrl(url()->current());



        return view('home.project.index', compact('project'));
    }

    public function single(Project $project)
    {
        $this->seo()->setTitle($project->title);
        $this->seo()->setDescription(   "در گروه توسعه مولی پروژه های موفق زیادی را پیاده سازی کرده ایم. $project->title یکی از آن هاست.");
        $this->seo()->metatags()->setKeywords($project->title);
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setUrl(url()->current());


        return view('home.project.single', compact('project'));
    }
}
