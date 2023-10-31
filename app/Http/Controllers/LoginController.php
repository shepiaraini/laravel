<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Auth;

class LoginController extends Controller
{


    public function login (){
        return view('login.login'); 
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }    
        return redirect('/');
    }


    
    public function Registrasi (){
        return view('tools.register'); 
    }

   // public function HalamanPengguna (){
       // $pgn = User::where('delstatus','=',1)->latest()->get();
       // return view('hal_admin3.Pengguna',compact('pgn'));
   // }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->nama,
            'level' => 'notaris',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'delstatus' => true,
        ]);

        return redirect('/');

    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }
}