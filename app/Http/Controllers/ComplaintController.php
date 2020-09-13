<?php

namespace App\Http\Controllers;

use App\Exports\ComplaintExport;
use App\Http\Requests\ComplaintRequest;
use App\Models\BroadCategory;
use App\Models\Complaint;
use App\Models\Program;
use App\Models\Project;
use App\Models\Province;
use App\Models\SpecificCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;


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
        $complaints = Complaint::latest();
        $projects = Project::all();
        $provinces = Province::all();

        if ( ! empty(request('province'))) {
            $complaints->where('province_id', request('province'));
        }

        if (!empty(request('status'))) {
            $complaints->where('status', request('status'));
        }

        if (!empty(request('caller_name'))) {
            $complaints->where('caller_name', request('caller_name'));
        }

        if (!empty(request('quarter'))) {
            $complaints->where('quarter', request('quarter'));
        }

        $complaints = $complaints->paginate(10);

        return view('complaint.index', compact('complaints', 'projects', 'provinces'));
    }

    /**
     * Get the complaint details
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $complaint = Complaint::findOrFail($id);

        return view('complaint.details', compact('complaint'));
    }

    /**
     * Create a new complaint
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $complaint = Complaint::all();
        $broadCategories = BroadCategory::all();
        $specificCategory = SpecificCategory::all();
        $programs = Program::all();
        $projects = Project::all();
        $provinces = Province::all();
      //  $mode=('PDM Survey','Exist Interview','Comunity Feedback');

        return view('complaint.create',
            compact('broadCategories', 'specificCategory', 'programs', 'projects', 'provinces', 'complaint'));
    }

    /**
     * Get store the complaints
     *
     * @param  ComplaintRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ComplaintRequest $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('beneficiary_file')) {
            $path = Storage::putFile('complaints', $request->file('beneficiary_file'));
            $requestData['beneficiary_file'] = $path;
        }

        Auth::user()->complaints()->create($requestData);

        return redirect('/complaints')->with([
            'message' => 'Complaint created successfully', 'status' => true
        ]);
    }

    /**
     * Get the edit view of complaint
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $complaint = Complaint::find($id);

        $broadCategories = BroadCategory::all();
        $specificCategory = SpecificCategory::all();
        $programs = Program::all();
        $projects = Project::all();
        $provinces = Province::all();

        return view('complaint.edit',
            compact('broadCategories', 'specificCategory', 'programs', 'projects', 'provinces', 'complaint'));
    }

    /**
     * Update the complaints
     *
     * @param  ComplaintRequest  $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ComplaintRequest $request, $id)
    {
        $complaint = Complaint::findOrFail($id);

        $requestData = $request->all();
        if ($request->hasFile('beneficiary_file')) {
            Storage::delete($complaint->beneficiary_file);
            $path = Storage::putFile('complaints', $request->file('beneficiary_file'));
            $requestData['beneficiary_file'] = $path;
        }

        $complaint->update($requestData);

        return redirect("/complaints/".$complaint->id);
    }

    /**
     * Get delete the complaints
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();

        Storage::delete($complaint->beneficiary_file);

        return redirect("/complaints");
    }

    /**
     * Export complaints to excel
     *
     * @param  Request  $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export(Request $request)
    {
        return Excel::download(new ComplaintExport($request->all()),
            'Complaint Report on '.now()->format('Y-m-d').'.xlsx');
    }
}
