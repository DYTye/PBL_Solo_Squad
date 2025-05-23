<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Berita;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('layouts.berita.index',compact('beritas'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_berita' => 'required|string|',
            'isi_berita' => 'required|string',
            'gambar' => 'required|image|max:2048'
        ]);

        $beritas = Berita::create($validated);

        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        $siswa = Siswa::with(['alamat', 'orangtua', 'detail', 'bantuan'])->findOrFail($id);



        return view('layouts.siswa.siswa_detail', [
            'sAlamat' => $siswa->alamat,
            'orangtua' => $siswa->orangtua,
            'sDetail' => $siswa->detail,
            'sBantuan' => $siswa->bantuan,
        ]);
        

      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
