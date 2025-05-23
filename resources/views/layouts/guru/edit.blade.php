@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Edit Guru</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Guru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Nama <span class="text-danger">*</span></label>
                        <input type="text" name="nama" value="{{ old('nama', $guru->nama) }}" class="form-control @error('nama') is-invalid @enderror" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>NUPTK <span class="text-danger">*</span></label>
                        <input type="text" name="nuptk" value="{{ old('nuptk', $guru->nuptk) }}" class="form-control @error('nuptk') is-invalid @enderror" required>
                        @error('nuptk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                        <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                            <option value="">-- Pilih --</option>
                            <option value="L" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $guru->tanggal_lahir ? $guru->tanggal_lahir->format('Y-m-d') : '') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" value="{{ old('nip', $guru->nip) }}" class="form-control @error('nip') is-invalid @enderror">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" name="agama" value="{{ old('agama', $guru->agama) }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" name="hp" value="{{ old('hp', $guru->hp) }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email', $guru->email) }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('guru.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
