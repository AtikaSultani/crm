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

    /**
     * Get all project of province
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects($id)
    {
        $province = Province::find($id);

        return view('helper.project', compact('province'));
    }
}
