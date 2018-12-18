<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class RelawanLoginController extends Controller
{



    public function halamanLogin(){
    	return view('login');
    }

    public function halamanUtama(){
        return view('relawan');
    }

    public function login(Request $request){
        
    	// $relawan = User::all();

    	// foreach($relawan as $relawan){
    	// 	if($relawan->email == $request->email && $relawan->password == $request->password ){
     //            //session(['key' => $request->email]);
     //             session_start();
     //             $id = User::where('email', $request->email)->get();
     //             $_SESSION['user'] = $id;
    	// 		return redirect('/relawan');
    	// 	}
    	// }
        if (Auth::attempt(['email' => $request -> email, 'password' => $request -> password])) {
            session(['key' => $request->email]);
            return redirect('/relawan');
                    }
    	return redirect()->back()->with('alert','Email atau Password Salah !');



    }
}
