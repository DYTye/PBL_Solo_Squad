@extends('layouts.app')
@section('title','Surat')
@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Surat</h1>
        </div>
            
            <div class="section-body">
                <a href="{{ route('surat.create')}}" class="btn btn-primary my-3 ">Tambah Surat</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>NO</th>
                            <th>tanggal</th>
                            <th>Judul Surat</th>
                            <th>Kategori</th>
                            <th>Perihal</th>
                            <th>Lampiran</th>
                        </thead>

                        <tbody>
                            @foreach($surats as $surats)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$surats->tanggal}}</td>
                            <td>{{$surats->judul_surat}}</td>
                            <td>{{$surats->kategori}}</td>
                            <td>{{$surats->perihal}}</td>
                            <td>
                                <a href="{{asset('storage/lampiran/'.$surats->lampiran)}}" >Lihat File</a>
                            </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</div>
@endsection

@push('scrtipt')
@endpush