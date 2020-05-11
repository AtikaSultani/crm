<?php

namespace App\Http\Controllers;

use App\Models\BroadCategory;
use App\Models\Complaint;
use App\Models\District;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use App\Models\SpecificCategory;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ComplaintExport;
use Illuminate\Http\Request;


class ComplaintController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get list of all complaints
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $complaints = Complaint::paginate(10);

        return view('complaint.index', compact('complaints'));
    }


    /**
     * Create a new complaint
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $broad_category = BroadCategory::all();
        $specific_category = SpecificCategory::all();
        $programs = Program::all();
        $projects = Project::all();
        $province = Province::all();
        $district = District::all();

        return view('complaint.create',
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
            'broad_category_id'        => $request->broad_category_id,
            'specific_category_id'     => $request->specific_category_id,
            'person_who_shared_action' => $request->person_who_shared_action,
            'close_date'               => $request->close_date,
            'project_id'               => $request->project_id,
            'program_id'               => $request->program_id,
            'description'              => $request->description,
            'province_id'              => $request->province_id,
            'district_id'              => $request->district_id,
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

        $broad_category = broad_category::all();
        $specific_category = Specific_category::all();
        $programs = Program::all();
        $projects = Project::all();
        $provinces = Province::all('id', 'province_name');
        $districts = District::all('id', 'district_name');
        $statuses = ['Registered', 'Under Investigation', 'Solved', 'Pending'];
        $quarters = ['First Quarter', 'Second Quarter', 'Third Quarter', 'Fourth Quarter'];
        $refers = ['DCD/CD', 'Officer', 'Partner', 'PM'];

        return view('edit',
            compact('data', 'id', 'broad_category', 'specific_category', 'programs', 'projects', 'provinces',
                'districts', 'statuses', 'quarters', 'refers'));
    }

    public function update(Request $request, $id)
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
        $complaint = Complaint::findOrFail($id);
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
      return "welcom";exit;
        $user = Complaint::findOrFail($id);
        $user->delete();

        return back();
    }
    public function export()
    {
      return Excel::download(new ComplaintExport(),'Complaint Report.xlsx');
    }


    public function details($id)
    {
      $data=Complaint::find($id);
      return view('complaint.detail',compact('data','id'));
    }
}
