@extends('layouts.app')

@section('title', 'Input SPP')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form SPP</h1>
            </div>

            <div class="container">
                <form method="GET" action="{{ route('spp.form') }}">
                    <div class="form-group">
                        <label class="font-weight-bold" for="nipd">Masukkan NIPD</label>
                        <input type="text" name="nipd" id="nipd"
                            class="form-control @error('nipd') is-invalid @enderror" placeholder="Contoh: 12345678"
                            value="{{ old('nipd') }}" required>
                        @error('nipd')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info">Cari Siswa</button>
                </form>


                @if ($siswa)
                    <hr>
                    <form method="POST" action="{{ route('spp.store') }}" enctype="multipart/form-data">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Terjadi kesalahan:</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @csrf
                        <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Siswa</label>
                            <input type="text" class="form-control" value="{{ $siswa->nama }}" readonly>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kelas</label>
                            <input type="text" class="form-control" value="{{ $siswa->kelas->nama }}" readonly>
                        </div>

                        <input type="hidden" name="tahun_ajar_id" value="{{ $tahun_ajar->id }}">

                        <div class="form-group">
                            <label class="font-weight-bold">Tahun Ajar</label>
                            <input type="text" class="form-control"
                                value="{{ $tahun_ajar->nama_tahun_ajar }}" readonly>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Bayar</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Bukti Pembayaran</label>
                            <div class="custom-file">
                                <input type="file" name="bukti_pembayaran" class="custom-file-input"
                                    id="buktiPembayaranInput" required>
                                <label class="custom-file-label" for="buktiPembayaranInput">Pilih file gambar...</label>
                            </div>
                            <small class="form-text text-muted mt-2">Format gambar: JPG, PNG, atau PDF. Maksimal
                                2MB.</small>
                            <div id="previewContainer" class="mt-3 d-none">
                                <p class="mb-1">Preview:</p>
                                <img id="previewImage" src="#" alt="Preview" class="img-thumbnail"
                                    style="max-height: 200px;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                @endif
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelector('#buktiPembayaranInput').addEventListener('change', function(e) {
            const fileName = this.files[0].name;
            const label = this.nextElementSibling;
            label.innerText = fileName;

            const file = this.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewContainer = document.getElementById('previewContainer');
                    const previewImage = document.getElementById('previewImage');
                    previewContainer.classList.remove('d-none');
                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush
