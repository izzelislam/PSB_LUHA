<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $credential= $request->only('no_telepon', 'password');

        $isLoginSuccess= Auth::attempt($credential);

        if ($isLoginSuccess){
            $role= Auth::user()->role;
            
            $check_role = [
                'superadmin' => '/home',
                'pendaftar'  => '/pendaftar/home'
            ];

            return redirect()->intended($check_role[$role]);
        }else {
            return redirect()->back()->with('gagal','No telepon atau password anda salah, silahkan hubunggi admin jika anda lupa!');
        }
    }
}
