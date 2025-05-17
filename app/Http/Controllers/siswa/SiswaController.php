<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('layouts.siswa.index', compact('siswas'));
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
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('layouts.siswa.update', compact('siswa'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        $request->validate([
            'nama'=>'required',
            'nomor_induk_siswa'=>'required',
            'jenis_kelamin'=>'required',
            'kelas'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',  
        ]);
        $siswa = Siswa::all();
        $siswa = Siswa::findorFail($id);
        $siswa->update($validated);
        return redirect()->route('siswa.index')->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}
