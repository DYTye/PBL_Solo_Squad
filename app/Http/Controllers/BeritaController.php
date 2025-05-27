<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('layouts.berita.index', compact('beritas'));
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
            'judul_berita' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar' => 'required|image|max:2048'
        ]);

        // Simpan gambar
        $file = $request->file('gambar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/berita', $filename);

        // Simpan berita
        Berita::create([
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'gambar' => $filename
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }


    public function show(Berita $berita)
    {
        return view('layouts.berita.show', compact('berita'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('layouts.berita.update', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'judul_berita' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar' => 'nullable|image|max:2048'
        ]);

        // Jika ada gambar baru, hapus gambar lama dan upload baru
        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::exists('public/berita/' . $berita->gambar)) {
                Storage::delete('public/berita/' . $berita->gambar);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/berita', $filename);
            $berita->gambar = $filename;
        }

        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        if ($berita->gambar && Storage::exists('public/berita/' . $berita->gambar)) {
            Storage::delete('public/berita/' . $berita->gambar);
        }

        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
