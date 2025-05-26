@extends('layouts.app')

@section('title','spp')

@push('style')
@endpush

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>SPP</h1>
        </div>
        <div class="container">
            <form action="{{route('spp.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="siswa_id">Masukan NIPD Siswa</label>
                    <input type="text" name="siswa_id" id="siswa_id" class="form-control" required>
                </div>
                

                <div class="mb-3">
                    <label for="tahun_ajar_id">Tahun Ajar</label>
                    <input type="text" name="tahun_ajar_id" id="tahun_ajar_id" class="form-control" value="{{$tahun_ajar->nama_tahun_ajar}}" readonly>
                </div>

                <div class="mb-3">
                    <label for="tanggal">Tanggal Bayar</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jumalh">Jumlah bayar</label>
                    <input type="text" name="jumlah" id="jumalh" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</div>

@endsection

@push('script')
@endpush