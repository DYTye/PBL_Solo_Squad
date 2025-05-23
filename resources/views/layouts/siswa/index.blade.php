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
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr onclick="window.location='{{ route('siswadetail.show', $siswa->id) }}'"
                                    style="cursor:pointer;">


                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->nipd }}</td>
                                    <td>{{ $siswa->kelamin }}</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                    <td>{{ $siswa->tanggal_lahir }}</td>
                                    <td>{{ $siswa->kelas->nama }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('siswa.edit', $siswa->id) }}"><button
                                                    class="btn btn-warning">edit
                                                </button></a>

                                            <form action="" method="POST"
                                                onsubmit="return confim('yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')

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
