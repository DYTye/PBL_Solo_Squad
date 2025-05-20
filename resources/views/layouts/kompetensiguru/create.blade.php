@extends('layouts.app')

@section('title', 'Tambah Kompetensi Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center">
            <h1>Tambah Kompetensi untuk: {{ $guru->nama }}</h1>
            <a href="{{ route('guru.detail', $guru->id) }}" class="btn btn-secondary">Kembali</a>

        </div>

        <div class="section-body mt-3">
            <form action="{{ route('kompetensiguru.store', $guru->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="tmt_pns">TMT PNS</label>
                    <input type="date" name="tmt_pns" id="tmt_pns" class="form-control" value="{{ old('tmt_pns') }}">
                    @error('tmt_pns') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="sudah_lisensi_kepala_sekolah" id="sudah_lisensi_kepala_sekolah" class="form-check-input" value="1" {{ old('sudah_lisensi_kepala_sekolah') ? 'checked' : '' }}>
                    <label for="sudah_lisensi_kepala_sekolah" class="form-check-label">Sudah Lisensi Kepala Sekolah</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="pernah_diklat_kepengawasan" id="pernah_diklat_kepengawasan" class="form-check-input" value="1" {{ old('pernah_diklat_kepengawasan') ? 'checked' : '' }}>
                    <label for="pernah_diklat_kepengawasan" class="form-check-label">Pernah Diklat Kepengawasan</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="keahlian_braille" id="keahlian_braille" class="form-check-input" value="1" {{ old('keahlian_braille') ? 'checked' : '' }}>
                    <label for="keahlian_braille" class="form-check-label">Keahlian Braille</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="keahlian_bahasa_isyarat" id="keahlian_bahasa_isyarat" class="form-check-input" value="1" {{ old('keahlian_bahasa_isyarat') ? 'checked' : '' }}>
                    <label for="keahlian_bahasa_isyarat" class="form-check-label">Keahlian Bahasa Isyarat</label>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</div>
@endsection
