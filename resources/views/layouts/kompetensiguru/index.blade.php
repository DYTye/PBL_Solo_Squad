@extends('layouts.app')

@section('title', 'Kompetensi Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex align-items-center justify-content-between">
            <h1>Kompetensi Guru: {{ $guru->nama }}</h1>
            <div>
                <a href="{{ route('kompetensiguru.create', $guru->id) }}" class="btn btn-primary">Tambah Kompetensi</a>
                <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>

        <div class="section-body mt-3">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($guru->kompetensi->isEmpty())
                <p class="text-muted">Belum ada data kompetensi.</p>
            @else
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>TMT PNS</th>
                            <th>Lisensi Kepala Sekolah</th>
                            <th>Diklat Kepengawasan</th>
                            <th>Keahlian Braille</th>
                            <th>Keahlian Bahasa Isyarat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru->kompetensi as $kompetensi)
                        <tr>
                            <td>{{ $kompetensi->tmt_pns ? $kompetensi->tmt_pns->format('Y-m-d') : '-' }}</td>
                            <td>{{ $kompetensi->sudah_lisensi_kepala_sekolah ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $kompetensi->pernah_diklat_kepengawasan ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $kompetensi->keahlian_braille ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $kompetensi->keahlian_bahasa_isyarat ? 'Ya' : 'Tidak' }}</td>
                            <td>
                                <a href="{{ route('kompetensiguru.edit', [$guru->id, $kompetensi->id]) }}" class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('kompetensiguru.destroy', [$guru->id, $kompetensi->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </section>
</div>
@endsection
