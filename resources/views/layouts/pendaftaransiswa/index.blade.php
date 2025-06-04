@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Data Pendaftaran Siswa</h1>
    </div>

    <div class="section-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif

        <a href="{{ route('pendaftaransiswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table-pendaftaran">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Orang Tua</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pendaftaransiswas as $index =>$pendaftaransiswa)
                    <tr onclick="window.location='{{ route('pendaftaransiswa.show', $pendaftaransiswa->id) }}'" style="cursor: pointer;">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pendaftaransiswa->nik }}</td>
                        <td>{{ $pendaftaransiswa->nama_lengkap }}</td>
                        <td>{{ $pendaftaransiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $pendaftaransiswa->tempat_lahir }}, {{ \Carbon\Carbon::parse($pendaftaransiswa->tanggal_lahir)->format('d-m-Y') }}</td>
                        <td>{{ $pendaftaransiswa->nama_ayah ?? '-' }} / {{ $pendaftaransiswa->nama_ibu ?? '-' }}</td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Data belum tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>
@endsection
