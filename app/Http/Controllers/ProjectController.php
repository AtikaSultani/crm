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
        $projects = Project::paginate(10);

        return view("project.index", compact('projects'));
    }

    public function create()
    {
        $province = Province::all();
        $district = District::all();
        $programs = Program::all();

        return view('project.create', compact('province', 'district', 'programs'));
    }

    public function store(Request $request)
    {

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
            'on_budget_project'     => $request->on_budget,
            'off_budget_project'    => $request->off_budget,
            'budget'                 => $request->budget,
            'province_id'            => $request->province,
            'district_id'            => $request->district,
            'project_manager'        => $request->project_manager,
        ]);
        if ('Projects' != '') {
            return redirect('/projects')->with("msg", "The Project Added Successfully ");
        } else {
            return "Please fill the form";
        }
    }

    public function edit($id)
    {
      $data=Project::find($id);
      $provinces = Province::all('id', 'province_name');
      $programs = Program::all();
      $districts = District::all('id', 'district_name');
        return view('project.edit', compact('data','id','provinces','districts','programs'));
    }


    /**
     * Update project
     *
     * @param  Request  $request
     * @param  Project  $project
     */
    public function update(Request $request, $id)
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
      $project=Project::findOrFail($id);
      $project->update([
        'project_name'           => $request->project_name,
        'NGO_name'               => $request->NGO_name,
        'program_id'             => $request->program_name,
        'start_date'             => $request->start_date,
        'end_date'               => $request->end_date,
        'donors'                 => $request->donors,
        'activities'             => $request->activities,
        'direct_beneficiaries'   => $request->direct_beneficiaries,
        'indirect_beneficiaries' => $request->indirect_beneficiaries,
        'on_budget_project'     => $request->on_budget,
        'off_budget_project'    => $request->off_budget,
        'budget'                 => $request->budget,
        'province_id'            => $request->province,
        'district_id'            => $request->district,
        'project_manager'        => $request->project_manager,
      ]);
      return redirect('/projects');
    }



    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect("/projects");
    }

     // it shows the project details
    public function show($id)
    {
      $data=Project::find($id);
      return view('project.ProjectDetails',compact('data','id'));
    }
}
