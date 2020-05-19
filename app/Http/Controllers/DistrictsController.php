<?php

namespace App\Http\Controllers;

class DistrictsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}
