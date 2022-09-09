<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
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
        $users = User::paginate(10);

        return view('user.index', compact('users'));
    }

    /**
     * @edit user
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * @update user
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return back();
    }

    /**
     * @delete user
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');
    }

    /**
     * @User profile
     */
    public function show($id)
    {
      $user=User::findOrFail($id);
      return view('user.profile',compact('user')) ;
    }
}
