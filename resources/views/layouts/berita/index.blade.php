@extends('layouts.app')

@section('title', 'table berita')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Berita</h1>
        </div>
        <a href="{{ url('berita/create') }}" class="btn btn-primary my-3">Tambah Berita</a>

        <div class="row">
            @foreach ($beritas as $berita)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $berita->judul_berita }}</h4>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="Gambar Berita" class="img-fluid mb-3" />
                            <p>{{ $berita->isi_berita }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-primary btn-sm">Read More</a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </section>
</div>
@endsection

@push('scripts')
@endpush
