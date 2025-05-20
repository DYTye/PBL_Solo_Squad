<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\guru\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('layouts.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('layouts.guru.create'); // Pastikan file create.blade.php ada
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nuptk' => 'nullable|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'nip' => 'nullable|string|max:255',
            'status_kepegawaian' => 'nullable|string|max:255',
            'jenis_ptk' => 'nullable|string|max:255',
            'agama' => 'nullable|string|max:255',
            'hp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'tugas_tambahan' => 'nullable|string|max:255',
            'nama_ibu_kandung' => 'nullable|string|max:255',
            'status_perkawinan' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:255',
        ]);

        Guru::create($validated);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit(Guru $guru)
    {
        return view('layouts.guru.update', compact('guru')); // Pastikan file edit.blade.php ada
    }

    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nuptk' => 'nullable|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'nip' => 'nullable|string|max:255',
            'status_kepegawaian' => 'nullable|string|max:255',
            'jenis_ptk' => 'nullable|string|max:255',
            'agama' => 'nullable|string|max:255',
            'hp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'tugas_tambahan' => 'nullable|string|max:255',
            'nama_ibu_kandung' => 'nullable|string|max:255',
            'status_perkawinan' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:255',
        ]);

        $guru->update($validated);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diupdate.');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
    }

    public function show($id)
{
    $guru = Guru::with(['alamat', 'kompetensi', 'pasangan', 'pengangkatan'])->findOrFail($id);
    return view('layouts.guru.show', compact('guru'));
}

public function detail($id)
{
    $guru = Guru::with(['alamat', 'kompetensi'])->findOrFail($id);
    return view('layouts.guru.detail', compact('guru'));
}


}
