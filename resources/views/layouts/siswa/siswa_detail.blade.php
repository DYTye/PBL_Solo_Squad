@extends('layouts.app')

@section('title', 'Alamat Siswa')
@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><h4>Nama Siswa: {{ $sAlamat->siswa->nama}}</h4>
                </h1>
            </div>

            <div class="section-body">

                <table class="table tale-stripped">
                    <h2 class="section-title">Detail siswa</h2>
                    <p class="section-lead">detail</p>
                    <thead>
                        <th>NIK</th>
                        <th>No KK</th>
                        <th>Akta</th>
                        <th>Anak ke</th>
                        <th>Jumlah Saudara</th>
                        <th>Berat Badan</th>
                        <th>tinggi Badan</th>
                        <th>Lingkar Keapala</th>
                    </thead>

                    <tbody>
                        <td>{{ $sDetail->nik }}</td>
                        <td>{{ $sDetail->no_kk }}</td>
                        <td>{{ $sDetail->no_registrasi_akta }}</td>
                        <td>{{ $sDetail->anak_ke }}</td>
                        <td>{{ $sDetail->jumlah_saudara }}</td>
                        <td>{{ $sDetail->berat_badan }}</td>
                        <td>{{ $sDetail->tinggi_badan }}</td>
                        <td>{{ $sDetail->lingkar_kepala }}</td>
                    </tbody>
                </table>

                <table class="table table-stripped">
                    <h2 class="section-title">bantuan</h2>
                    <p class="section-lead">bantuan yang didapat oleh siswa</p>
                    <thead>
                        <tr>
                            <th>Jenis Tinggal</th>
                            <th>Transportasi</th>
                            <th>Penerima KPS</th>
                            <th>NO KPS</th>
                            <th>Penerima KIP</th>
                            <th>No KIP</th>
                            <th>Layak PIP</th>
                            <th>Alasan</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>{{ $sBantuan->jenis_tinggal }}</td>
                            <td>{{ $sBantuan->alat_transportasi }}</td>
                            <td>{{ $sBantuan->peenrima_kps }}</td>
                            <td>{{ $sBantuan->no_kps }}</td>
                            <td>{{ $sBantuan->penerima_kip }}</td>
                            <td>{{ $sBantuan->no_kip }}</td>
                            <td>{{ $sBantuan->layak_pip }}</td>
                            <td>{{ $sBantuan->alasan_layak_pip}}</td>
                        </tr>

                    </tbody>
                </table>

                <h2 class="section-title">Alamat Siswa</h2>
                <p class="section-lead">
                    alamat siswa
                </p>

                <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>jalan</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Dusun</th>
                                <th>Kode Pos</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>{{ $sAlamat->jalan }}</td>
                                <td>{{ $sAlamat->rt }}</td>
                                <td>{{ $sAlamat->rw }}</td>
                                <td>{{ $sAlamat->kelurahan }}</td>
                                <td>{{ $sAlamat->kecamatan }}</td>
                                <td>{{ $sAlamat->dusun }}</td>
                                <td>{{ $sAlamat->kode_pos }}</td>
                            </tr>

                        </tbody>
                    </table>

                    <table class="table table-stripped">
                        <h2 class="section-title">Data orangtua</h2>
                        <p class="section-lead">data siswa</p>
                        <thead>
                            <tr>
                                <Th>Ayah/Ibu</Th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tahun Lahir</th>
                                <th>Jenjang Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Penghasilan</th>
                            </tr>
                            <tr>
                                <td>Ayah</td>
                                <td>{{ $orangtua->nama_ayah }}</td>
                                <td>{{ $orangtua->nik_ayah }}</td>
                                <td>{{ $orangtua->tahun_lahir_ayah }}</td>
                                <td>{{ $orangtua->jenjang_pendidikan_ayah }}</td>
                                <td>{{ $orangtua->pekerjaan_ayah }}</td>
                                <td>{{ $orangtua->penghasilan_ayah }}</td>
                            </tr>
                            <tr>
                                <td>Ibu</td>
                                <td>{{ $orangtua->nama_ibu }}</td>
                                <td>{{ $orangtua->nik_ibu }}</td>
                                <td>{{ $orangtua->tahun_lahir_ibu }}</td>
                                <td>{{ $orangtua->jenjang_pendidikan_ibu }}</td>
                                <td>{{ $orangtua->pekerjaan_ibu }}</td>
                                <td>{{ $orangtua->penghasilan_ibu }}</td>
                            </tr>

                            <tr>
                                <td>Wali</td>
                                <td>{{ $orangtua->nama_wali }}</td>
                                <td>{{ $orangtua->nik_wali }}</td>
                                <td>{{ $orangtua->tahun_lahir_wali }}</td>
                                <td>{{ $orangtua->jenjang_pendidikan_wali }}</td>
                                <td>{{ $orangtua->pekerjaan_wali }}</td>
                                <td>{{ $orangtua->penghasilan_wali }}</td>
                            </tr>
                        </thead>
                    </table>




                </div>

            </div>

        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush
