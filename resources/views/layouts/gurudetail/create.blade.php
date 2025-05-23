@extends('layouts.app')

@section('title', 'Tambah Detail Guru')

@section('content')
<div class="main-content">
    <h2>Tambah Detail untuk Guru: {{ $guru->nama }}</h2>

    <form action="{{ route('guru.detail.store', $guru->id) }}" method="POST">
        @csrf

        @include('layouts.gurudetail.form')

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('guru.detail.show', $guru->id) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
