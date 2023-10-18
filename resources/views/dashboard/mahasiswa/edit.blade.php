@extends('dashboard.layouts')

@section('content')
 

	<h3>Edit mahasiswa</h3>
 
	<a href="/dashboard/mahasiswa" class="btn btn-danger"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($mahasiswa as $mhs)
    <form id="contactForm" action="/dashboard/mahasiswa/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $mhs->id }}"> <br/>
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" type="text" placeholder="Nama" required="required" value="{{$mhs->nama}}" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="kota">kota</label>
            <input class="form-control" name="kota" type="text" placeholder="kota" required="required" value="{{$mhs->kota}}" />
         
        </div>
        <div class="mb-3">
            <label class="form-label" for="jurusan">jurusan</label>
            <input class="form-control" name="jurusan" type="text" placeholder="jurusan" required="required" value="{{$mhs->jurusan}}" />
           
        </div>
    
        <div class="d-grid">
            {{-- <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button> --}}
            <input type="submit" class="btn btn-primary" role="button" value="Simpan Data">
        </div>
    </form>
	{{-- <form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $mhs->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $mhs->nama}}"> <br/>
		Jabatan <input type="text" required="required" name="kota" value="{{ $mhs->kota }}"> <br/>
		Umur <input type="text" required="required" name="jurusan" value="{{ $mhs->jurusan }}"> <br/>
	
		<input type="submit" value="Simpan Data">
	</form> --}}
	@endforeach
		
 
</body>
</html>
    
@endsection