<div class="form-group">
    <label>Jalan</label>
    <input type="text" name="jalan" class="form-control" value="{{ old('jalan', $alamat->jalan ?? '') }}">
</div>
<div class="form-group">
    <label>RT</label>
    <input type="text" name="rt" class="form-control" value="{{ old('rt', $alamat->rt ?? '') }}">
</div>
<div class="form-group">
    <label>RW</label>
    <input type="text" name="rw" class="form-control" value="{{ old('rw', $alamat->rw ?? '') }}">
</div>
<div class="form-group">
    <label>Nama Dusun</label>
    <input type="text" name="nama_dusun" class="form-control" value="{{ old('nama_dusun', $alamat->nama_dusun ?? '') }}">
</div>
<div class="form-group">
    <label>Desa/Kelurahan</label>
    <input type="text" name="desa_kelurahan" class="form-control" value="{{ old('desa_kelurahan', $alamat->desa_kelurahan ?? '') }}">
</div>
<div class="form-group">
    <label>Kecamatan</label>
    <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan', $alamat->kecamatan ?? '') }}">
</div>
<div class="form-group">
    <label>Kode Pos</label>
    <input type="text" name="kode_pos" class="form-control" value="{{ old('kode_pos', $alamat->kode_pos ?? '') }}">
</div>
