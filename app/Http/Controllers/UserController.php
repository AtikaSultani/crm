<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get list of users paginated
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $users = User::paginate(10);

        return view('user.index', compact('users'));
    }

    public function show($id)
    {
        return 'Coming soon';
    }
}