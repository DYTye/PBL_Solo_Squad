<?php

namespace App\Http\Controllers;

use App\Models\SPP;
use App\Models\Tahunajar;
use App\Models\siswa\Siswa;
use Illuminate\Http\Request;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spps = SPP::all();
        return view('layouts.spp.index',compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tahun_ajar = Tahunajar::where('status', 'aktif')->first();
        $siswa = null;

        return view('layouts.spp.create', compact('tahun_ajar','siswa'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'siswa_id' => 'required|string',
        'tahun_ajar_id' => 'required|string',
        'tanggal' => 'required|date',
        'jumlah' => 'required|string',
        'keterangan' => 'required|string',
        'bukti_pembayaran' => 'required|file|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('bukti_pembayaran')) {
        $file = $request->file('bukti_pembayaran');

        // simpan file ke storage/app/public/bukti_pembayaran
        // jangan lupa jalankan php artisan storage:link kalau belum
        $path = $file->store('bukti_pembayaran', 'public');


        // ambil nama file saja, supaya disimpan di DB
        $filename = basename($path);

        // update data validasi supaya kolom 'bukti_pembayaran' menyimpan nama file
        $validated['bukti_pembayaran'] = $filename;
    }

    // Simpan data ke database hanya sekali, sudah lengkap dengan nama file
    SPP::create($validated);

    return redirect()->route('spp.index')->with('success', 'Data berhasil disimpan!');
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

    public function form(Request $request)
{
    $nipd = $request->query('nipd');
    $siswa = null;

    if ($nipd) {
        $siswa = Siswa::where('nipd', $nipd)->first();

        if (!$siswa) {
            // Redirect kembali dengan pesan error
            return redirect()->route('spp.form')
                             ->withInput()
                             ->withErrors(['nipd' => 'Data siswa dengan NIPD tersebut tidak ditemukan']);
        }
    }
    

    $tahun_ajar = Tahunajar::where('status', 'aktif')->first();

    return view('layouts.spp.create', compact('siswa', 'tahun_ajar'));
}

    
}
