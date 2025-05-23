@extends('layouts.app')

@section('title', 'Table Example')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

    <section class="section">
        <div class="section-header">
            <h1>Data Siswa</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data siswa</h2>
            <p class="section-lead">
                This page is an example of using a table.
            </p>
            
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @method('PUT') 
                @csrf
            
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $siswa->nama) }}" required>
                </div>
            
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" value="{{ old('nisn', $siswa->nisn) }}" required>
                </div>
            
                <div class="mb-3">
                    <label for="nipd" class="form-label">NIPD</label>
                    <input type="text" name="nipd" class="form-control" id="nipd" value="{{ old('nipd', $siswa->nipd) }}" required>
                </div>

                
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{old('nik',$siswa->nik)}}">
                </div>


                <div class="mb-3">
                    <label for="no_registrasi_akta">Akta</label>
                    <input type="text" name="no_registrasi_akta" id="no_registrasi_akta" class="form-control" value="{{old('no_registrasi_akta',$siswa->no_registrasi_akta)}}">
                </div>

                <div class="mb-3">
                    <label for="anak_ke">Anak Ke</label>
                    <input type="text" name="anak_ke" id="anak_ke" class="form-control" value="{{old('anak_ke',$siswa->anak_ke)}}">
                </div>

                
                <div class="mb-3">
                    <label for="jumlah_saudara">Jumlah Saudara</label>
                    <input type="number" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="{{ old('jumlah_saudara', $siswa->jumlah_saudara) }}">
                </div>
            
                <div class="mb-3">
                    <label for="no_kk">No KK</label>
                    <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ old('no_kk', $siswa->no_kk) }}">
                </div>
            
                <div class="mb-3">
                    <label for="berat_badan">Berat Badan (kg)</label>
                    <input type="number" step="0.1" class="form-control" id="berat_badan" name="berat_badan" value="{{ old('berat_badan', $siswa->berat_badan) }}">
                </div>
            
                <div class="mb-3">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="number" step="0.1" class="form-control" id="tinggi_badan" name="tinggi_badan" value="{{ old('tinggi_badan', $siswa->tinggi_badan) }}">
                </div>
            
                <div class="mb-3">
                    <label for="lingkar_kepala">Lingkar Kepala (cm)</label>
                    <input type="number" step="0.1" class="form-control" id="lingkar_kepala" name="lingkar_kepala" value="{{ old('lingkar_kepala', $siswa->lingkar_kepala) }}">
                </div>
            
                <div class="mb-3">
                    <label for="tahun_ajar">Tahun Ajar</label>
                    <input type="text" class="form-control" id="tahun_ajar" name="tahun_ajar" value="{{ old('tahun_ajar', $siswa->tahun_ajar) }}">
                </div>
            
            
                <div class="mb-3">
                    <label for="kelamin" class="form-label">Jenis kelamin</label>
                    <input type="text" name="kelamin" class="form-control" id="kelamin" value="{{ old('kelamin', $siswa->kelamin) }}" required>
                </div>

            
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" name="agama" id="agama" class="form-control" value="{{ old('agama', $siswa->agama) }}">
                </div>
            
                <div class="mb-3">
                    <label for="kebutuhan_khusus" class="form-label">Kebutuhan Khusus</label>
                    <input type="text" name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control" value="{{ old('kebutuhan_khusus', $siswa->kebutuhan_khusus) }}">
                </div>
            
                <div class="mb-3">
                    <label for="sekolah_asal" class="form-label">Asal Sekolah</label>
                    <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control" value="{{ old('sekolah_asal', $siswa->sekolah_asal) }}">
                </div>


                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label> 
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}">
                </div>
            
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}">
                </div>
                            
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="kelas" class="form-control" id="kelas" required>
                        @foreach($kelas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jalan" class="form-label">Jalan</label>
                    <input type="text" class="form-control" id="jalan" name="jalan" value="{{ old('jalan', $siswa->jalan) }}">
                </div>
            
                <div class="mb-3">
                    <label for="rt" class="form-label">RT</label>
                    <input type="number" class="form-control" id="rt" name="rt" value="{{ old('rt', $siswa->rt) }}">
                </div>
            
                <div class="mb-3">
                    <label for="rw" class="form-label">RW</label>
                    <input type="number" class="form-control" id="rw" name="rw" value="{{ old('rw', $siswa->rw) }}">
                </div>
            
                <div class="mb-3">
                    <label for="kelurahan" class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="{{ old('kelurahan', $siswa->kelurahan) }}">
                </div>
            
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', $siswa->kecamatan) }}">
                </div>
            
                <div class="mb-3">
                    <label for="dusun" class="form-label">Dusun</label>
                    <input type="text" class="form-control" id="dusun" name="dusun" value="{{ old('dusun', $siswa->dusun) }}">
                </div>
            
                <div class="mb-3">
                    <label for="kode_pos" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ old('kode_pos', $siswa->kode_pos) }}">
                </div>
            
                <div class="mb-3">
                    <label for="jenis_tinggal" class="form-label">Jenis Tinggal</label>
                    <select class="form-control" id="jenis_tinggal" name="jenis_tinggal">
                        @php
                            $options = ['Bersama Orang Tua', 'Kos', 'Asrama', 'Panti Asuhan'];
                        @endphp
                        @foreach($options as $option)
                            <option value="{{ $option }}" {{ old('jenis_tinggal', $siswa->jenis_tinggal) == $option ? 'selected' : '' }}>
                                {{ $option }}
                            </option>
                        @endforeach
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="alat_transportasi" class="form-label">Alat Transportasi</label>
                    <select class="form-control" id="alat_transportasi" name="alat_transportasi">
                        @php
                            $options = ['Jalan Kaki', 'Sepeda', 'Motor', 'Mobil', 'Angkutan Umum'];
                        @endphp
                        @foreach($options as $option)
                            <option value="{{ $option }}" {{ old('alat_transportasi', $siswa->alat_transportasi) == $option ? 'selected' : '' }}>
                                {{ $option }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="penerima_kps" class="form-label">Penerima KPS</label>
                    <select class="form-control" id="penerima_kps" name="penerima_kps">
                        <option value="1" {{ old('penerima_kps', $siswa->penerima_kps) ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !old('penerima_kps', $siswa->penerima_kps) ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="penerima_kip" class="form-label">Penerima KIP</label>
                    <select class="form-control" id="penerima_kip" name="penerima_kip">
                        <option value="1" {{ old('penerima_kip', $siswa->penerima_kip) ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !old('penerima_kip', $siswa->penerima_kip) ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="no_kip" class="form-label">No KIP</label>
                    <input type="text" class="form-control" id="no_kip" name="no_kip" value="{{ old('no_kip', $siswa->no_kip) }}">
                </div>
            
                <div class="mb-3">
                    <label for="no_kps" class="form-label">No KPS</label>
                    <input type="text" class="form-control" id="no_kps" name="no_kps" value="{{ old('no_kps', $siswa->no_kps) }}">
                </div>
            
                <div class="mb-3">
                    <label for="layak_pip" class="form-label">Layak PIP</label>
                    <select class="form-control" id="layak_pip" name="layak_pip">
                        <option value="1" {{ old('layak_pip', $siswa->layak_pip) ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !old('layak_pip', $siswa->layak_pip) ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="alasan_layak_pip" class="form-label">Alasan Layak PIP</label>
                    <textarea class="form-control" id="alasan_layak_pip" name="alasan_layak_pip" rows="3">{{ old('alasan_layak_pip', $siswa->alasan_layak_pip) }}</textarea>
                </div>
            
                <div class="mb-3">
                    <label for="kebutuhan_khusus" class="form-label">Kebutuhan Khusus</label>
                    <input type="text" class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus" value="{{ old('kebutuhan_khusus', $siswa->kebutuhan_khusus) }}">
                </div>
            
                <div class="mb-3">
                    <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="{{ old('sekolah_asal', $siswa->sekolah_asal) }}">
                </div>
            

            
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-control" id="agama" name="agama">
                        @php
                            $agamaOptions = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'];
                        @endphp
                        @foreach($agamaOptions as $option)
                            <option value="{{ $option }}" {{ old('agama', $siswa->agama) == $option ? 'selected' : '' }}>
                                {{ $option }}
                            </option>
                        @endforeach
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{ old('nisn', $siswa->nisn) }}">
                </div>

        <div class="row">
                    <button type="submit" class="btn btn-primary">Simpan</button>
 
                
            </form>
            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
            
            
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush