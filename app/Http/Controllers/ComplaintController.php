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
        $complaints = Complaint::latest()->paginate(10);
        $projects = Project::all();

        return view('complaint.index', compact('complaints', 'projects'));
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
        $broadCategories = BroadCategory::all();
        $specificCategory = SpecificCategory::all();
        $programs = Program::all();
        $projects = Project::all();
        $provinces = Province::all();

        return view('complaint.create',
            compact('broadCategories', 'specificCategory', 'programs', 'projects', 'provinces'));
    }

    /**
     * Get store the complaints
     *
     * @param  ComplaintRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ComplaintRequest $request)
    {
        Auth::user()->complaints()->create($request->all());

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
        $complaint->update($request->all());

        return redirect("/complaints/".$complaint->id);
    }

    /**
     * Get delete the complaints
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    Public function destroy($id)
    {
        $complaints = Complaint::findOrFail($id);
        $complaints->delete();

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
