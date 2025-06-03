<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surats = Surat::all();
        return view('layouts.surat.index',compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.surat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'kategori' => 'required|string',
            'tanggal'=> 'required|date',
            'perihal'=>'required|string',
            'judul_surat'=>'required|string', 
            'lampiran' => 'required|file|mimes:pdf,docx,doc|max:7048',
 
        ]);
        
        if($request->hasFile('lampiran')){
            $file = $request->file('lampiran');
            $path = $file->store('lampiran','public');
            $filename = basename($path);
            $validated['lampiran']=$filename;
        };
        $surats = Surat::create($validated);
        return redirect()->route('surat.index');    
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $surat)
    {
        //
    }
}
