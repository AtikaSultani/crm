<?php

namespace App\Http\Controllers;

use App\Models\Province;

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
}
