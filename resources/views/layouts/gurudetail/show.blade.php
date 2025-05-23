@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Guru: {{ $guru->nama }}</h1>
        </div>

        <div class="section-body">

            {{-- Informasi Dasar --}}
            <div class="card">
                <div class="card-body">
                   <ul class="list-group mb-3">
                        <li class="list-group-item active"><strong>Informasi Dasar Guru</strong></li>
                        <li class="list-group-item"><strong>Nama:</strong> {{ $guru->nama }}</li>
                        <li class="list-group-item"><strong>NUPTK:</strong> {{ $guru->nuptk ?? '-' }}</li>
                        <li class="list-group-item"><strong>NIP:</strong> {{ $guru->nip ?? '-' }}</li>
                        <li class="list-group-item"><strong>Jenis Kelamin:</strong> 
                            {{ $guru->jenis_kelamin == 'L' ? 'Laki-laki' : ($guru->jenis_kelamin == 'P' ? 'Perempuan' : '-') }}
                        </li>
                        <li class="list-group-item"><strong>Tempat Lahir:</strong> {{ $guru->tempat_lahir ?? '-' }}</li>
                        <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $guru->tanggal_lahir ? $guru->tanggal_lahir->format('d-m-Y') : '-' }}</li>
                        <li class="list-group-item"><strong>Agama:</strong> {{ $guru->agama ?? '-' }}</li>
                        <li class="list-group-item"><strong>HP:</strong> {{ $guru->hp ?? '-' }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $guru->email ?? '-' }}</li>
                    </ul>

                </div>
            </div>

            {{-- Detail Tambahan --}}
            <div class="card mt-4">
                <div class="card-body">
                    @if($guru->detail)
                        @php $detail = $guru->detail; @endphp
                        <ul class="list-group mb-3">
                            <li class="list-group-item active"><strong>Detail Tambahan Guru</strong></li>
                            <li class="list-group-item"><strong>Nama Pasangan:</strong> {{ $detail->nama_pasangan ?? '-' }}</li>
                            <li class="list-group-item"><strong>NIP Pasangan:</strong> {{ $detail->nip_pasangan ?? '-' }}</li>
                            <li class="list-group-item"><strong>Pekerjaan Pasangan:</strong> {{ $detail->pekerjaan_pasangan ?? '-' }}</li>
                            <li class="list-group-item"><strong>Status Kepegawaian:</strong> {{ $detail->status_kepegawaian ?? '-' }}</li>
                            <li class="list-group-item"><strong>Jenis PTK:</strong> {{ $detail->jenis_ptk ?? '-' }}</li>
                            <li class="list-group-item"><strong>NPWP:</strong> {{ $detail->npwp ?? '-' }}</li>
                            <li class="list-group-item"><strong>Nama Ibu Kandung:</strong> {{ $detail->nama_ibu_kandung ?? '-' }}</li>
                            <li class="list-group-item"><strong>Status Perkawinan:</strong> {{ $detail->status_perkawinan ?? '-' }}</li>
                            <li class="list-group-item"><strong>Tugas Tambahan:</strong> {{ $detail->tugas_tambahan ?? '-' }}</li>
                            <li class="list-group-item"><strong>Sudah Lisensi Kepala Sekolah:</strong> {{ $detail->sudah_lisensi_kepala_sekolah ? 'Ya' : 'Tidak' }}</li>
                            <li class="list-group-item"><strong>Pernah Diklat Kepengawasan:</strong> {{ $detail->pernah_diklat_kepengawasan ? 'Ya' : 'Tidak' }}</li>
                            <li class="list-group-item"><strong>Keahlian Braille:</strong> {{ $detail->keahlian_braille ? 'Ya' : 'Tidak' }}</li>
                            <li class="list-group-item"><strong>Keahlian Bahasa Isyarat:</strong> {{ $detail->keahlian_bahasa_isyarat ? 'Ya' : 'Tidak' }}</li>
                            <li class="list-group-item"><strong>Tanggal CPNS:</strong> {{ $detail->tanggal_cpns ? \Carbon\Carbon::parse($detail->tanggal_cpns)->format('d-m-Y') : '-' }}</li>
                            <li class="list-group-item"><strong>SK Pengangkatan:</strong> {{ $detail->sk_pengangkatan ?? '-' }}</li>
                            <li class="list-group-item"><strong>TMT Pengangkatan:</strong> {{ $detail->tmt_pengangkatan ? \Carbon\Carbon::parse($detail->tmt_pengangkatan)->format('d-m-Y') : '-' }}</li>
                            <li class="list-group-item"><strong>Lembaga Pengangkatan:</strong> {{ $detail->lembaga_pengangkatan ?? '-' }}</li>
                            <li class="list-group-item"><strong>Pangkat Golongan:</strong> {{ $detail->pangkat_golongan ?? '-' }}</li>
                            <li class="list-group-item"><strong>Sumber Gaji:</strong> {{ $detail->sumber_gaji ?? '-' }}</li>
                        </ul>


                        <a href="{{ route('guru.detail.edit', $guru->id) }}" class="btn btn-warning">Edit Detail</a>

                        <form action="{{ route('guru.detail.destroy', $guru->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus detail ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus Detail</button>
                        </form> 
                    @else
                        <p>Belum ada data detail guru.</p>
                        <a href="{{ route('guru.detail.create', $guru->id) }}" class="btn btn-primary">Tambah Detail</a>
                    @endif
                </div>
            </div>

        </div>

        <div class="mt-4">
            <a href="{{ route('guru.index') }}" class="btn btn-secondary">
                ← Kembali ke Daftar Guru
            </a>
        </div>

    </section>
</div>
@endsection
