@extends('layouts.app')

@section('title', 'Detail Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Guru</h1>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary ml-auto">Kembali</a>
        </div>

        <div class="section-body">
            <h4>{{ $guru->nama }}</h4>

            {{-- Tabel Alamat --}}
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Alamat Guru</h5>
                    @if ($guru->alamat)
                        <div>
                            <a href="{{ route('alamatguru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('alamatguru.destroy', $guru->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus alamat ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('alamatguru.create', $guru->id) }}" class="btn btn-primary btn-sm">Tambah Alamat</a>
                    @endif
                </div>
                <div class="card-body">
                    @if($guru->alamat)
                        <ul>
                            <li><strong>Jalan:</strong> {{ $guru->alamat->jalan }}</li>
                            <li><strong>RT/RW:</strong> {{ $guru->alamat->rt }}/{{ $guru->alamat->rw }}</li>
                            <li><strong>Dusun:</strong> {{ $guru->alamat->nama_dusun }}</li>
                            <li><strong>Desa/Kelurahan:</strong> {{ $guru->alamat->desa_kelurahan }}</li>
                            <li><strong>Kecamatan:</strong> {{ $guru->alamat->kecamatan }}</li>
                            <li><strong>Kode Pos:</strong> {{ $guru->alamat->kode_pos }}</li>
                        </ul>
                    @else
                        <p class="text-muted">Alamat belum tersedia.</p>
                    @endif
                </div>
            </div>


        </div>
    </section>
</div>
@endsection
