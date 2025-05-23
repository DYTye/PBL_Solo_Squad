<?php

namespace App\Http\Controllers\Siswa;


use App\Models\siswa\Kelas;
use App\Models\Siswa\Siswa;
use Illuminate\Http\Request;
use App\Models\siswa\Orangtua;
use App\Models\siswa\SiswasDetail;
use Illuminate\Routing\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('layouts.siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('layouts.siswa.siswa_detail', [
            'siswas' => Siswa::findOrFail($id),
            'orangtua' => Orangtua::findOrFail($id),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('layouts.siswa.update', compact('siswa', 'kelas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nipd' => 'required|string|max:50',
            'kelamin' => 'required|string|max:10',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'kelas_id' => 'required|exists:kelas,id',
            'orangtua_id' => 'nullable|exists:orangtuas,id',
            'nik' => 'nullable|string|max:50',
            'no_registrasi_akta' => 'nullable|string|max:50',
            'anak_ke' => 'nullable|integer',
            'jumlah_saudara' => 'nullable|integer',
            'no_kk' => 'nullable|string|max:50',
            'berat_badan' => 'nullable|numeric',
            'tinggi_badan' => 'nullable|numeric',
            'lingkar_kepala' => 'nullable|numeric',
            'tahun_ajar' => 'nullable|string|max:20',

            'jalan' => 'nullable|string|max:255',
            'rt' => 'nullable|string|max:10',
            'rw' => 'nullable|string|max:10',
            'kelurahan' => 'nullable|string|max:100',
            'kecamatan' => 'nullable|string|max:100',
            'dusun' => 'nullable|string|max:100',
            'kode_pos' => 'nullable|string|max:10',
            'jenis_tinggal' => 'nullable|string|max:100',
            'alat_transportasi' => 'nullable|string|max:100',

            'penerima_kps' => 'nullable|boolean',
            'penerima_kip' => 'nullable|boolean',
            'no_kip' => 'nullable|string|max:50',
            'no_kps' => 'nullable|string|max:50',
            'layak_pip' => 'nullable|boolean',
            'alasan_layak_pip' => 'nullable|string|max:255',

            'kebutuhan_khusus' => 'nullable|string|max:255',
            'sekolah_asal' => 'nullable|string|max:255',
            'agama' => 'nullable|string|max:50',
            'nisn' => 'nullable|string|max:50',
        ]);

        $siswa->update($validated);

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
