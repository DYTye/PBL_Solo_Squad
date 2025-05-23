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
        return view('layouts.siswa.update', compact('siswa','kelas'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'nipd' => 'required',
            'kelamin' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'agama' => 'required',
            // 'id_ibu' => 'required',
            // 'id_ayah' => 'required',
            // 'id_wali' => 'required',
            'kebutuhan_khusus' => 'nullable|string',
            'sekolah_asal' => 'nullable|string',
            // 'orangtua_id' => 'required',
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
