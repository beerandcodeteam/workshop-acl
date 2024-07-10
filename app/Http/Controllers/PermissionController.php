<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionStoreRequest;
use App\Http\Requests\PermissionUpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('permission.index')
            ->with('permissions', Permission::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles= Role::all();
        return view('permission.create')
            ->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionStoreRequest $request)
    {
        $permission = Permission::create($request->validated());
        $permission->roles()->sync($request->role_id);
        return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return view('permission.show')
            ->with('permission', $permission);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $roles= Role::all();
        return view('permission.edit')
            ->with('permission', $permission->load('roles'))
            ->with('roles', $roles);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionUpdateRequest $request, Permission $permission)
    {

        $permission->update($request->validated());
        $permission->roles()->detach();
        $permission->roles()->sync($request->role_id);
        return redirect(route('permission.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect(route('permission.index'));
    }
}
