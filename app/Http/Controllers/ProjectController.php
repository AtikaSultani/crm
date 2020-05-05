<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view("project.index", compact('projects'));
    }

    public function create()
    {
        $province = Province::all()->pluck('province_name', 'id');
        $district = District::all()->pluck('district_name', 'id');
        $programs = Program::all();

        return view('project.create', compact('province', 'district', 'programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name'    => "required|unique:projects",
            'NGO_name'        => "required",
            'program_name'    => "required",
            'start_date'      => "required|date",
            'end_date'        => "required|date",
            'donors'          => "required",
            'activities'      => "required",
            'province'        => "required",
            'district'        => "required",
            'project_manager' => "required"
        ]);
        Project::create([
            'project_name'           => $request->project_name,
            'NGO_name'               => $request->NGO_name,
            'program_id'             => $request->program_name,
            'start_date'             => $request->start_date,
            'end_date'               => $request->end_date,
            'donors'                 => $request->donors,
            'activities'             => $request->activities,
            'direct_beneficiaries'   => $request->direct_beneficiaries,
            'indirect_beneficiaries' => $request->indirect_beneficiaries,
            'on_budject_project'     => $request->on_budjet,
            'off_budject_project'    => $request->off_budjet,
            'budjet'                 => $request->budjet,
            'province_id'            => $request->province,
            'district_id'            => $request->district,
            'project_manager'        => $request->project_manager,
        ]);
        if ('Projects' != '') {
            return redirect()->back()->with("msg", "The Project Added Successfully ");
        } else {
            return "Please fill the form";
        }
    }

    public function show(Project $project)
    {
        //
    }


    public function edit($id)
    {
        return 'Please add the edit file of programs';
    }


    /**
     * Update project
     *
     * @param  Request  $request
     * @param  Project  $project
     */
    public function update(Request $request, Project $project)
    {
        //
    }


    /**
     * Delete project
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return back();
    }
}
