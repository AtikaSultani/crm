<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Project;

class ProvinceController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Get districts of
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function districts($id)
    {
        $province = Province::find($id);

        return view('helper.district', compact('province'));
    }
 //retunr all projects per province
    public function Projects($id)
    {
        $project = Project::find($id);

        return view('helper.project', compact('project'));
    }
}
