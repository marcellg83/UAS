@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Daftar Mahasiswa <a href="{{ url('mahasiswa/create') }}" class="btn btn-primary btn-sm">Tambah Data</a></h3>

    <form class="form" method="get" action="{{ route('search') }}">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" id="search" placeholder="Masukkan keyword">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>ALAMAT</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
                <tr>
                    <td>{{ $row->mhsw_nim }}</td>
                    <td>{{ $row->mhsw_nama }}</td>
                    <td>{{ $row->mhsw_jurusan }}</td>
                    <td>{{ $row->mhsw_alamat }}</td>
                    <td>
                        <a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('mahasiswa/' . $row->mhsw_id . '/lihat') }}" class="btn btn-sm btn-info">Lihat</a>
                        <form action="{{ url('mahasiswa/' . $row->mhsw_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection