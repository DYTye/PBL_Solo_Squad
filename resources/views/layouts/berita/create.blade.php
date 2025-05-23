@extends('layouts.app')

@section('title', 'Form Berita')

@push('style')
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="">Berita</h1>
            </div>

            <div class="section-body">
                <h4 class="section-title">Tambah Berita</h4>
                <p class="section-lead">tambahkan berita</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif




                {{-- Form Create Berita --}}
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control" id="judul_berita" required>
                    </div>

                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Isi Berita</label>
                        <textarea name="isi_berita" class="form-control" id="isi_berita" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
    </div>
    </section>
@endsection

@push('scripts')
@endpush
