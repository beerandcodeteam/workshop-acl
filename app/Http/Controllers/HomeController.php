<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $modules = Module::where('show_home', 1)->get();
        return view('dashboard')
            ->with('modules', $modules);
    }
}
