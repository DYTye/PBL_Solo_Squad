@extends('layouts.app')

@section('title', 'Table Example')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Siswa</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data siswa</h2>
            <p class="section-lead">
                This page is an example of using a table.
            </p>
            
            <div class="table-responsive">
                <form action="{{route('siswa.update', $siswa->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{old('nama', $siswa->nama)}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nomor_induk_siswa" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nomor_induk_siswa" value="{{old('nomor_induk_siswa', $siswa->nomor_induk_siswa)}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" value="{{old('jenis_kelamin', $siswa->jenis_kelamin)}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" class="form-control" id="kelas" value="{{old('kelas',$siswa->kelas)}}">
                            <option value="A">Kelas A</option>
                            <option value="B">Kelas B</option>
                            <option value="B1">Kelas B1</option>
                            <option value="B2">Kelas B2</option>
                            <option value="B3">Kelas B3</option>
                            <option value="B4">Kelas B4</option>
                            <option value="B5">Kelas B5</option>
                            <option value="B6">Kelas B6</option>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{old('tanggal_lahir',$siswa->tanggal_lahir)}}">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="alamat" value="{{old('alamat', $siswa->alamat)}}">
                    </div>


                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush