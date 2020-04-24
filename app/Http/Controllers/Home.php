<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Broad_category;
use App\Districts;
use App\Referred_program;
use App\Specific_category;
use App\Provinces;
use App\Projects;
use App\Programs;
use App\Complaints;
use App\User;
use DB;


class home extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        return view('dashboard');
    }
    public function index()
    {

       $data=DB::table('complaints')
            ->join('referred_programs','referred_programs.id','=','complaints.referred_to')
            ->join('broad_categories','broad_categories.id','=','complaints.broad_category_id')
            ->join('specific_categories','specific_categories.id','=','complaints.specific_category_id')
            ->join('projects','projects.id','=','complaints.project_id')
            ->join('programs','programs.id','=','complaints.program_id')
            ->join('provinces','provinces.id','=','complaints.province_id')
            ->join('districts','districts.id','=','complaints.district_id')
            ->get();

        return view('index',compact('data'));
    }

    public function create()
    {
        $broad_category = broad_category::all();
        $referred_programs = referred_program::all();
        $specific_category = specific_category::all();
        $programs=Programs::all();
        $projects=Projects::all();
        $province = Provinces::all()->pluck('province_name', 'id');
        $district = Districts::all()->pluck('district_name', 'id');
        return view('create', compact('broad_category', 'referred_programs', 'specific_category','programs','projects', 'province', 'district'));
    }

    public function districts($id)
    {
        $districts = Districts::where('province_id', $id)->pluck('district_name', 'id');
        return $districts;
    }

    //this function store data from form to database
    public function store(Request $request)
    {

      //return($request);exit;
      $file=$request->file('beneficiary_file');


        //stor user data in database
        Complaints::create([
            'caller_name' => $request->caller_name,
            'tel_no_received' => $request->tel_no_received,
            'gender' => $request->gender,
            'received_date' => $request->received_date,
            'status' => $request->status,
            'quarter' => $request->quarter,
            'referred_to' => $request->referred_to,
            'beneficiary_file'=>$file,
            'broad_category_id' => $request->broad_category,
            'specific_category_id' => $request->specific_category,
            'received_by' => $request->received_by,
            'person_who_shared_action' => $request->person_who_shared_action,
            'close_date' => $request->close_date,
            'project_id' => $request->project_name,
            'program_id'=>$request->program_name,
            'description' => $request->description,
            'province_id' => $request->province,
            'district_id' => $request->district,
            'village' => $request->village,
            'user_id' => $request->user_id


        ]);
        if ($request->file('beneficiary_file') == null) {
            $file = "";
        }else{
         $file->store('upload','public');
       }
        if ('complaints'!='') {
            return redirect()->back()->with("msg", "The Complaints Registration Was Successfully Completed");
        } else {
            return "Please fill the form";
        }

    }

    Public function destroy($id)
      {
        $user=Complaints::findOrFail($id);
        $user->delete();
        return back();

      }

      public function edit($id)
      {
 //return data from multiple table acording to Id
        $data = Complaints::find($id);
             // ->join('referred_programs','referred_programs.id','=','complaints.referred_to')
             // ->join('broad_categories','broad_categories.id','=','complaints.broad_category_id')
             // ->join('specific_categories','specific_categories.id','=','complaints.specific_category_id')
             // ->join('provinces','provinces.id','=','complaints.province_id')
             // ->join('districts','districts.id','=','complaints.district_id')
             // ->get();

         return view('edit',compact('data','id'));
      }


}
