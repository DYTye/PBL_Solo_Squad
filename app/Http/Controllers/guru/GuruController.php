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
            'nama' => 'required|string|max:50',
            'nuptk' => 'nullable|string|unique:gurus,nuptk|max:20',
            'nip' => 'nullable|string|unique:gurus,nip|max:20',
            'jenis_kelamin' => 'nullable|in:L,P',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'agama' => 'nullable|string|max:15',
            'hp' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:50',
            'nama_pasangan' => 'nullable|string|max:50',
            'nip_pasangan' => 'nullable|string|max:20',
            'pekerjaan_pasangan' => 'nullable|string|max:25',
            'status_kepegawaian' => 'nullable|string|max:10',
            'jenis_ptk' => 'nullable|string|max:10',
            'npwp' => 'nullable|string|max:20',
            'nama_ibu_kandung' => 'nullable|string|max:50',
            'status_perkawinan' => 'nullable|string|max:15',
            'tugas_tambahan' => 'nullable|string|max:25',
            'sudah_lisensi_kepala_sekolah' => 'boolean',
            'pernah_diklat_kepengawasan' => 'boolean',
            'keahlian_braille' => 'boolean',
            'keahlian_bahasa_isyarat' => 'boolean',
            'tanggal_cpns' => 'nullable|date',
            'sk_pengangkatan' => 'nullable|string|max:25',
            'tmt_pengangkatan' => 'nullable|date',
            'lembaga_pengangkatan' => 'nullable|string|max:25',
            'pangkat_golongan' => 'nullable|string|max:10',
            'sumber_gaji' => 'nullable|string|max:15',
        ]);

        Guru::create($validated);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    // Tampilkan halaman detail guru
    public function detail($id)
    {
        $guru = Guru::findOrFail($id);
        return view('layouts.guru.detail', compact('guru'));
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
            'nama' => 'required|string|max:50',
            'nuptk' => 'nullable|string|unique:gurus,nuptk,' . $guru->id . '|max:20',
            'nip' => 'nullable|string|unique:gurus,nip,' . $guru->id . '|max:20',
            'jenis_kelamin' => 'nullable|in:L,P',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'agama' => 'nullable|string|max:15',
            'hp' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:50',
            'nama_pasangan' => 'nullable|string|max:50',
            'nip_pasangan' => 'nullable|string|max:20',
            'pekerjaan_pasangan' => 'nullable|string|max:25',
            'status_kepegawaian' => 'nullable|string|max:10',
            'jenis_ptk' => 'nullable|string|max:10',
            'npwp' => 'nullable|string|max:20',
            'nama_ibu_kandung' => 'nullable|string|max:50',
            'status_perkawinan' => 'nullable|string|max:15',
            'tugas_tambahan' => 'nullable|string|max:25',
            'sudah_lisensi_kepala_sekolah' => 'boolean',
            'pernah_diklat_kepengawasan' => 'boolean',
            'keahlian_braille' => 'boolean',
            'keahlian_bahasa_isyarat' => 'boolean',
            'tanggal_cpns' => 'nullable|date',
            'sk_pengangkatan' => 'nullable|string|max:25',
            'tmt_pengangkatan' => 'nullable|date',
            'lembaga_pengangkatan' => 'nullable|string|max:25',
            'pangkat_golongan' => 'nullable|string|max:10',
            'sumber_gaji' => 'nullable|string|max:15',
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