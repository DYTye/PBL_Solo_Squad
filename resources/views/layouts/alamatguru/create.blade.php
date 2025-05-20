@extends('layouts.app')

@section('title', 'Tambah Alamat Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Alamat Guru</h1>
        </div>
        <div class="section-body">
            <form action="{{ route('alamatguru.store', $guru->id) }}" method="POST">
                @csrf
                @include('layouts.alamatguru.form')
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</div>
@endsection
