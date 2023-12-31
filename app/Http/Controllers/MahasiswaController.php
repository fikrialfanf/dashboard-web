<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MahasiswaController extends Controller
{
   
    public function index()
    {
        //query builder
        // $mahasiswa = DB::table('mahasiswa')->get();
        // return view('dashboard.mahasiswa.data_mahasiswa', ['mahasiswa' => $mahasiswa]);

        //eloquent
        $mahasiswa = Mahasiswa::all();

        if ($mahasiswa->isEmpty()) {
            $message = "Tidak ada data.";
            return view('dashboard.mahasiswa.data_mahasiswa', compact('message'));
        } else {
            return view('dashboard.mahasiswa.data_mahasiswa', ['mahasiswa' => $mahasiswa]);
        }
    }

    public function create()
    {
        return view('dashboard.mahasiswa.tambah_data');
    }

    public function store(Request $request)
    {
	    DB::table('mahasiswa')->insert([
		    'nama' => $request->nama,
		    'kota' => $request->kota,
		    'jurusan' => $request->jurusan
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/dashboard/mahasiswa');
    }


    public function show($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
        return view('dashboard.mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

 
    public function update(Request $request)
    {
        
	    DB::table('mahasiswa')->where('id',$request->id)->update([
		    'nama' => $request->nama,
		    'kota' => $request->kota,
		    'jurusan' => $request->jurusan,
	    ]);
	
	    return redirect('/dashboard/mahasiswa');
    }


    public function destroy($id)
    {
	    DB::table('mahasiswa')->where('id',$id)->delete();
	    return redirect('/dashboard/mahasiswa');
    }
}
