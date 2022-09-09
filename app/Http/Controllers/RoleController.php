<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Get the roles paginated
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::paginate(10);

        return view('user.role.index', compact('roles'));

    }

    /**
     * Get details of role
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);

        $permissions = Permission::all();

        return view('user.role.detail', compact('role', 'permissions'));
    }

    /**
     * Get create roles
     *
     * @param  RoleRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RoleRequest $request)
    {
        Role::create($request->all());

        return back();
    }

    /**
     * Get the edit role
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        return view('user.role.edit', compact('role'));
    }

    /**
     * Update role name
     *
     * @param  RoleRequest  $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        $role->update($request->all());

        return back();
    }

    /**
     * Sync permissions of role
     *
     * @param  Request  $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function syncPermissions(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $role->syncPermissions($request->permissions);

        return redirect('/roles');
    }

    /**
     * Get view of assign role
     *
     * @param $userId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUserRole($userId)
    {
        $roles = Role::all();

        $user = User::find($userId);

        return view('user.partial.assign-role', compact('user', 'roles'));
    }

    /**
     * Assign role to user
     *
     * @param  Request  $request
     * @param $userId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function assignRole(Request $request, $userId)
    {
        $user = User::find($userId);

        $user->syncRoles($request->role);

        return redirect('/users');
    }

    /**
     * Delete the role
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return back();
    }
}
