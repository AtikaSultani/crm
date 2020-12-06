<?php

namespace App\Http\Controllers;

use App\User;

class GuidlineController extends Controller
{
  public function __construct()
  {
      $this->middleware(['auth', 'verified']);
  }

  /**
   * Get list of users paginated
   *
   */
  public function index()
  {

  return view('guidline.index');
  }


}
