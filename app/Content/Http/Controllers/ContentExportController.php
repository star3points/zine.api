<?php

namespace App\Content\Http\Controllers;

use Illuminate\Http\Request;

class ContentExportController
{
    /**
     * returns available content export targets
     * by user or content
     */
    public function target()
    {
        return [
            ['service' => 'Tumblr', 'as' => 'post']
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}