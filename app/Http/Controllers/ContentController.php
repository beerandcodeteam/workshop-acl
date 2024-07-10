<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentStoreRequest;
use App\Http\Requests\ContentUpdateRequest;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.index')
            ->with('contents', Content::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContentStoreRequest $request)
    {
        Content::create($request->validated());
        return redirect(route('content.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {


        return view('content.show')
            ->with('content', $content->load('comments.user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        return view('content.edit')
            ->with('content', $content);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContentUpdateRequest $request, Content $content)
    {
        $content->update($request->validated());
        return redirect(route('content.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $content->delete();
        return redirect(route('content.index'));
    }
}
