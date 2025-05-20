@extends('layouts.app')

@section('title', 'Data Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center">
            <h1>Data Guru</h1>
            <a href="{{ route('guru.create') }}" class="btn btn-primary">Tambah Guru</a>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Guru</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
    <tr>
        <th>Nama</th>
        <th>NUPTK</th>
        <th>Jenis Kelamin</th>
        <th>HP</th>
        <th>Email</th>
        <th style="width: 170px;">Aksi</th>
    </tr>
</thead>
<tbody>
    @forelse ($gurus as $guru)
    <tr>
        <td>{{ $guru->nama }}</td>
        <td>{{ $guru->nuptk }}</td>
        <td>{{ $guru->jenis_kelamin == 'L' ? 'Laki-laki' : ($guru->jenis_kelamin == 'P' ? 'Perempuan' : '-') }}</td>
        <td>{{ $guru->hp }}</td>
        <td>{{ $guru->email }}</td>
        <td>
            <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-sm btn-warning">Edit</a>

            <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-sm btn-danger">Hapus</button>
            </form>

            <a href="{{ route('guru.detail', $guru->id) }}" class="btn btn-sm btn-info">Detail</a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center">Belum ada data guru</td>
    </tr>
    @endforelse
</tbody>

                        </table>
                    </div> <!-- /.table-responsive -->
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->
        </div> <!-- /.section-body -->
    </section>
</div>
@endsection
