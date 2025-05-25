<?php

namespace App\Http\Controllers;

use App\Models\Tahunajar;
use Illuminate\Http\Request;

class TahunAjarController extends Controller
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
        return view('layouts.tahun_ajar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tahun_ajar' => ['required', 'regex:/^\d{4}\/\d{4}$/'],
            'semester' => ['required', 'in:ganjil,genap'],
            'status' => ['required', 'in:aktif,nonaktif'],

        ]);
        $tahun_ajar = Tahunajar::create($validated);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(tahun_ajar $tahun_ajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tahun_ajar $tahun_ajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tahun_ajar $tahun_ajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tahun_ajar $tahun_ajar)
    {
        //
    }
}
