@extends('layouts.app')

@section('title','spp')

@push('style')
@endpush

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tahun Ajar</h1>
        </div>
        <a href="{{route('tahunajar.create')}}" class="btn btn-primary mb-3">Tambah Tahun Ajar</a>

        <table class="table table-stripped">
            <thead>
                <th>NO</th>
                <th>Tahun Ajar</th>
                <th>Semester</th>
                <th>Status</th>
            </thead>

            <tbody>
                @foreach($tahun_ajar as $tahun_ajar)
                <td>{{$tahun_ajar->id}}</td>
                <td>{{$tahun_ajar->nama_tahun_ajar}}</td>
                <td>{{$tahun_ajar->semester}}</td>
                <td>{{$tahun_ajar->status}}</td>
                @endforeach
            </tbody>
        </table>
        
    </section>
</div>

@endsection

@push('script')
@endpush