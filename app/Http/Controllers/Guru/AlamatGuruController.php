<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guru\AlamatGuru;
use App\Models\guru\Guru;

class AlamatGuruController extends Controller
{

    public function show($guru_id)
{
    $guru = Guru::with(['alamat', 'kompetensi'])->findOrFail($guru_id);
    return view('layouts.alamatguru.show', compact('guru'));
}

    public function create($guru_id)
{
    $guru = Guru::findOrFail($guru_id);
    return view('layouts.alamatguru.create', compact('guru'));
}

public function store(Request $request, $guru_id)
{
    $request->validate([
        'jalan' => 'nullable|string|max:25',
        'rt' => 'nullable|string|max:10',
        'rw' => 'nullable|string|max:10',
        'nama_dusun' => 'nullable|string|max:20',
        'desa_kelurahan' => 'nullable|string|max:20',
        'kecamatan' => 'nullable|string|max:20',
        'kode_pos' => 'nullable|string|max:10',
    ]);

    AlamatGuru::create([
        'id_guru' => $guru_id,
        'jalan' => $request->jalan,
        'rt' => $request->rt,
        'rw' => $request->rw,
        'nama_dusun' => $request->nama_dusun,
        'desa_kelurahan' => $request->desa_kelurahan,
        'kecamatan' => $request->kecamatan,
        'kode_pos' => $request->kode_pos,
    ]);

    return redirect()->route('guru.detail', $guru_id)
                     ->with('success', 'Alamat berhasil ditambahkan');
}

public function edit($guru_id)
{
    $guru = Guru::with('alamat')->findOrFail($guru_id);
    return view('layouts.alamatguru.update', compact('guru'));
}

public function update(Request $request, $guru_id)
{
    $request->validate([
        'jalan' => 'nullable|string|max:25',
        'rt' => 'nullable|string|max:10',
        'rw' => 'nullable|string|max:10',
        'nama_dusun' => 'nullable|string|max:20',
        'desa_kelurahan' => 'nullable|string|max:20',
        'kecamatan' => 'nullable|string|max:20',
        'kode_pos' => 'nullable|string|max:10',
    ]);

    $alamat = AlamatGuru::where('id_guru', $guru_id)->firstOrFail();
    $alamat->update($request->all());

    return redirect()->route('guru.detail', $alamat->id_guru)
                     ->with('success', 'Alamat guru berhasil diperbarui.');
}


public function destroy($guru_id)
{
    $alamat = AlamatGuru::where('id_guru', $guru_id)->firstOrFail();
    $alamat->delete();

    return redirect()->route('guru.detail', $guru_id)
                     ->with('success', 'Alamat berhasil dihapus');
}

}
