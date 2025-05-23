<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru\Guru;

class GuruController extends Controller
{
    // Tampilkan semua data guru
    public function index()
    {
        $gurus = Guru::all();
        return view('layouts.guru.index', compact('gurus'));
    }

    // Tampilkan form tambah guru
    public function create()
    {
        return view('layouts.guru.create');
    }

    // Simpan data guru baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'          => 'required|string|max:255',
            'nuptk'         => 'required|string|unique:gurus,nuptk|max:50',
            'nip'           => 'nullable|string|unique:gurus,nip|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir'  => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'agama'         => 'nullable|string|max:50',
            'hp'            => 'nullable|string|max:20',
            'email'         => 'nullable|email|max:255',
        ]);

        Guru::create($validated);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    // Tampilkan form edit data guru
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('layouts.guru.edit', compact('guru'));
    }

    // Update data guru
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validated = $request->validate([
            'nama'          => 'required|string|max:255',
            'nuptk'         => 'required|string|unique:gurus,nuptk,' . $guru->id . '|max:50',
            'nip'           => 'nullable|string|unique:gurus,nip,' . $guru->id . '|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir'  => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'agama'         => 'nullable|string|max:50',
            'hp'            => 'nullable|string|max:20',
            'email'         => 'nullable|email|max:255',
        ]);

        $guru->update($validated);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui');
    }

    // Hapus data guru
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus');
    }
}
