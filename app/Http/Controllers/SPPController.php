<?php

namespace App\Http\Controllers;

use App\Models\SPP;
use Illuminate\Http\Request;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.spp.create');
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
    public function show(SPP $sPP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SPP $sPP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SPP $sPP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SPP $sPP)
    {
        //
    }
}
