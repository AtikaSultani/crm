<?php

namespace App\Http\Controllers;


class SpecificCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}
