@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Daftar Guru</h1>
    </div>

    <div class="section-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif

        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table-guru">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NUPTK</th>
                        <th>NIP</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>HP</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($gurus as $index => $guru)
                    <tr onclick="window.location='{{ route('guru.detail', $guru->id) }}'" style="cursor: pointer;">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->nuptk }}</td>
                        <td>{{ $guru->nip ?? '-' }}</td>
                        <td>{{ $guru->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $guru->tempat_lahir ?? '-' }}</td>
                        <td>{{ $guru->tanggal_lahir ? $guru->tanggal_lahir->format('d-m-Y') : '-' }}</td>
                        <td>{{ $guru->agama ?? '-' }}</td>
                        <td>{{ $guru->hp ?? '-' }}</td>
                        <td>{{ $guru->email ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center">Belum ada data guru.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
</div>
@endsection
