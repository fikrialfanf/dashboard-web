@extends('dashboard.layouts')

@section('content')


	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa/tambah"> + Tambah Data Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $mhs)
		<tr>
			<td>{{ $mhs->mahasiswa_nama }}</td>
			
			<td>
				<a href="/mahasiswa/edit/{{ $mhs->mahasiswa_id }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $mhs->mahasiswa_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>
    
@endsection