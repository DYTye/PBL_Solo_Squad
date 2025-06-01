@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Detail Data Pendaftaran Siswa</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('pendaftaransiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item active">Data Siswa</li>
                    <li class="list-group-item"><strong>NIK:</strong> {{ $pendaftaransiswa->nik }}</li>
                    <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $pendaftaransiswa->nama_lengkap }}</li>
                    <li class="list-group-item"><strong>Nama Panggilan:</strong> {{ $pendaftaransiswa->nama_panggilan }}</li>
                    <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $pendaftaransiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</li>
                    <li class="list-group-item"><strong>Tempat Lahir:</strong> {{ $pendaftaransiswa->tempat_lahir }}</li>
                    <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ optional($pendaftaransiswa->tanggal_lahir)->format('d-m-Y') }}</li>
                    <li class="list-group-item"><strong>Alamat:</strong> {{ $pendaftaransiswa->alamat }}</li>
                    <li class="list-group-item"><strong>No. Telp:</strong> {{ $pendaftaransiswa->telp }}</li>
                    <li class="list-group-item"><strong>Jumlah Saudara:</strong> {{ $pendaftaransiswa->jumlah_saudara }}</li>
                    <li class="list-group-item"><strong>Anak Ke:</strong> {{ $pendaftaransiswa->anak_ke }}</li>
                    <li class="list-group-item"><strong>Bahasa Sehari-hari:</strong> {{ $pendaftaransiswa->bahasa_seharihari }}</li>
                    <li class="list-group-item"><strong>Agama:</strong> {{ $pendaftaransiswa->agama }}</li>

                    <li class="list-group-item active">Data Ayah</li>
                    <li class="list-group-item"><strong>Nama Ayah:</strong> {{ $pendaftaransiswa->nama_ayah }}</li>
                    <li class="list-group-item"><strong>Tempat Lahir Ayah:</strong> {{ $pendaftaransiswa->tempat_lahir_ayah }}</li>
                    <li class="list-group-item"><strong>Tanggal Lahir Ayah:</strong> {{ optional($pendaftaransiswa->tanggal_lahir_ayah)->format('d-m-Y') }}</li>
                    <li class="list-group-item"><strong>Pendidikan Ayah:</strong> {{ $pendaftaransiswa->pendidikan_ayah }}</li>
                    <li class="list-group-item"><strong>Pekerjaan Ayah:</strong> {{ $pendaftaransiswa->pekerjaan_ayah }}</li>
                    <li class="list-group-item"><strong>Penghasilan Ayah:</strong> {{ $pendaftaransiswa->penghasilan_ayah }}</li>
                    <li class="list-group-item"><strong>No HP Ayah:</strong> {{ $pendaftaransiswa->hp_ayah }}</li>

                    <li class="list-group-item active">Data Ibu</li>
                    <li class="list-group-item"><strong>Nama Ibu:</strong> {{ $pendaftaransiswa->nama_ibu }}</li>
                    <li class="list-group-item"><strong>Tempat Lahir Ibu:</strong> {{ $pendaftaransiswa->tempat_lahir_ibu }}</li>
                    <li class="list-group-item"><strong>Tanggal Lahir Ibu:</strong> {{ optional($pendaftaransiswa->tanggal_lahir_ibu)->format('d-m-Y') }}</li>
                    <li class="list-group-item"><strong>Pendidikan Ibu:</strong> {{ $pendaftaransiswa->pendidikan_ibu }}</li>
                    <li class="list-group-item"><strong>Pekerjaan Ibu:</strong> {{ $pendaftaransiswa->pekerjaan_ibu }}</li>
                    <li class="list-group-item"><strong>Penghasilan Ibu:</strong> {{ $pendaftaransiswa->penghasilan_ibu }}</li>
                    <li class="list-group-item"><strong>No HP Ibu:</strong> {{ $pendaftaransiswa->hp_ibu }}</li>

                    <li class="list-group-item active">Data Wali (Opsional)</li>
                    <li class="list-group-item"><strong>Nama Wali:</strong> {{ $pendaftaransiswa->nama_wali ?? '-' }}</li>
                    <li class="list-group-item"><strong>Tempat Lahir Wali:</strong> {{ $pendaftaransiswa->tempat_lahir_wali ?? '-' }}</li>
                    <li class="list-group-item"><strong>Tanggal Lahir Wali:</strong> {{ optional($pendaftaransiswa->tanggal_lahir_wali)->format('d-m-Y') ?? '-' }}</li>
                    <li class="list-group-item"><strong>Pendidikan Wali:</strong> {{ $pendaftaransiswa->pendidikan_wali ?? '-' }}</li>
                    <li class="list-group-item"><strong>Pekerjaan Wali:</strong> {{ $pendaftaransiswa->pekerjaan_wali ?? '-' }}</li>
                    <li class="list-group-item"><strong>Penghasilan Wali:</strong> {{ $pendaftaransiswa->penghasilan_wali ?? '-' }}</li>
                    <li class="list-group-item"><strong>No HP Wali:</strong> {{ $pendaftaransiswa->hp_wali ?? '-' }}</li>
                </ul>

                <a href="{{ route('pendaftaransiswa.edit', $pendaftaransiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pendaftaransiswa.destroy', $pendaftaransiswa->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Yakin hapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
