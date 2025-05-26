<?php

namespace App\Http\Controllers;

use App\Models\SPP;
use App\Models\Tahunajar;
use Illuminate\Http\Request;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.spp.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tahun_ajar = Tahunajar::where('status', 'aktif')->first();

        return view('layouts.spp.create', compact('tahun_ajar'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|string',
            'tahun_ajar_id'=> 'required|string',
            'tanggal'=>'required|date',
            'jumlah'=>'required|string', 
            'bukti_pembayaran'=>'required|string', 
            'keterangan'=>'required|string', 
        ]); 
        $spps = SPP::create($validated);
        return redirect()->route('surat.index');  
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
