<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    function tampilRegister(){
        return view('register');
    }
    function submitRegister(Request $request) { 
        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        return redirect()->route('login.tampil');
    }
    function tampilLogin(){
        return view('login');
    }
    function submitLogin(Request $request) {
        $data = $request->only('email','password');

        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('/dashboard');
        } else {
            return redirect()->back()->with('Gagal', 'Email atau Password Anda Salah');
        }
    }
}

