@extends('layouts.app')
@section('title', 'Surat')
@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <form action="{{ route('surat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul_surat">Judul Surat</label>
                <input type="text" name="judul_surat" class="form-control" id="judul_surat" required>
            </div>
            <div class="mb-3">
                <label for="kategori">Masuk/Keluar</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="masuk">Masuk</option>
                    <option value="keluar">Keluar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="perihal">Perihal</label>
                <input type="text" name="perihal" id="perihal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lampiran">Lampiran</label>
                <input type="file" name="lampiran" id="lampiran" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </section>
</div>


@endsection

@push('script')
@endpush
