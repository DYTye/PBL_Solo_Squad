@extends('layouts.app')

@section('title', 'Table Example')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Siswa</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Data siswa</h2>
                <p class="section-lead">
                    This page is an example of using a table.
                </p>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>nipd</th>
                                <th>kelamin</th>
                                <th>tempat_lahir</th>
                                <th>tanggal_lahir</th>
                                <th>kelas</th>
                                <th>agama</th>
                                <th>id_ibu</th>
                                <th>kebutuhan_khusus</th>
                                <th>sekolah_asal</th>
                                <th>aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td>{{ $siswa->kelas }}</td>
                                    <td>{{ $siswa->tanggal_lahir }}</td>
                                    <td>{{ $siswa->alamat }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('siswa.edit', $siswa->id) }}"><button
                                                    class="btn btn-warning ">edit
                                                </button></a>

                                            <form action="" method="POST"
                                                onsubmit="return confim('yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('siswa.destroy', $siswa->id) }}"><button
                                                        class="btn btn-danger ">Hapus</button></a>
                                            </form>
                                        </div>
                                    </td>
                            @endforeach
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
@endpush
