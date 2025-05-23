@php
    use Carbon\Carbon;
    $detail = $guru->detail ?? null;
@endphp

<div class="mb-3">
    <label for="nama_pasangan" class="form-label">Nama Pasangan</label>
    <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control" value="{{ old('nama_pasangan', $detail->nama_pasangan ?? '') }}">
</div>

<div class="mb-3">
    <label for="nip_pasangan" class="form-label">NIP Pasangan</label>
    <input type="text" name="nip_pasangan" id="nip_pasangan" class="form-control" value="{{ old('nip_pasangan', $detail->nip_pasangan ?? '') }}">
</div>

<div class="mb-3">
    <label for="pekerjaan_pasangan" class="form-label">Pekerjaan Pasangan</label>
    <input type="text" name="pekerjaan_pasangan" id="pekerjaan_pasangan" class="form-control" value="{{ old('pekerjaan_pasangan', $detail->pekerjaan_pasangan ?? '') }}">
</div>

<div class="mb-3">
    <label for="status_kepegawaian" class="form-label">Status Kepegawaian</label>
    <input type="text" name="status_kepegawaian" id="status_kepegawaian" class="form-control" value="{{ old('status_kepegawaian', $detail->status_kepegawaian ?? '') }}">
</div>

<div class="mb-3">
    <label for="jenis_ptk" class="form-label">Jenis PTK</label>
    <input type="text" name="jenis_ptk" id="jenis_ptk" class="form-control" value="{{ old('jenis_ptk', $detail->jenis_ptk ?? '') }}">
</div>

<div class="mb-3">
    <label for="npwp" class="form-label">NPWP</label>
    <input type="text" name="npwp" id="npwp" class="form-control" value="{{ old('npwp', $detail->npwp ?? '') }}">
</div>

<div class="mb-3">
    <label for="nama_ibu_kandung" class="form-label">Nama Ibu Kandung</label>
    <input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung" class="form-control" value="{{ old('nama_ibu_kandung', $detail->nama_ibu_kandung ?? '') }}">
</div>

<div class="mb-3">
    <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
    <input type="text" name="status_perkawinan" id="status_perkawinan" class="form-control" value="{{ old('status_perkawinan', $detail->status_perkawinan ?? '') }}">
</div>

<div class="mb-3">
    <label for="tugas_tambahan" class="form-label">Tugas Tambahan</label>
    <input type="text" name="tugas_tambahan" id="tugas_tambahan" class="form-control" value="{{ old('tugas_tambahan', $detail->tugas_tambahan ?? '') }}">
</div>

<div class="mb-3 form-check">
    <input type="checkbox" name="sudah_lisensi_kepala_sekolah" id="sudah_lisensi_kepala_sekolah" class="form-check-input" value="1" {{ old('sudah_lisensi_kepala_sekolah', $detail->sudah_lisensi_kepala_sekolah ?? false) ? 'checked' : '' }}>
    <label for="sudah_lisensi_kepala_sekolah" class="form-check-label">Sudah Lisensi Kepala Sekolah</label>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" name="pernah_diklat_kepengawasan" id="pernah_diklat_kepengawasan" class="form-check-input" value="1" {{ old('pernah_diklat_kepengawasan', $detail->pernah_diklat_kepengawasan ?? false) ? 'checked' : '' }}>
    <label for="pernah_diklat_kepengawasan" class="form-check-label">Pernah Diklat Kepengawasan</label>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" name="keahlian_braille" id="keahlian_braille" class="form-check-input" value="1" {{ old('keahlian_braille', $detail->keahlian_braille ?? false) ? 'checked' : '' }}>
    <label for="keahlian_braille" class="form-check-label">Keahlian Braille</label>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" name="keahlian_bahasa_isyarat" id="keahlian_bahasa_isyarat" class="form-check-input" value="1" {{ old('keahlian_bahasa_isyarat', $detail->keahlian_bahasa_isyarat ?? false) ? 'checked' : '' }}>
    <label for="keahlian_bahasa_isyarat" class="form-check-label">Keahlian Bahasa Isyarat</label>
</div>

<div class="mb-3">
    <label for="tanggal_cpns" class="form-label">Tanggal CPNS</label>
    <input type="date" name="tanggal_cpns" id="tanggal_cpns" class="form-control"
        value="{{ old('tanggal_cpns', $detail && $detail->tanggal_cpns ? Carbon::parse($detail->tanggal_cpns)->format('Y-m-d') : '') }}">
</div>

<div class="mb-3">
    <label for="sk_pengangkatan" class="form-label">SK Pengangkatan</label>
    <input type="text" name="sk_pengangkatan" id="sk_pengangkatan" class="form-control" value="{{ old('sk_pengangkatan', $detail->sk_pengangkatan ?? '') }}">
</div>

<div class="mb-3">
    <label for="tmt_pengangkatan" class="form-label">TMT Pengangkatan</label>
    <input type="date" name="tmt_pengangkatan" id="tmt_pengangkatan" class="form-control"
        value="{{ old('tmt_pengangkatan', $detail && $detail->tmt_pengangkatan ? Carbon::parse($detail->tmt_pengangkatan)->format('Y-m-d') : '') }}">
</div>

<div class="mb-3">
    <label for="lembaga_pengangkatan" class="form-label">Lembaga Pengangkatan</label>
    <input type="text" name="lembaga_pengangkatan" id="lembaga_pengangkatan" class="form-control" value="{{ old('lembaga_pengangkatan', $detail->lembaga_pengangkatan ?? '') }}">
</div>

<div class="mb-3">
    <label for="pangkat_golongan" class="form-label">Pangkat Golongan</label>
    <input type="text" name="pangkat_golongan" id="pangkat_golongan" class="form-control" value="{{ old('pangkat_golongan', $detail->pangkat_golongan ?? '') }}">
</div>

<div class="mb-3">
    <label for="sumber_gaji" class="form-label">Sumber Gaji</label>
    <input type="text" name="sumber_gaji" id="sumber_gaji" class="form-control" value="{{ old('sumber_gaji', $detail->sumber_gaji ?? '') }}">
</div>
