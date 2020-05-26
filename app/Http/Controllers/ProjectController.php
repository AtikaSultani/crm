<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\District;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view("project.index", compact('projects'));
    }

    /**
     * Get create view of projects
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $province = Province::all();
        $district = District::all();
        $programs = Program::all();

        return view('project.create', compact('province', 'district', 'programs'));
    }

    /**
     * Get project details
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data = Project::find($id);

        return view('project.details', compact('data', 'id'));
    }

    /**
     * Get store a new project
     *
     * @param  ProjectRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->all());

        return redirect('/projects')->with([
            'message' => 'Project created successfully', 'status' => true
        ]);

    }

    /**
     * Get edit form of project
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Project::find($id);
        $provinces = Province::all('id', 'province_name');
        $programs = Program::all();
        $districts = District::all('id', 'district_name');

        return view('project.edit', compact('data', 'id', 'provinces', 'districts', 'programs'));
    }

    /**
     * Update project
     *
     * @param  ProjectRequest  $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->update($request->all());

        return redirect("/projects");
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect("/projects");
    }
}
