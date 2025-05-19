<?php

namespace App\Http\Controllers\Siswa;

use App\Models\siswa\Siswa;
use Illuminate\Http\Request;
use App\Models\siswa\Orangtua;
use App\Models\Siswa\SiswasAlamat;
use App\Models\siswa\SiswasDetail;
use Illuminate\Routing\Controller;
use App\Models\siswa\SiswasBantuan;

class SiswasAlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sAlamat = SiswasAlamat::all();
        // return view('layouts.siswa.siswa_detail',compact('sAlamat'));
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
        $siswa = Siswa::with(['alamat', 'orangtua', 'detail', 'bantuan'])->findOrFail($id);



        return view('layouts.siswa.siswa_detail', [
            'sAlamat' => $siswa->alamat,
            'orangtua' => $siswa->orangtua,
            'sDetail' => $siswa->detail,
            'sBantuan' => $siswa->bantuan,
        ]);
        

      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiswasAlamat $siswasAlamat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiswasAlamat $siswasAlamat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiswasAlamat $siswasAlamat)
    {
        //
    }
}
