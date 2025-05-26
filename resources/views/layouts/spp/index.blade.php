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
        <a href="{{route('spp.create')}}" class="btn btn-primary mb-3">Bayar SPP</a>

        <table class="table table-stripped">
            <thead>
                <th>Siswa</th>
                <th>NIPD</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Bukti Pembayaran</th>
                <th>Keterangan</th>
            </thead>
            @foreach($spps as $spp)
            <tr>
                <td>{{$spp->siswa->nama}}</td>
                <td>{{$spp->siswa->nipd}}</td>
                <td>{{$spp->tanggal}}</td>
                <td>{{$spp->jumlah}}</td>
                <td>{{$spp->bukti_pembayaran}}</td>
                <td>{{$spp->keterangan}}</td>
            </tr>
            @endforeach

            <tbody>
                <td></td>
            </tbody>
        </table>
    </section>
</div>

@endsection

@push('script')
@endpush