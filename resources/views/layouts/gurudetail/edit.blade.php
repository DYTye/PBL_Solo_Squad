@extends('layouts.app')

@section('title', 'Edit Detail Guru')

@section('content')
<div class="main-content">
    <h2>Edit Detail Guru: {{ $guru->nama }}</h2>

    <form action="{{ route('guru.detail.update', $guru->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('layouts.gurudetail.form')

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('guru.detail.show', $guru->id) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
