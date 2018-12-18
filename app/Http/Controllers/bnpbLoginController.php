<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bnpb;
class bnpbLoginController extends Controller
{
    
    public function halamanLogin(){
    	return view('loginBnpb');
    }
 public function halamanUtama(){
        return view('bnpb');
    }

    public function login(Request $request){
    	$bnpb = bnpb::all();

    	foreach($bnpb as $bnpb){
    		if($bnpb->email == $request->email && $bnpb->password == $request->password ){
    			return redirect('/homeBnpb');
    		}
    	}
    	return redirect()->back()->with('alert','Email atau Password Salah !');
    }
}

