@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Guru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Perhatian!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama <span class="text-danger">*</span></label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $guru->nama) }}" required>
        </div>
        <div class="form-group">
            <label for="nuptk">NUPTK</label>
            <input type="text" name="nuptk" class="form-control" value="{{ old('nuptk', $guru->nuptk) }}">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', optional($guru->tanggal_lahir)->format('Y-m-d')) }}">
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip', $guru->nip) }}">
        </div>
        <div class="form-group">
            <label for="status_kepegawaian">Status Kepegawaian</label>
            <input type="text" name="status_kepegawaian" class="form-control" value="{{ old('status_kepegawaian', $guru->status_kepegawaian) }}">
        </div>
        <div class="form-group">
            <label for="jenis_ptk">Jenis PTK</label>
            <input type="text" name="jenis_ptk" class="form-control" value="{{ old('jenis_ptk', $guru->jenis_ptk) }}">
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" name="agama" class="form-control" value="{{ old('agama', $guru->agama) }}">
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="text" name="hp" class="form-control" value="{{ old('hp', $guru->hp) }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $guru->email) }}">
        </div>
        <div class="form-group">
            <label for="tugas_tambahan">Tugas Tambahan</label>
            <input type="text" name="tugas_tambahan" class="form-control" value="{{ old('tugas_tambahan', $guru->tugas_tambahan) }}">
        </div>
        <div class="form-group">
            <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
            <input type="text" name="nama_ibu_kandung" class="form-control" value="{{ old('nama_ibu_kandung', $guru->nama_ibu_kandung) }}">
        </div>
        <div class="form-group">
            <label for="status_perkawinan">Status Perkawinan</label>
            <input type="text" name="status_perkawinan" class="form-control" value="{{ old('status_perkawinan', $guru->status_perkawinan) }}">
        </div>
        <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="text" name="npwp" class="form-control" value="{{ old('npwp', $guru->npwp) }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('guru.index') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
@endsection
