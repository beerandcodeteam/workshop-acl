<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Role::class);
        return view('role.index')
            ->with('roles', Role::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Role::class);
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request)
    {
        Gate::authorize('create', Role::class);
        Role::create($request->validated());
        return redirect(route('role.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        Gate::authorize('view', $role);
        return view('role.show')
            ->with('role', $role);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        Gate::authorize('view', $role);
        return view('role.edit')
            ->with('role', $role);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleUpdateRequest $request, Role $role)
    {
        Gate::authorize('update', $role);
        $role->update($request->validated());
        return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        Gate::authorize('delete', $role);
        if ($role->users->count() > 0) {

            dd("remova os usuarios primeiro");

        }

        $role->delete();
        return redirect(route('role.index'));
    }
}
