<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');

        // $this->middleware('guest')->only(['login', 'logisProccess']);
        // $this->middleware('auth')->only('logout');
    }

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
                'superadmin' => '/superadmin/home',
                'pendaftar'  => '/pendaftar/home'
            ];

            return redirect()->intended($check_role[$role]);
        }else {
            return redirect()->back()->with('gagal','No telepon atau password anda salah, silahkan hubunggi admin jika anda lupa!');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProses(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|unique:users',
            'no_telepon' => 'required|unique:users',
            'password' => 'required'
        ]);
        
        $password = Hash::make($request->password);

        $request->merge([
            'role' => 'pendaftar',
            'password' => $password
        ]);
        
        $submited = User::create($request->all());

        if ($submited){
            return redirect()->route('login')->with('sukses','Selamat anda berhasil mendaftar silahkan login untuk memulai pendaftaran santri.');
        }else{
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
