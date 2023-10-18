@extends('dashboard.layouts')

@section('content')


	<h3>Data mahasiswa</h3>
 
	<a href="/dashboard/mahasiswa" class="btn btn-danger" role="button">Kembali</a>
	
	<br/>
	<br/>
    <form id="contactForm" action="/dashboard/mahasiswa/store" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" type="text" placeholder="Nama" required="required" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="kota">kota</label>
            <input class="form-control" name="kota" type="text" placeholder="kota" required="required" />
         
        </div>
        <div class="mb-3">
            <label class="form-label" for="jurusan">jurusan</label>
            <input class="form-control" name="jurusan" type="text" placeholder="jurusan" required="required" />
           
        </div>
    
        <div class="d-grid">
            {{-- <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button> --}}
            <input type="submit" class="btn btn-primary" role="button" value="Simpan Data">
        </div>
    </form>
	{{-- <form action="/dashboard/mahasiswa/store" method="post">
        
		{{ csrf_field() }}
		<input class="form-label" type="text" name="nama" required="required" placeholder="nama"> <br/>
		<input type="text" name="kota" required="required" placeholder="kota"> <br/>
		<input type="text" name="jurusan" required="required" placeholder="jurusan"> <br/>
		<input type="submit" class="btn btn-primary" role="button" value="Simpan Data">
	</form> --}}
 
</body>
</html>
    
@endsection