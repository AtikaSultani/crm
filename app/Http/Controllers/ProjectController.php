<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Provinces;
use App\Districts;
use App\Programs;
use DB;
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
      $data=DB::table('projects')
      ->join('provinces','provinces.id','=','projects.province_id')
      ->join('districts','districts.id','=','projects.district_id')
      ->join('programs','programs.id','=','projects.program_id')
       ->get();
      return view("projects.projects",compact('data'));

    }
    public function create()
    {
      $province = Provinces::all()->pluck('province_name', 'id');
      $district = Districts::all()->pluck('district_name', 'id');
      $programs=Programs::all();
      return view('projects.create',compact('province','district','programs'));
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Projects::create([
          'project_name'=>$request->project_name,
          'NGO_name'=>$request->NGO_name,
          'program_id'=>$request->program_name,
          'start_date'=>$request->start_date,
          'end_date'=>$request->end_date,
          'donors'=>$request->donors,
          'activities'=>$request->activities,
          'direct_beneficiaries'=>$request->direct_beneficiaries,
          'indirect_beneficiaries'=>$request->indirect_beneficiaries,
          'on_budject_project'=>$request->on_budjet,
          'off_budject_project'=>$request->off_budjet,
          'budjet'=>$request->budjet,
          'province_id'=>$request->province,
          'district_id'=>$request->district,
        ]);
        if ('Projects'!='') {
            return redirect()->back()->with("msg", "The Project Added Successfully ");
        } else {
            return "Please fill the form";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          $user=Projects::findOrFail($id);
          $user->delete();
          return back();


    }
}
