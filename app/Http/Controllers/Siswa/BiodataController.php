<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $biodata = User::where('id', $user_id)->with([
            'biodata.unit',
            'ayah.agama',
            'ibu.agama',
            'wali',
            'saudara'
        ])->first();
        return view('siswa.biodata.index', compact('biodata'));
    }

    public function createBiodataDiri()
    {
        $unit = unit::all();
        return view('siswa.biodata.data-diri-create', compact('unit'));
    }

    public function storeBiodataDiri(Request $request)
    {
        $request->merge([
            'users_id' => Auth::user()->id
        ]);

        Biodata::create($request->all());
        return redirect()->route('proses-pendaftaran')->with('berhasil-kirim-biodata', 'Data berhasil di kirim');
    }

    public function editBiodataDiri()
    {
        $data    = User::where('id', Auth::user()->id)->with('biodata')->first();
        $id      = $data->biodata->id; 
        
        $unit    = unit::all();
        $biodata = Biodata::where('id',$id)->with('unit')->first();


        return view('siswa.biodata.data-diri-update', compact('biodata', 'unit'));
    }

    public function updateBiodataDiri(Request $request, $id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->update($request->all());
        
        return redirect()->route('proses-pendaftaran')->with('berhasil-update-biodata', 'Data berhasil di Update');
    }
}
