<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Saudara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaudaraController extends Controller
{
    public function create()
    {
        return view('siswa.biodata.data-saudara-create');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        
        foreach ($request->nama as $key => $value) {
            Saudara::create([
                'users_id'      => $user_id,
                'nama'          => $value,
                'umur'          => $request->umur[$key],
                'pendidikan'    => $request->pendidikan[$key]
            ]);
        }
        return redirect()->route('proses-pendaftaran')->with('berhasil-kirim-biodata', 'Data berhasil di kirim');
    }

    public function edit()
    {
        $user_id = Auth::user()->id;
        $saudara = Saudara::where('users_id', $user_id)->get();

        return view('siswa.biodata.data-saudara-edit', compact('saudara'));
    }

    public function update(Request $request)
    {
        $user_id = Auth::user()->id;
        
        Saudara::where('users_id', $user_id)->delete();
        
        foreach ($request->nama as $key => $value) {
            Saudara::create([
                'users_id' => $user_id,
                'nama'     => $value,
                'umur'     => $request->umur[$key],
                'pendidikan' => $request->pendidikan[$key]
            ]);
        }

        return redirect()->route('proses-pendaftaran')->with('berhasil-update-biodata', 'Data berhasil di Update');
    }
}
