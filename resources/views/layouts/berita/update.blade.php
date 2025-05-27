@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Edit Berita</h1>
    </div>

    <div class="section-body">
        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" name="judul_berita" class="form-control" value="{{ old('judul_berita', $berita->judul_berita) }}" required>
            </div>

            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <textarea name="isi_berita" class="form-control" rows="5" required>{{ old('isi_berita', $berita->isi_berita) }}</textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar (kosongkan jika tidak diganti)</label>
                <input type="file" name="gambar" class="form-control-file">
                @if ($berita->gambar)
                    <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="Gambar Berita" width="150" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Berita</button>
        </form>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">← Kembali ke daftar</a>
    </div>
</section>
</div>
@endsection
