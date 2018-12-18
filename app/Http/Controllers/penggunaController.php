<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;
class penggunaController extends Controller
{
        public function register(Request $request)
    {
    	$pengguna = new pengguna();
    	$pengguna->nama_depan = $request->first_name;
    	$pengguna->nama_belakang = $request->last_name;
    	$pengguna->jenis_kelamin = $request->kelamin;
    	$pengguna->username = $request->username;
    	$pengguna->email = $request->email;
    	$pengguna->Alamat = $request->address;
    		$pengguna->telpon = $request->phone;
    			$pengguna->provinsi= $request->district;
    				$pengguna->kabupaten = $request->kabupaten;
    					$pengguna->kode_pos = $request->zipcode;
    						$pengguna->password =bcrypt( $request->password);
    	$pengguna->save();
    	return redirect('/loginRelawan');
    }

}
