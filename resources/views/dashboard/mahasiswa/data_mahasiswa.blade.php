@extends('dashboard.layouts')

@section('content')


	<h3>Data Mahasiswa</h3>
 
	<a href="/dashboard/mahasiswa/tambah" class="btn btn-primary" role="button"> + Tambah Data Baru</a>
	
	<br/>
	<br/>
	@if(isset($message))
		<p>{{ $message }}</p>
	@else
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>Kota</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $mhs)
		<tr>
			<td>{{ $mhs->nama }}</td>
			<td>{{ $mhs->kota }}</td>
			<td>{{ $mhs->jurusan }}</td>
			
			<td>
				<a href="/dashboard/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-secondary" >Edit</a>
				|
				<a href="/dashboard/mahasiswa/hapus/{{ $mhs->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 @endif
 
</body>
</html>
    
@endsection