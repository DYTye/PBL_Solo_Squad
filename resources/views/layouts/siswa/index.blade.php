@extends('layouts.app')

@section('title', 'Table siswa')

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
                                {{-- <th>No</th> --}}
                                <th>Nama</th>
                                <th>NIPD</th>
                                <th>Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Kelas</th>
                                <th>Agama</th>
                                <th>id_ibu</th>
                                <th>Kebutuhan Khusus</th>
                                <th>Sekolah Asal</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                            <tr onclick="window.location='{{ route('siswadetail.show', $siswa->id) }}'" style="cursor:pointer;">


                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->nipd }}</td>
                                    <td>{{ $siswa->kelamin }}</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                    <td>{{ $siswa->tanggal_lahir }}</td>
                                    <td>{{ $siswa->kelas }}</td>
                                    <td>{{ $siswa->agama }}</td>
                                    <td>{{ $siswa->orangtua_id }}</td>
                                    <td>{{ $siswa->kebutuhan_khusus }}</td>
                                    <td>{{ $siswa->sekolah_asal }}</td>
 
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('siswa.edit', $siswa->id) }}"><button
                                                    class="btn btn-warning">edit
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
