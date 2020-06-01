<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Get the profile view
     *
     */
    public function index()
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    /**
     * Change password
     *
     * @param  ChangePasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        Auth::user()->update([
            'password' => bcrypt($request->password)
        ]);

        return back();
    }
}
