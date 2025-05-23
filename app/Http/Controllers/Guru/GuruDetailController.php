<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru\Guru;
use App\Models\Guru\GuruDetail;

class GuruDetailController extends Controller
{
    // Tampilkan detail guru lengkap dengan data gurudetail
    public function show(Guru $guru)
    {
        // Load detail guru (relasi)
        $guru->load('detail');
        
        return view('layouts.gurudetail.show', compact('guru'));
    }

    // Form tambah detail guru
    public function create(Guru $guru)
    {
        return view('layouts.gurudetail.create', compact('guru'));
    }

    // Simpan data detail guru baru
    public function store(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nama_pasangan' => 'nullable|string|max:50',
            'nip_pasangan' => 'nullable|string|max:20',
            'pekerjaan_pasangan' => 'nullable|string|max:25',
            'status_kepegawaian' => 'nullable|string|max:10',
            'jenis_ptk' => 'nullable|string|max:10',
            'npwp' => 'nullable|string|max:20',
            'nama_ibu_kandung' => 'nullable|string|max:50',
            'status_perkawinan' => 'nullable|string|max:15',
            'tugas_tambahan' => 'nullable|string|max:25',
            'sudah_lisensi_kepala_sekolah' => 'nullable|boolean',
            'pernah_diklat_kepengawasan' => 'nullable|boolean',
            'keahlian_braille' => 'nullable|boolean',
            'keahlian_bahasa_isyarat' => 'nullable|boolean',
            'tanggal_cpns' => 'nullable|date',
            'sk_pengangkatan' => 'nullable|string|max:25',
            'tmt_pengangkatan' => 'nullable|date',
            'lembaga_pengangkatan' => 'nullable|string|max:25',
            'pangkat_golongan' => 'nullable|string|max:10',
            'sumber_gaji' => 'nullable|string|max:15',
        ]);

        // Set foreign key manually
        $validated['gurus_id'] = $guru->id;

        GuruDetail::create($validated);

        return redirect()->route('guru.detail.show', $guru->id)
            ->with('success', 'Detail guru berhasil ditambahkan.');
    }

    // Form edit detail guru
    public function edit(Guru $guru)
    {
        $detail = $guru->detail;
        if (!$detail) {
            return redirect()->route('guru.detail.create', $guru->id)
                ->with('warning', 'Detail guru belum ada, silakan tambah dulu.');
        }
        return view('layouts.gurudetail.edit', compact('guru', 'detail'));
    }

    // Update data detail guru
    public function update(Request $request, Guru $guru)
    {
        $detail = $guru->detail;
        if (!$detail) {
            return redirect()->route('guru.detail.create', $guru->id)
                ->with('warning', 'Detail guru belum ada, silakan tambah dulu.');
        }

        $validated = $request->validate([
            'nama_pasangan' => 'nullable|string|max:50',
            'nip_pasangan' => 'nullable|string|max:20',
            'pekerjaan_pasangan' => 'nullable|string|max:25',
            'status_kepegawaian' => 'nullable|string|max:10',
            'jenis_ptk' => 'nullable|string|max:10',
            'npwp' => 'nullable|string|max:20',
            'nama_ibu_kandung' => 'nullable|string|max:50',
            'status_perkawinan' => 'nullable|string|max:15',
            'tugas_tambahan' => 'nullable|string|max:25',
            'sudah_lisensi_kepala_sekolah' => 'nullable|boolean',
            'pernah_diklat_kepengawasan' => 'nullable|boolean',
            'keahlian_braille' => 'nullable|boolean',
            'keahlian_bahasa_isyarat' => 'nullable|boolean',
            'tanggal_cpns' => 'nullable|date',
            'sk_pengangkatan' => 'nullable|string|max:25',
            'tmt_pengangkatan' => 'nullable|date',
            'lembaga_pengangkatan' => 'nullable|string|max:25',
            'pangkat_golongan' => 'nullable|string|max:10',
            'sumber_gaji' => 'nullable|string|max:15',
        ]);

        $detail->update($validated);

        return redirect()->route('guru.detail.show', $guru->id)
            ->with('success', 'Detail guru berhasil diperbarui.');
    }

    // Hapus data detail guru
    public function destroy(Guru $guru)
    {
        $detail = $guru->detail;
        if ($detail) {
            $detail->delete();
            return redirect()->route('guru.detail.show', $guru->id)
                ->with('success', 'Detail guru berhasil dihapus.');
        }

        return redirect()->route('guru.detail.show', $guru->id)
            ->with('warning', 'Detail guru tidak ditemukan.');
    }
}
