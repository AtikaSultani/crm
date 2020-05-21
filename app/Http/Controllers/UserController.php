<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
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
    /**
     * Get list of users paginated
     *
     * @edit user
     */
    public function edit($id)
    {
      $user=User::find($id);
      return view('user.edit',compact('user'));
    }

    /**
     * Get list of users paginated
     *
     * @update user
     */

     public function update(UserRequest $request,$id)
     {
       $user = User::findOrFail($id);
       $user->update([
           'name' => $request->name,
           'email'   => $request->email,
       ]);

       return redirect('/users');
     }

     /**
      * Get list of users paginated
      *
      * @delete user
      */

      public function destroy($id)
      {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect('/users');
      }
}
