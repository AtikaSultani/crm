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
        $complaints = Complaint::paginate(10);

        return view('complaint.index', compact('complaints'));
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

        return redirect('/complaints');
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


    public function update(ComplaintRequest $request, $id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->update($request->all());

        return redirect("/complaints");
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
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export()
    {
        return Excel::download(new ComplaintExport(), 'Complaint Report.xlsx');
    }
}
