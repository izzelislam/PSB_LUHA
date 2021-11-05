<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use App\Models\Ibu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataIbuController extends Controller
{
    public function create()
    {
        $agama = Agama::all();
        return view('siswa.biodata.data-ibu-create', compact('agama'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'users_id' => Auth::user()->id
        ]);

        Ibu::create($request->all());
        return redirect()->route('proses-pendaftaran')->with('berhasil-kirim-biodata', 'Data berhasil di kirim');
    }

    public function edit()
    {
        $user_id = Auth::user()->id;

        $agama   = Agama::all();
        $ayah    = Ibu::where('users_id', $user_id)->with('agama')->first();

        return view('siswa.biodata.data-ibu-edit', compact('agama', 'ayah'));
    }

    public function update(Request $request, $id)
    {
        $ayah = Ibu::findOrFail($id);
        $ayah->update($request->all());

        return redirect()->route('proses-pendaftaran')->with('berhasil-update-biodata', 'Data berhasil di Update');
    }
}
