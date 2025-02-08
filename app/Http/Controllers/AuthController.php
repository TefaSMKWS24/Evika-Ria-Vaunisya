<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function loginkasir(Request $request)
    {
if(Auth::guard('kasir')->attempt([
                           "nik" => $request->nis,
                          "password" => $request->password]))
    {
       dd('Auth: '.Auth::guard('kasir')->user());
    Log::info('Login successful');
    //return redirect()->intended('/dashboard');
}
else{
    echo "Login gagal";
    //return redirect('/user')->with('warning', 'NIS /password salah!');
    }
    }
public function logoutadmin()
{
    if(Auth::guard('kasir')->check()){
        Auth::guard('kasir')->logout();
        return redirect('/');
    }
 }
}
