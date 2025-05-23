<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Models\Siswa\orangtua;
use Illuminate\Routing\Controller;

class OrangtuaController extends Controller
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
    public function show($id)
    {
        $orangtua = Orangtua::findOrFail($id);
        return view('layouts.siswa.siswa_detail',compact('orangtua'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orangtua $orangtua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, orangtua $orangtua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orangtua $orangtua)
    {
        //
    }
}
