<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaransiswa;
use Illuminate\Http\Request;

class PendaftaransiswaController extends Controller
{
    public function index()
    {
        $pendaftaransiswas = Pendaftaransiswa::all();
        return view('layouts.pendaftaransiswa.index', compact('pendaftaransiswas'));
    }

    public function create()
    {
        return view('layouts.pendaftaransiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:pendaftaransiswa,nik|max:25',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'nullable',
            'jumlah_saudara' => 'required|integer',
            'anak_ke' => 'required|integer',
            'bahasa_seharihari' => 'nullable',
            'agama' => 'required',

            // Ayah
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'nullable',
            'tanggal_lahir_ayah' => 'nullable|date',
            'pendidikan_ayah' => 'nullable',
            'pekerjaan_ayah' => 'nullable',
            'penghasilan_ayah' => 'nullable|numeric',
            'hp_ayah' => 'nullable',

            // Ibu
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'nullable',
            'tanggal_lahir_ibu' => 'nullable|date',
            'pendidikan_ibu' => 'nullable',
            'pekerjaan_ibu' => 'nullable',
            'penghasilan_ibu' => 'nullable|numeric',
            'hp_ibu' => 'nullable',

            // Wali (opsional)
            'nama_wali' => 'nullable',
            'tempat_lahir_wali' => 'nullable',
            'tanggal_lahir_wali' => 'nullable|date',
            'pendidikan_wali' => 'nullable',
            'pekerjaan_wali' => 'nullable',
            'penghasilan_wali' => 'nullable|numeric',
            'hp_wali' => 'nullable',
        ]);

        Pendaftaransiswa::create($request->all());

        return redirect()->route('pendaftaransiswa.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pendaftaransiswa = Pendaftaransiswa::findOrFail($id);
        return view('layouts.pendaftaransiswa.edit', compact('pendaftaransiswa'));
    }

    public function update(Request $request, $id)
    {
        $pendaftaransiswa = Pendaftaransiswa::findOrFail($id);

        $request->validate([
            'nik' => 'required|max:25|unique:pendaftaransiswa,nik,' . $pendaftaransiswa->id,
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'nullable',
            'jumlah_saudara' => 'required|integer',
            'anak_ke' => 'required|integer',
            'bahasa_seharihari' => 'nullable',
            'agama' => 'required',

            // Ayah
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'nullable',
            'tanggal_lahir_ayah' => 'nullable|date',
            'pendidikan_ayah' => 'nullable',
            'pekerjaan_ayah' => 'nullable',
            'penghasilan_ayah' => 'nullable|numeric',
            'hp_ayah' => 'nullable',

            // Ibu
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'nullable',
            'tanggal_lahir_ibu' => 'nullable|date',
            'pendidikan_ibu' => 'nullable',
            'pekerjaan_ibu' => 'nullable',
            'penghasilan_ibu' => 'nullable|numeric',
            'hp_ibu' => 'nullable',

            // Wali
            'nama_wali' => 'nullable',
            'tempat_lahir_wali' => 'nullable',
            'tanggal_lahir_wali' => 'nullable|date',
            'pendidikan_wali' => 'nullable',
            'pekerjaan_wali' => 'nullable',
            'penghasilan_wali' => 'nullable|numeric',
            'hp_wali' => 'nullable',
        ]);

        $pendaftaransiswa->update($request->all());

        return redirect()->route('pendaftaransiswa.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function show($id)
    {
        $pendaftaransiswa = PendaftaranSiswa::findOrFail($id);
        return view('layouts.pendaftaransiswa.show', compact('pendaftaransiswa'));
    }


    public function destroy($id)
    {
        $pendaftaransiswa = Pendaftaransiswa::findOrFail($id);
        $pendaftaransiswa->delete();

        return redirect()->route('pendaftaransiswa.index')->with('success', 'Data berhasil dihapus.');
    }
}
