@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Edit Data Pendaftaran Siswa</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('pendaftaransiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <div class="section-body">
        <form action="{{ route('pendaftaransiswa.update', $pendaftaransiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value="{{ old('nik', $pendaftaransiswa->nik) }}" required>

                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $pendaftaransiswa->nama_lengkap) }}" required>

                    <label>Nama Panggilan</label>
                    <input type="text" name="nama_panggilan" class="form-control" value="{{ old('nama_panggilan', $pendaftaransiswa->nama_panggilan) }}">

                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="L" {{ old('jenis_kelamin', $pendaftaransiswa->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('jenis_kelamin', $pendaftaransiswa->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>

                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $pendaftaransiswa->tempat_lahir) }}">

                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $pendaftaransiswa->tanggal_lahir) }}">

                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $pendaftaransiswa->alamat) }}">

                    <label>No. Telp</label>
                    <input type="text" name="telp" class="form-control" value="{{ old('telp', $pendaftaransiswa->telp) }}">

                    <label>Jumlah Saudara</label>
                    <input type="number" name="jumlah_saudara" class="form-control" value="{{ old('jumlah_saudara', $pendaftaransiswa->jumlah_saudara) }}">

                    <label>Anak Ke</label>
                    <input type="number" name="anak_ke" class="form-control" value="{{ old('anak_ke', $pendaftaransiswa->anak_ke) }}">

                    <label>Bahasa Sehari-hari</label>
                    <input type="text" name="bahasa_seharihari" class="form-control" value="{{ old('bahasa_seharihari', $pendaftaransiswa->bahasa_seharihari) }}">

                    <label>Agama</label>
                    <input type="text" name="agama" class="form-control" value="{{ old('agama', $pendaftaransiswa->agama) }}">
                </div>

                <div class="col-md-6">
                    <h5>Data Ayah</h5>
                    <input type="text" name="nama_ayah" placeholder="Nama Ayah" class="form-control mb-2" value="{{ old('nama_ayah', $pendaftaransiswa->nama_ayah) }}">
                    <input type="text" name="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah" class="form-control mb-2" value="{{ old('tempat_lahir_ayah', $pendaftaransiswa->tempat_lahir_ayah) }}">
                    <input type="date" name="tanggal_lahir_ayah" class="form-control mb-2" value="{{ old('tanggal_lahir_ayah', $pendaftaransiswa->tanggal_lahir_ayah) }}">
                    <input type="text" name="pendidikan_ayah" placeholder="Pendidikan Ayah" class="form-control mb-2" value="{{ old('pendidikan_ayah', $pendaftaransiswa->pendidikan_ayah) }}">
                    <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" class="form-control mb-2" value="{{ old('pekerjaan_ayah', $pendaftaransiswa->pekerjaan_ayah) }}">
                    <input type="number" step="0.01" name="penghasilan_ayah" placeholder="Penghasilan Ayah" class="form-control mb-2" value="{{ old('penghasilan_ayah', $pendaftaransiswa->penghasilan_ayah) }}">
                    <input type="text" name="hp_ayah" placeholder="No HP Ayah" class="form-control mb-3" value="{{ old('hp_ayah', $pendaftaransiswa->hp_ayah) }}">

                    <h5>Data Ibu</h5>
                    <input type="text" name="nama_ibu" placeholder="Nama Ibu" class="form-control mb-2" value="{{ old('nama_ibu', $pendaftaransiswa->nama_ibu) }}">
                    <input type="text" name="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu" class="form-control mb-2" value="{{ old('tempat_lahir_ibu', $pendaftaransiswa->tempat_lahir_ibu) }}">
                    <input type="date" name="tanggal_lahir_ibu" class="form-control mb-2" value="{{ old('tanggal_lahir_ibu', $pendaftaransiswa->tanggal_lahir_ibu) }}">
                    <input type="text" name="pendidikan_ibu" placeholder="Pendidikan Ibu" class="form-control mb-2" value="{{ old('pendidikan_ibu', $pendaftaransiswa->pendidikan_ibu) }}">
                    <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" class="form-control mb-2" value="{{ old('pekerjaan_ibu', $pendaftaransiswa->pekerjaan_ibu) }}">
                    <input type="number" step="0.01" name="penghasilan_ibu" placeholder="Penghasilan Ibu" class="form-control mb-2" value="{{ old('penghasilan_ibu', $pendaftaransiswa->penghasilan_ibu) }}">
                    <input type="text" name="hp_ibu" placeholder="No HP Ibu" class="form-control mb-3" value="{{ old('hp_ibu', $pendaftaransiswa->hp_ibu) }}">

                    <h5>Data Wali (Opsional)</h5>
                    <input type="text" name="nama_wali" placeholder="Nama Wali" class="form-control mb-2" value="{{ old('nama_wali', $pendaftaransiswa->nama_wali) }}">
                    <input type="text" name="tempat_lahir_wali" placeholder="Tempat Lahir Wali" class="form-control mb-2" value="{{ old('tempat_lahir_wali', $pendaftaransiswa->tempat_lahir_wali) }}">
                    <input type="date" name="tanggal_lahir_wali" class="form-control mb-2" value="{{ old('tanggal_lahir_wali', $pendaftaransiswa->tanggal_lahir_wali) }}">
                    <input type="text" name="pendidikan_wali" placeholder="Pendidikan Wali" class="form-control mb-2" value="{{ old('pendidikan_wali', $pendaftaransiswa->pendidikan_wali) }}">
                    <input type="text" name="pekerjaan_wali" placeholder="Pekerjaan Wali" class="form-control mb-2" value="{{ old('pekerjaan_wali', $pendaftaransiswa->pekerjaan_wali) }}">
                    <input type="number" step="0.01" name="penghasilan_wali" placeholder="Penghasilan Wali" class="form-control mb-2" value="{{ old('penghasilan_wali', $pendaftaransiswa->penghasilan_wali) }}">
                    <input type="text" name="hp_wali" placeholder="No HP Wali" class="form-control mb-3" value="{{ old('hp_wali', $pendaftaransiswa->hp_wali) }}">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</section>
</div>
@endsection
