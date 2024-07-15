@extends('layouts.app')
@section('content')
<div class="container"> 
<h3>Lihat Data Mahasiswa</h3>
	@csrf
		<table>
			<tr>
				<td>NIM</td>
				<td>{{ $row->mhsw_nim }}</td>
			</tr>
			<tr>
				<td>NAMA</td><td>{{ $row->mhsw_nama }}</td>
			</tr>
			<tr>
				<td>JURUSAN</td><td>{{ $row->mhsw_jurusan }}</td>
			</tr>
			<tr>
				<td>ALAMAT</td><td>{{ $row->mhsw_alamat }}</td>
			</tr>
		</table>
</div>
@endsection