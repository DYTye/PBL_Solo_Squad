@extends('layouts.app')

@section('title', 'Detail Siswa')
@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>
                    <h4>Nama Siswa: {{ $siswas->nama }}</h4>
                </h1>
            </div>

            <div class="section-body">
                {{-- 
                <h2 class="section-title">Detail Siswa</h2>
                <p class="section-lead">Detail</p> --}}

                <ul class="list-group">
                    <li class="list-group-item active">Detail Siswa</li>
                    <li class="list-group-item"><strong>NIK:</strong> {{ $siswas->nik }}</li>
                    <li class="list-group-item"><strong>NISN:</strong>{{$siswas->siswa->nisn}}</li>
                    <li class="list-group-item"><strong>No KK:</strong> {{ $siswas->no_kk }}</li>
                    <li class="list-group-item"><strong>No Registrasi Akta:</strong> {{ $siswas->no_registrasi_akta }}</li>
                    <li class="list-group-item"><strong>Anak ke:</strong> {{ $siswas->anak_ke }}</li>
                    <li class="list-group-item"><strong>Jumlah Saudara:</strong> {{ $siswas->jumlah_saudara }}</li>
                    <li class="list-group-item"><strong>Tahun Ajar: </strong>{{ $siswas->tahun_ajar}}</li>
                    <li class="list-group-item"><strong>Agama:</strong>{{$siswas->agama}}</li>
                    <li class="list-group-item"><strong>Berat Badan:</strong> {{ $siswas->berat_badan }} kg</li>
                    <li class="list-group-item"><strong>Tinggi Badan:</strong> {{ $siswas->tinggi_badan }} cm</li>
                    <li class="list-group-item"><strong>Lingkar Kepala:</strong> {{ $siswas->lingkar_kepala }} cm</li>
                    <li class="list-group-item"><strong>Kebutuhan Khusus:</strong>{{$siswas->siswa->kebutuhan_khusus}}</li>
                    <li class="list-group-item"><strong>Sekolah Asal:</strong>{{$siswas->siswa->sekolah_asal}}</li>
                    <li class="list-group-item active">Bantuan Siswa</li>
                    <li class="list-group-item"><strong>Jenis Tinggal:</strong> {{ $siswas->jenis_tinggal }}</li>
                    <li class="list-group-item"><strong>Alat Transportasi:</strong> {{ $siswas->alat_transportasi }}</li>
                </ul>

                <ul class="list-group">
                   
                    <li class="list-group-item"><strong>Penerima KPS:</strong>
                        {{ $siswas->penerima_kps ? 'Ya' : 'Tidak' }}</li>
                    <li class="list-group-item"><strong>No KPS:</strong> {{ $siswas->no_kps ?? '-' }}</li>
                    <li class="list-group-item"><strong>Penerima KIP:</strong>
                        {{ $siswas->penerima_kip ? 'Ya' : 'Tidak' }}</li>
                    <li class="list-group-item"><strong>No KIP:</strong> {{ $siswas->no_kip ?? '-' }}</li>
                    <li class="list-group-item"><strong>Layak PIP:</strong> {{ $siswas->layak_pip ? 'Ya' : 'Tidak' }}
                    </li>
                    <li class="list-group-item"><strong>Alasan Layak PIP:</strong> {{ $siswas->alasan_layak_pip ?? '-' }}
                    </li>
                </ul>





                <ul class="list-group">
                    <li class="list-group-item active">Alamat Siswa</li>
                    <li class="list-group-item"><strong>Jalan:</strong> {{ $siswas->jalan }}</li>
                    <li class="list-group-item"><strong>RT:</strong> {{ $siswas->rt }}</li>
                    <li class="list-group-item"><strong>RW:</strong> {{ $siswas->rw }}</li>
                    <li class="list-group-item"><strong>Kelurahan:</strong> {{ $siswas->kelurahan }}</li>
                    <li class="list-group-item"><strong>Kecamatan:</strong> {{ $siswas->kecamatan }}</li>
                    <li class="list-group-item"><strong>Dusun:</strong> {{ $siswas->dusun }}</li>
                    <li class="list-group-item"><strong>Kode Pos:</strong> {{ $siswas->kode_pos }}</li>
                </ul>




                <ul class="list-group mb-3">
                    <li class="list-group-item active">Data Ayah</li>
                    <li class="list-group-item"><strong>Nama:</strong> {{ $orangtua->nama_ayah }}</li>
                    <li class="list-group-item"><strong>NIK:</strong> {{ $orangtua->nik_ayah }}</li>
                    <li class="list-group-item"><strong>Tahun Lahir:</strong> {{ $orangtua->tahun_lahir_ayah }}</li>
                    <li class="list-group-item"><strong>Jenjang Pendidikan:</strong>
                        {{ $orangtua->jenjang_pendidikan_ayah }}</li>
                    <li class="list-group-item"><strong>Pekerjaan:</strong> {{ $orangtua->pekerjaan_ayah }}</li>
                    <li class="list-group-item"><strong>Penghasilan:</strong> {{ $orangtua->penghasilan_ayah }}</li>
                </ul>

                <ul class="list-group mb-3">
                    <li class="list-group-item active">Data Ibu</li>
                    <li class="list-group-item"><strong>Nama:</strong> {{ $orangtua->nama_ibu }}</li>
                    <li class="list-group-item"><strong>NIK:</strong> {{ $orangtua->nik_ibu }}</li>
                    <li class="list-group-item"><strong>Tahun Lahir:</strong> {{ $orangtua->tahun_lahir_ibu }}</li>
                    <li class="list-group-item"><strong>Jenjang Pendidikan:</strong>
                        {{ $orangtua->jenjang_pendidikan_ibu }}</li>
                    <li class="list-group-item"><strong>Pekerjaan:</strong> {{ $orangtua->pekerjaan_ibu }}</li>
                    <li class="list-group-item"><strong>Penghasilan:</strong> {{ $orangtua->penghasilan_ibu }}</li>
                </ul>

                <ul class="list-group mb-3">
                    <li class="list-group-item active">Data Wali</li>
                    <li class="list-group-item"><strong>Nama:</strong> {{ $orangtua->nama_wali }}</li>
                    <li class="list-group-item"><strong>NIK:</strong> {{ $orangtua->nik_wali }}</li>
                    <li class="list-group-item"><strong>Tahun Lahir:</strong> {{ $orangtua->tahun_lahir_wali }}</li>
                    <li class="list-group-item"><strong>Jenjang Pendidikan:</strong>
                        {{ $orangtua->jenjang_pendidikan_wali }}</li>
                    <li class="list-group-item"><strong>Pekerjaan:</strong> {{ $orangtua->pekerjaan_wali }}</li>
                    <li class="list-group-item"><strong>Penghasilan:</strong> {{ $orangtua->penghasilan_wali }}</li>
                </ul>





            </div>

    </div>

    </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush
