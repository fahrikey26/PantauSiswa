<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginCon extends Controller
{
    //

    public function loginForm()
    {
        return view('login');
    }

    public function loginCek(Request $request)
    {
        //Session::flash('username', $request->username);
        $datalogin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($datalogin)) {
            return redirect('/dashboard')->with('success', 'Berhasil Login!');;
        } else {
            return redirect('/pantausiswa')->withErrors('Login gagal, Username atau password salah!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/pantausiswa')->with('success', 'Berhasil Logout!');
    }
}
