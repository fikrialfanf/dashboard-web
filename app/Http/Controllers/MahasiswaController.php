<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('dashboard.mahasiswa.data_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mahasiswa.tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table pegawai
	    DB::table('mahasiswa')->insert([
		    'nama' => $request->nama,
		    'kota' => $request->kota,
		    'jurusan' => $request->jurusan
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/dashboard/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
        return view('dashboard.mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
	    DB::table('mahasiswa')->where('id',$request->id)->update([
		    'nama' => $request->nama,
		    'kota' => $request->kota,
		    'jurusan' => $request->jurusan,
	    ]);
	
	    return redirect('/dashboard/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    DB::table('mahasiswa')->where('id',$id)->delete();
	    return redirect('/dashboard/mahasiswa');
    }
}
