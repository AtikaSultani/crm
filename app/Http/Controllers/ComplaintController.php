<?php

namespace App\Http\Controllers;

use App\Broad_category;
use App\Complaint;
use App\Models\District;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use App\Specific_category;
use DB;
use Illuminate\Http\Request;


class ComplaintController extends Controller
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

        $data = DB::table('complaints')
            ->join('broad_categories', 'broad_categories.id', '=', 'complaints.broad_category_id')
            ->join('specific_categories', 'specific_categories.id', '=', 'complaints.specific_category_id')
            ->join('projects', 'projects.id', '=', 'complaints.project_id')
            ->join('programs', 'programs.id', '=', 'complaints.program_id')
            ->join('provinces', 'provinces.id', '=', 'complaints.province_id')
            ->join('districts', 'districts.id', '=', 'complaints.district_id')
            ->get();


        return view('index', compact('data'));
    }



    public function create()
    {
        $broad_category = broad_category::all();
        $specific_category = specific_category::all();
        $programs = Program::all();
        $projects = Project::all();
        $province = Province::all()->pluck('province_name', 'id');
        $district = District::all()->pluck('district_name', 'id');

        return view('create',
            compact('broad_category', 'specific_category', 'programs', 'projects', 'province', 'district'));
    }

    public function districts($id)
    {
        $districts = District::where('province_id', $id)->pluck('district_name', 'id');

        return $districts;
    }

    //this function store data from form to database
    public function store(Request $request)
    {

        $request->validate([
            'caller_name'       => "required|max:15",
            'tel_no_received'   => "required|numeric",
            'gender'            => "required",
            'received_date'     => "required|date",
            'status'            => "required",
            'quarter'           => "required",
            'referred_to'       => "required",
            'broad_category'    => "required",
            'specific_category' => "required",
            'received_by'       => "required",
            'close_date'        => "required|date",
            'project_name'      => "required",
            'program_name'      => "required",
            'description'       => "required",
            'province'          => 'required',
            'district'          => 'required'
        ]);
        $file = $request->file('beneficiary_file');

        //stor user data in database
        Complaint::create([
            'caller_name'              => $request->caller_name,
            'tel_no_received'          => $request->tel_no_received,
            'gender'                   => $request->gender,
            'received_date'            => $request->received_date,
            'status'                   => $request->status,
            'quarter'                  => $request->quarter,
            'referred_to'              => $request->referred_to,
            'beneficiary_file'         => $file,
            'broad_category_id'        => $request->broad_category,
            'specific_category_id'     => $request->specific_category,
            'received_by'              => $request->received_by,
            'person_who_shared_action' => $request->person_who_shared_action,
            'close_date'               => $request->close_date,
            'project_id'               => $request->project_name,
            'program_id'               => $request->program_name,
            'description'              => $request->description,
            'province_id'              => $request->province,
            'district_id'              => $request->district,
            'village'                  => $request->village,
            'user_id'                  => $request->user_id
        ]);
        if ($request->file('beneficiary_file') == null) {
            $file = "";
        } else {
            $file->store('upload', 'public');
        }
        if ('complaint' != '') {
            return redirect('/complaints')->with("msg", "The Complaint Registred Successfully");
        } else {
            return "Please fill the form";
        }

    }


    public function edit($id)
    {
        $data = Complaint::find($id);
        $id = $id;
        $broad_category = broad_category::all();
        $specific_category = Specific_category::all();
        $programs = Program::all();
        $projects = Project::all();
        $provinces = Province::all('id', 'province_name');
        $districts = District::all('id', 'district_name');
        $statuses = ['Registered', 'Under Investigation', 'Solved', 'Pending'];
        $quarters=['First Quarter','Second Quarter','Third Quarter','Fourth Quarter'];
        $refers=['DCD/CD','Officer','Partner','PM'];
        return view('edit',
            compact('data', 'id', 'broad_category', 'specific_category', 'programs', 'projects', 'provinces',
                'districts', 'statuses','quarters','refers'));
    }

    public function update(Request $request ,$id)
      {

        $request->validate([
            'caller_name'       => "required|max:15",
            'tel_no_received'   => "required|numeric",
            'gender'            => "required",
            'received_date'     => "required|date",
            'status'            => "required",
            'quarter'           => "required",
            'referred_to'       => "required",
            'broad_category'    => "required",
            'specific_category' => "required",
            'received_by'       => "required",
            'close_date'        => "required|date",
            'project_name'      => "required",
            'program_name'      => "required",
            'description'       => "required",
            'province'          => 'required',
            'district'          => 'required'
        ]);
        $file = $request->file('beneficiary_file');
        $complaint=Complaint::findOrFail($id);
        $complaint->update([
            'caller_name'              => $request->caller_name,
            'tel_no_received'          => $request->tel_no_received,
            'gender'                   => $request->gender,
            'received_date'            => $request->received_date,
            'status'                   => $request->status,
            'quarter'                  => $request->quarter,
            'referred_to'              => $request->referred_to,
            'beneficiary_file'         => $file,
            'broad_category_id'        => $request->broad_category,
            'specific_category_id'     => $request->specific_category,
            'received_by'              => $request->received_by,
            'person_who_shared_action' => $request->person_who_shared_action,
            'close_date'               => $request->close_date,
            'project_id'               => $request->project_name,
            'program_id'               => $request->program_name,
            'description'              => $request->description,
            'province_id'              => $request->province,
            'district_id'              => $request->district,
            'village'                  => $request->village,
            'user_id'                  => $request->user_id
        ]);

        if ($request->file('beneficiary_file') == null) {
            $file = "";
        } else {
            $file->store('upload', 'public');
        }

        return redirect("/complaints");
      }


    Public function destroy($id)
    {
        $user = Complaint::findOrFail($id);
        $user->delete();

        return back();
    }
}
