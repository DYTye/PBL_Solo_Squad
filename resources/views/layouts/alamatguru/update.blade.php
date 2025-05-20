@extends('layouts.app')

@section('title', 'Edit Alamat Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Alamat Guru</h1>
        </div>
        <div class="section-body">
            <form action="{{ route('alamatguru.update', $guru->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('layouts.alamatguru.form', ['alamat' => $guru->alamat])
                <button class="btn btn-success">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
