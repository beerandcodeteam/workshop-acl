<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuleStoreRequest;
use App\Http\Requests\ModuleUpdateRequest;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('module.index')
            ->with('modules', Module::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModuleStoreRequest $request)
    {
        Module::create($request->validated());
        return redirect(route('module.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        return view('module.show')
            ->with('module', $module);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        return view('module.edit')
            ->with('module', $module);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModuleUpdateRequest $request, Module $module)
    {

        $data = $request->all();

        $data['show_home'] = $data['show_home'] ?? false;
        $module->update($data);
        return redirect(route('module.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect(route('module.index'));
    }
}
