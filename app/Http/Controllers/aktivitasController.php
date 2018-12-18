<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aktivitas;
use DB;
use App\relawanaktivitas;
use Auth;

class aktivitasController extends Controller
{
	public function index()
	{
		$aktivitas = DB::table('aktivitas')->orderBy('aktivitas.id','desc')->get();
		return view('aktivitas',compact('aktivitas'));
	}

    public function show($id){
        $aktivitas = relawanaktivitas::where('aktivitas_id',$id)->get();
        return view('lihat_aktivitas',compact('aktivitas'));
    }


     public function daftaraktivitas(Request $request)
    {
        $id=Auth::user()->id;
        $relawan = new relawanaktivitas();
        $relawan->aktivitas_id = $request->aktivitas_id;
        $relawan->user_id = $id;
        $relawan->save();
        return redirect('/relawanAktivitas');
    }

    public function relawanAktivitas()
    {  
        $aktivitas = DB::table('aktivitas')->orderBy('aktivitas.id','desc')->get();
        return view('relawanAktivitas',compact('aktivitas'));

    }


    public function edit($id)
    {
        $aktivitas = Aktivitas::find($id);
        return view('editAktivitas',compact('aktivitas'));
    }

    public function update(Aktivitas $aktivitas)
    {
        $aktivitas->update([
        'nama_kegiatan' => request('nama'),
        'jenis_kegiatan' => request('jenis_kegiatan'),
        'tanggal' => request('tanggal'),
        'deskripsi_kegiatan' => request('deskripsi'),
        'lokasi_kegiatan' => request('lokasi_kegiatan')
        
            ]);

        return redirect('/aktivitas');
    }

    public function store(Request $request)
    {
    	$aktivitas = new Aktivitas();
    	$aktivitas->nama_kegiatan = $request->nama;
    	$aktivitas->jenis_kegiatan = $request->jenis_kegiatan;
    	$aktivitas->tanggal = $request->tanggal;
    	$aktivitas->deskripsi_kegiatan = $request->deskripsi;
    	$aktivitas->lokasi_kegiatan = $request->lokasi_kegiatan;
    	$aktivitas->save();
    	return redirect('/aktivitas');
    }
     public function destroy($id)
   {

        $aktivitas = DB::table('aktivitas')->where('id',$id)->delete();
            return redirect('/aktivitas');
   }
}
