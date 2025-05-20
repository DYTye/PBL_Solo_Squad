@extends('layouts.app')

@section('title', 'Detail Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Detail Guru</h1>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <div class="section-body">

            {{-- Biodata Guru --}}
            <div class="card mb-4">
                <div class="card-header"><h4>Biodata</h4></div>
                <div class="card-body row">
                    <div class="col-md-6">
                        <p><strong>Nama:</strong> {{ $guru->nama }}</p>
                        <p><strong>NUPTK:</strong> {{ $guru->nuptk }}</p>
                        <p><strong>NIP:</strong> {{ $guru->nip }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $guru->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                        <p><strong>Tempat Lahir:</strong> {{ $guru->tempat_lahir }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($guru->tanggal_lahir)->format('d-m-Y') }}</p>
                        <p><strong>Agama:</strong> {{ $guru->agama }}</p>
                        <p><strong>Status Perkawinan:</strong> {{ $guru->status_perkawinan }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Nama Ibu Kandung:</strong> {{ $guru->nama_ibu_kandung }}</p>
                        <p><strong>Status Kepegawaian:</strong> {{ $guru->status_kepegawaian }}</p>
                        <p><strong>Jenis PTK:</strong> {{ $guru->jenis_ptk }}</p>
                        <p><strong>Tugas Tambahan:</strong> {{ $guru->tugas_tambahan }}</p>
                        <p><strong>NPWP:</strong> {{ $guru->npwp }}</p>
                        <p><strong>No HP:</strong> {{ $guru->hp }}</p>
                        <p><strong>Email:</strong> {{ $guru->email }}</p>
                    </div>
                </div>
            </div>

            {{-- Alamat --}}
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between">
                    <h4>Alamat</h4>
                    <div>
                        @if($guru->alamat)
                            <a href="{{ route('alamatguru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('alamatguru.destroy', $guru->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        @else
                            <a href="{{ route('alamatguru.create', $guru->id) }}" class="btn btn-primary btn-sm">Tambah</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if($guru->alamat)
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Jalan:</strong> {{ $guru->alamat->jalan }}</p>
                                <p><strong>RT/RW:</strong> {{ $guru->alamat->rt }}/{{ $guru->alamat->rw }}</p>
                                <p><strong>Dusun:</strong> {{ $guru->alamat->nama_dusun }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Desa/Kelurahan:</strong> {{ $guru->alamat->desa_kelurahan }}</p>
                                <p><strong>Kecamatan:</strong> {{ $guru->alamat->kecamatan }}</p>
                                <p><strong>Kode Pos:</strong> {{ $guru->alamat->kode_pos }}</p>
                            </div>
                        </div>
                    @else
                        <p class="text-muted">Belum ada data alamat.</p>
                    @endif
                </div>
            </div>

            {{-- Kompetensi --}}
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between">
                    <h4>Kompetensi</h4>
                    <div>
                        @if($guru->kompetensi->isEmpty())
                            <a href="{{ route('kompetensiguru.create', $guru->id) }}" class="btn btn-primary btn-sm">Tambah</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if($guru->kompetensi->isEmpty())
                        <p class="text-muted">Belum ada data kompetensi.</p>
                    @else
                        @foreach($guru->kompetensi as $kompetensi)
                            <div class="mb-3 border p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <strong>Kompetensi ID: {{ $kompetensi->id }}</strong>
                                    <div>
                                        <a href="{{ route('kompetensiguru.edit', [$guru->id, $kompetensi->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kompetensiguru.destroy', [$guru->id, $kompetensi->id]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                                <p><strong>TMT PNS:</strong> {{ $kompetensi->tmt_pns }}</p>
                                <p><strong>Lisensi Kepala Sekolah:</strong> {{ $kompetensi->sudah_lisensi_kepala_sekolah ? 'Ya' : 'Tidak' }}</p>
                                <p><strong>Pernah Diklat Pengawasan:</strong> {{ $kompetensi->pernah_diklat_kepengawasan ? 'Ya' : 'Tidak' }}</p>
                                <p><strong>Keahlian Braille:</strong> {{ $kompetensi->keahlian_braille ? 'Ya' : 'Tidak' }}</p>
                                <p><strong>Keahlian Bahasa Isyarat:</strong> {{ $kompetensi->keahlian_bahasa_isyarat ? 'Ya' : 'Tidak' }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
