@extends('layouts.app')

@section('title', 'Detail Berita')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $berita->judul_berita }}</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="Gambar Berita" class="img-fluid mb-3" style="max-height: 400px;">
                <p>{!! nl2br(e($berita->isi_berita)) !!}</p>
                 <div class="d-flex">
                                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>

                                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
            </div>
        </div>

        <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">← Kembali ke daftar</a>
    </section>
</div>
@endsection
