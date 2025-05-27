<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('layouts.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('layouts.guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:50',
            'nuptk' => 'nullable|string|unique:gurus,nuptk|max:20',
            'nip' => 'nullable|string|unique:gurus,nip|max:20',
            'status' => 'nullable|string|max:50',
            'jenis_kelamin' => 'nullable|in:L,P',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'agama' => 'nullable|string|max:15',
            'hp' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:50',
            'nama_pasangan' => 'nullable|string|max:50',
            'nip_pasangan' => 'nullable|string|max:20',
            'pekerjaan_pasangan' => 'nullable|string|max:25',
            'status_kepegawaian' => 'nullable|string|max:20',
            'jenis_ptk' => 'nullable|string|max:50',
            'npwp' => 'nullable|string|max:20',
            'nama_ibu_kandung' => 'nullable|string|max:50',
            'status_perkawinan' => 'nullable|string|max:20',
            'tugas_tambahan' => 'nullable|string|max:50',
            'sudah_lisensi_kepala_sekolah' => 'boolean',
            'pernah_diklat_kepengawasan' => 'boolean',
            'keahlian_braille' => 'boolean',
            'keahlian_bahasa_isyarat' => 'boolean',
            'tmt_pns' => 'nullable|date',
            'sk_cpns' => 'nullable|string|max:25',
            'tanggal_cpns' => 'nullable|date',
            'sk_pengangkatan' => 'nullable|string|max:50',
            'tmt_pengangkatan' => 'nullable|date',
            'lembaga_pengangkatan' => 'nullable|string|max:50',
            'pangkat_golongan' => 'nullable|string|max:10',
            'sumber_gaji' => 'nullable|string|max:20',
            'jalan' => 'nullable|string|max:50',
            'rt' => 'nullable|string|max:10',
            'rw' => 'nullable|string|max:10',
            'nama_dusun' => 'nullable|string|max:50',
            'desa_kelurahan' => 'nullable|string|max:50',
            'kecamatan' => 'nullable|string|max:50',
            'kode_pos' => 'nullable|string|max:10',
        ]);

        Guru::create($validated);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function detail($id)
    {
        $guru = Guru::findOrFail($id);
        return view('layouts.guru.detail', compact('guru'));
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('layouts.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:50',
            'nuptk' => 'nullable|string|unique:gurus,nuptk,' . $guru->id . '|max:20',
            'nip' => 'nullable|string|unique:gurus,nip,' . $guru->id . '|max:20',
            'status' => 'nullable|string|max:50',
            'jabatan' => 'nullable|string|max:50',
            'jenis_kelamin' => 'nullable|in:L,P',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'agama' => 'nullable|string|max:15',
            'hp' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:50',
            'nama_pasangan' => 'nullable|string|max:50',
            'nip_pasangan' => 'nullable|string|max:20',
            'pekerjaan_pasangan' => 'nullable|string|max:25',
            'status_kepegawaian' => 'nullable|string|max:20',
            'jenis_ptk' => 'nullable|string|max:50',
            'npwp' => 'nullable|string|max:20',
            'nama_ibu_kandung' => 'nullable|string|max:50',
            'status_perkawinan' => 'nullable|string|max:20',
            'tugas_tambahan' => 'nullable|string|max:50',
            'sudah_lisensi_kepala_sekolah' => 'boolean',
            'pernah_diklat_kepengawasan' => 'boolean',
            'keahlian_braille' => 'boolean',
            'keahlian_bahasa_isyarat' => 'boolean',
            'tmt_pns' => 'nullable|date',
            'sk_cpns' => 'nullable|string|max:25',
            'tanggal_cpns' => 'nullable|date',
            'sk_pengangkatan' => 'nullable|string|max:50',
            'tmt_pengangkatan' => 'nullable|date',
            'lembaga_pengangkatan' => 'nullable|string|max:50',
            'pangkat_golongan' => 'nullable|string|max:10',
            'sumber_gaji' => 'nullable|string|max:20',
            'jalan' => 'nullable|string|max:50',
            'rt' => 'nullable|string|max:10',
            'rw' => 'nullable|string|max:10',
            'nama_dusun' => 'nullable|string|max:50',
            'desa_kelurahan' => 'nullable|string|max:50',
            'kecamatan' => 'nullable|string|max:50',
            'kode_pos' => 'nullable|string|max:10',
        ]);

        $guru->update($validated);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus');
    }
}
