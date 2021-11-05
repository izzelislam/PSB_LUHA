<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Wali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaliController extends Controller
{
    public function create()
    {
        return view('siswa.biodata.data-wali-create');
    }

    public function store(Request $request)
    {
        $request->merge([
            'users_id' => Auth::user()->id
        ]);

        Wali::create($request->all());
        return redirect()->route('proses-pendaftaran')->with('berhasil-kirim-biodata', 'Data berhasil di kirim');
    }

    public function edit()
    {
        $user_id = Auth::user()->id;

        $wali    = Wali::where('users_id', $user_id)->first();

        return view('siswa.biodata.data-wali-edit', compact('wali'));
    }

    public function update(Request $request, $id)
    {
        $wali = Wali::findOrFail($id);
        $wali->update($request->all());

        return redirect()->route('proses-pendaftaran')->with('berhasil-update-biodata', 'Data berhasil di Update');
    }
}
