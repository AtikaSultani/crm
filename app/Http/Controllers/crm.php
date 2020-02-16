<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crm extends Controller
{

  public function index()
  {
    return view('dashboard');
  }

    public function create()
    {
      return view('crm_create');
    }
}
