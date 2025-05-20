@extends('layouts.app')

@section('title', 'Detail Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Guru: {{ $guru->nama }}</h1>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary ml-auto">Kembali</a>
        </div>

        <div class="section-body">

            {{-- TABEL ALAMAT GURU --}}
            <h3>Alamat Guru</h3>
            @if ($guru->alamat)
                <table class="table table-bordered mb-2">
                    <tr><th>Jalan</th><td>{{ $guru->alamat->jalan }}</td></tr>
                    <tr><th>RT/RW</th><td>{{ $guru->alamat->rt }}/{{ $guru->alamat->rw }}</td></tr>
                    <tr><th>Dusun</th><td>{{ $guru->alamat->nama_dusun }}</td></tr>
                    <tr><th>Desa/Kelurahan</th><td>{{ $guru->alamat->desa_kelurahan }}</td></tr>
                    <tr><th>Kecamatan</th><td>{{ $guru->alamat->kecamatan }}</td></tr>
                    <tr><th>Kode Pos</th><td>{{ $guru->alamat->kode_pos }}</td></tr>
                </table>
                <a href="{{ route('alamatguru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Update</a>
                <form action="{{ route('alamatguru.destroy', $guru->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus alamat?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            @else
                <p>Alamat belum tersedia.</p>
                <a href="{{ route('alamatguru.create', $guru->id) }}" class="btn btn-primary btn-sm">Tambah Alamat</a>
            @endif

            <hr>

            {{-- TABEL KOMPETENSI GURU --}}
            <h3>Kompetensi Guru</h3>
            @if ($guru->kompetensi->isEmpty())
                <p>Belum ada data kompetensi.</p>
                <a href="{{ route('kompetensiguru.create', $guru->id) }}" class="btn btn-primary btn-sm">Tambah Kompetensi</a>
            @else
                <table class="table table-bordered mb-2">
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
                            <td>{{ $kompetensi->tmt_pns?->format('Y-m-d') }}</td>
                            <td>{{ $kompetensi->sudah_lisensi_kepala_sekolah ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $kompetensi->pernah_diklat_kepengawasan ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $kompetensi->keahlian_braille ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $kompetensi->keahlian_bahasa_isyarat ? 'Ya' : 'Tidak' }}</td>
                            <td>
                                <a href="{{ route('kompetensiguru.edit', [$guru->id, $kompetensi->id]) }}" class="btn btn-warning btn-sm">Update</a>
                                <form action="{{ route('kompetensiguru.destroy', [$guru->id, $kompetensi->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kompetensi ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <hr>

            {{-- TABEL PASANGAN GURU --}}
            <h3>Pasangan Guru</h3>
            @if ($guru->pasangan->isEmpty())
                <p>Belum ada data pasangan.</p>
                <a href="{{ route('pasanganguru.create', $guru->id) }}" class="btn btn-primary btn-sm">Tambah Pasangan</a>
            @else
                <table class="table table-bordered mb-2">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru->pasangan as $pasangan)
                        <tr>
                            <td>{{ $pasangan->nama }}</td>
                            <td>{{ $pasangan->status }}</td>
                            <td>{{ $pasangan->pekerjaan }}</td>
                            <td>
                                <a href="{{ route('pasanganguru.edit', [$guru->id, $pasangan->id]) }}" class="btn btn-warning btn-sm">Update</a>
                                <form action="{{ route('pasanganguru.destroy', [$guru->id, $pasangan->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data pasangan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <hr>

            {{-- TABEL PENGANGKATAN GURU --}}
            <h3>Pengangkatan Guru</h3>
            @if ($guru->pengangkatan->isEmpty())
                <p>Belum ada data pengangkatan.</p>
                <a href="{{ route('pengangkatanguru.create', $guru->id) }}" class="btn btn-primary btn-sm">Tambah Pengangkatan</a>
            @else
                <table class="table table-bordered mb-2">
                    <thead>
                        <tr>
                            <th>Tanggal SK</th>
                            <th>Nomor SK</th>
                            <th>Jenis Pengangkatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru->pengangkatan as $pengangkatan)
                        <tr>
                            <td>{{ $pengangkatan->tanggal_sk?->format('Y-m-d') }}</td>
                            <td>{{ $pengangkatan->nomor_sk }}</td>
                            <td>{{ $pengangkatan->jenis_pengangkatan }}</td>
                            <td>
                                <a href="{{ route('pengangkatanguru.edit', [$guru->id, $pengangkatan->id]) }}" class="btn btn-warning btn-sm">Update</a>
                                <form action="{{ route('pengangkatanguru.destroy', [$guru->id, $pengangkatan->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus pengangkatan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
