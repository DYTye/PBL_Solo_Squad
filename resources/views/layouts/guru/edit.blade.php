@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Edit Guru</h1>
        <a href="{{ route('guru.index') }}" class="btn btn-light ml-auto">Kembali ke Daftar Guru</a>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Guru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @php
                        $textFields = [
                            'nama' => 'Nama',
                            'nuptk' => 'NUPTK',
                            'nip' => 'NIP',
                            'tempat_lahir' => 'Tempat Lahir',
                            'agama' => 'Agama',
                            'hp' => 'No HP',
                            'email' => 'Email',
                            'nama_pasangan' => 'Nama Pasangan',
                            'nip_pasangan' => 'NIP Pasangan',
                            'pekerjaan_pasangan' => 'Pekerjaan Pasangan',
                            'status_kepegawaian' => 'Status Kepegawaian',
                            'jenis_ptk' => 'Jenis PTK',
                            'npwp' => 'NPWP',
                            'nama_ibu_kandung' => 'Nama Ibu Kandung',
                            'status_perkawinan' => 'Status Perkawinan',
                            'tugas_tambahan' => 'Tugas Tambahan',
                            'sk_cpns' => 'SK CPNS',
                            'sk_pengangkatan' => 'SK Pengangkatan',
                            'lembaga_pengangkatan' => 'Lembaga Pengangkatan',
                            'pangkat_golongan' => 'Pangkat Golongan',
                            'sumber_gaji' => 'Sumber Gaji',
                            'jalan' => 'Jalan',
                            'rt' => 'RT',
                            'rw' => 'RW',
                            'nama_dusun' => 'Nama Dusun',
                            'desa_kelurahan' => 'Desa/Kelurahan',
                            'kecamatan' => 'Kecamatan',
                            'kode_pos' => 'Kode Pos',
                        ];

                        $dateFields = [
                            'tanggal_lahir' => 'Tanggal Lahir',
                            'tanggal_cpns' => 'Tanggal CPNS',
                            'tmt_pns' => 'TMT PNS',
                            'tmt_pengangkatan' => 'TMT Pengangkatan',
                        ];

                        $booleanFields = [
                            'sudah_lisensi_kepala_sekolah',
                            'pernah_diklat_kepengawasan',
                            'keahlian_braille',
                            'keahlian_bahasa_isyarat',
                        ];

                        $jabatanOptions = [
                            '' => '-- Pilih Jabatan --',
                            'Kepala Sekolah' => 'Kepala Sekolah',
                            'Wakil Kepala Sekolah' => 'Wakil Kepala Sekolah',
                            'Guru Mapel' => 'Guru Mapel',
                            'Guru Kelas' => 'Guru Kelas',
                            'Tata Usaha' => 'Tata Usaha',
                            'Staff' => 'Staff',
                            // tambah opsi lain sesuai kebutuhan
                        ];

                        $statusOptions = [
                            '' => '-- Pilih Status --',
                            'Aktif' => 'Aktif',
                            'Nonaktif' => 'Nonaktif',
                        ];

                    @endphp

                    @foreach ($textFields as $field => $label)
                        <div class="form-group">
                            <label>{{ $label }}</label>
                            <input type="text" name="{{ $field }}" value="{{ old($field, $guru->$field) }}" class="form-control @error($field) is-invalid @enderror">
                            @error($field)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach

                    {{-- Input select khusus untuk status (jabatan) --}}
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" required>
                            @foreach ($jabatanOptions as $value => $label)
                                <option value="{{ $value }}" {{ old('jabatan', $guru->status) == $value ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                            @foreach ($statusOptions as $value => $label)
                                <option value="{{ $value }}" {{ old('status', $guru->status) == $value ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                        <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                            <option value="">-- Pilih --</option>
                            <option value="L" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    @foreach ($dateFields as $field => $label)
                        <div class="form-group">
                            <label>{{ $label }}</label>
                            <input type="date" name="{{ $field }}" value="{{ old($field, $guru->$field ? \Carbon\Carbon::parse($guru->$field)->format('Y-m-d') : '') }}" class="form-control @error($field) is-invalid @enderror">
                            @error($field)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach

                    @foreach ($booleanFields as $field)
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                            <select name="{{ $field }}" class="form-control @error($field) is-invalid @enderror">
                                <option value="0" {{ old($field, $guru->$field) == 0 ? 'selected' : '' }}>Tidak</option>
                                <option value="1" {{ old($field, $guru->$field) == 1 ? 'selected' : '' }}>Ya</option>
                            </select>
                            @error($field)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('guru.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
