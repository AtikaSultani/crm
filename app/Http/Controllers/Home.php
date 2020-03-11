<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\broad_category;
use App\districts;
use App\referred_program;
use App\specific_category;
use App\Provinces;
use App\complaints;
use App\User;

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
        $data=complaints::all();
        return view('index',compact('data'));
    }

    public function create()
    {
        $broad_category = broad_category::all();
        $referred_programs = referred_program::all();
        $specific_category = specific_category::all();
        $province = Provinces::all()->pluck('name', 'id');
        $district = Districts::all()->pluck('name', 'id');
        return view('create', compact('broad_category', 'referred_programs', 'specific_category', 'province', 'district'));
    }

    public function districts($id)
    {
        $districts = Districts::where('province_id', $id)->pluck('name', 'id');
        return $districts;
    }

    //this function store data from form to database
    public function store(Request $request)
    {

        //stor user data in database
        Complaints::create([
            'caller_name' => $request->caller_name,
            'tel_no_received' => $request->tel_no_received,
            'gender' => $request->gender,
            'received_date' => $request->received_date,
            'status' => $request->status,
            'quarter' => $request->quarter,
            'referred_to' => $request->referred_to,
            'broad_category_id' => $request->broad_category,
            'specific_category_id' => $request->specific_category,
            'received_by' => $request->received_by,
            'person_who_shared_action' => $request->person_who_shared_action,
            'close_date' => $request->close_date,
            'description' => $request->description,
            'beneficiary_file'=>$request->beneficiary_file,
            'province_id' => $request->province,
            'district_id' => $request->district,
            'village' => $request->village,
            'user_id' => $request->user_id


        ]);
        if ('complaints'!='') {
            return "";
        } else {
            return "Please fill the form";
        }

    }

}
