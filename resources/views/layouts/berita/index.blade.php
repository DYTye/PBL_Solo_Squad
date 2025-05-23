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
            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $berita->judul_berita }}</h4>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('uploads/' . $berita->gambar) }}" alt="Gambar Berita" class="img-fluid mb-3" />
                                <p>{{ $berita->isi_berita }}</p>
                            </div>
                            <div class="card-footer text-right">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{url('berita/create')}}" class="btn btn-primary">Tambah Berita</a>
            
        </section>
    </div>
@endsection

@push('scripts')
@endpush
