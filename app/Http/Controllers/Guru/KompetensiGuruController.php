<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guru\KompetensiGuru;
use App\Models\guru\Guru;

class KompetensiGuruController extends Controller
{
    public function index($guru_id)
    {
        // Jika kamu ingin tetap menampilkan list kompetensi
        $guru = Guru::with('kompetensi')->findOrFail($guru_id);
        return view('layouts.kompetensiguru.index', compact('guru'));
        
        // Atau kalau kamu ingin langsung redirect ke detail guru:
        // return redirect()->route('guru.detail', $guru_id);
    }

    public function create($guru_id)
    {
        $guru = Guru::findOrFail($guru_id);
        return view('layouts.kompetensiguru.create', compact('guru'));
    }

    public function store(Request $request, $guru_id)
    {
        $request->validate([
            'tmt_pns' => 'nullable|date',
            'sudah_lisensi_kepala_sekolah' => 'nullable|boolean',
            'pernah_diklat_kepengawasan' => 'nullable|boolean',
            'keahlian_braille' => 'nullable|boolean',
            'keahlian_bahasa_isyarat' => 'nullable|boolean',
        ]);

        KompetensiGuru::create(array_merge(
            ['guru_id' => $guru_id],
            $request->only([
                'tmt_pns',
                'sudah_lisensi_kepala_sekolah',
                'pernah_diklat_kepengawasan',
                'keahlian_braille',
                'keahlian_bahasa_isyarat'
            ])
        ));

        // Redirect ke detail guru setelah simpan
        return redirect()->route('guru.detail', $guru_id)
                         ->with('success', 'Data kompetensi berhasil ditambahkan.');
    }

    public function edit($guru_id, $id)
    {
        $kompetensi = KompetensiGuru::where('guru_id', $guru_id)->findOrFail($id);
        return view('layouts.kompetensiguru.update', compact('kompetensi', 'guru_id'));
    }

    public function update(Request $request, $guru_id, $id)
    {
        $request->validate([
            'tmt_pns' => 'nullable|date',
            'sudah_lisensi_kepala_sekolah' => 'nullable|boolean',
            'pernah_diklat_kepengawasan' => 'nullable|boolean',
            'keahlian_braille' => 'nullable|boolean',
            'keahlian_bahasa_isyarat' => 'nullable|boolean',
        ]);

        $kompetensi = KompetensiGuru::where('guru_id', $guru_id)->findOrFail($id);
        $kompetensi->update($request->all());

        // Redirect ke detail guru setelah update
        return redirect()->route('guru.detail', $guru_id)
                         ->with('success', 'Data kompetensi berhasil diperbarui.');
    }

    public function destroy($guru_id, $id)
    {
        $kompetensi = KompetensiGuru::where('guru_id', $guru_id)->findOrFail($id);
        $kompetensi->delete();

        // Redirect ke detail guru setelah hapus
        return redirect()->route('guru.detail', $guru_id)
                         ->with('success', 'Data kompetensi berhasil dihapus.');
    }
}
