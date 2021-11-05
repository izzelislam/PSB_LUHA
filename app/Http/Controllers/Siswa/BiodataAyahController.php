<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use App\Models\Ayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataAyahController extends Controller
{
    public function create()
    {
        $agama = Agama::all();
        return view('siswa.biodata.data-ayah-create', compact('agama'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'users_id' => Auth::user()->id
        ]);

        Ayah::create($request->all());
        return redirect()->route('proses-pendaftaran')->with('berhasil-kirim-biodata', 'Data berhasil di kirim');
    }

    public function edit()
    {
        $user_id = Auth::user()->id;

        $agama   = Agama::all();
        $ayah    = Ayah::where('users_id', $user_id)->with('agama')->first();

        return view('siswa.biodata.data-ayah-edit', compact('agama', 'ayah'));
    }

    public function update(Request $request, $id)
    {
        $ayah = Ayah::findOrFail($id);
        $ayah->update($request->all());

        return redirect()->route('proses-pendaftaran')->with('berhasil-update-biodata', 'Data berhasil di Update');
    }
}
