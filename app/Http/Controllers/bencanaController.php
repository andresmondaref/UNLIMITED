<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bencana;
use App\relawanbencana;
use App\relawanaktivitas;
use DB;
use Auth;

class bencanaController extends Controller
{
  
	public function index()
	{
		$bencana = DB::table('bencana')->orderBy('bencana.id','desc')->get();
		return view('bencana',compact('bencana'));
	}

    public function show($id){
        $bencana = relawanbencana::where('bencana_id',$id)->get();
        return view('lihat_bencana',compact('bencana'));
    }

    public function daftarbencana(Request $request)
    {
        $id=Auth::user()->id;
        $relawan = new relawanBencana();
        $relawan->bencana_id = $request->bencana_id;
        $relawan->user_id = $id;
        $relawan->save();
        return redirect('/relawanBencana');
    }

    public function relawanBencana()
{
         $bencana = DB::table('bencana')->orderBy('bencana.id','desc')->get();
        return view('relawanBencana',compact('bencana'));

}
    public function edit($id)
    {
        $bencana = Bencana::find($id);
        return view('editBencana',compact('bencana'));
    }

    public function update(Bencana $bencana)
    {
      
        $bencana->update([
        'nama_bencana' => request('nama'),
        'tanggal' => request('tanggal'),
        'jumlah_relawan' => request('jumlah_relawan'),
        'deskripsi' => request('deskripsi'),
        'lokasi_bencana' => request('lokasi_bencana')
        
            ]);

        return redirect('/bencana');
    }

    public function store(Request $request)
    {
    	$bencana = new Bencana();
    	$bencana->nama_bencana = $request->nama;
    	$bencana->tanggal = $request->tanggal;
    	$bencana->jumlah_relawan = $request->jumlah_relawan;
    	$bencana->deskripsi = $request->deskripsi;
    	$bencana->lokasi_bencana = $request->lokasi_bencana;
    	$bencana->save();
    	return redirect('/bencana');
    }
     public function destroy($id)
   {

        $bencana = DB::table('bencana')->where('id',$id)->delete();
            return redirect('/bencana');
   }
}
