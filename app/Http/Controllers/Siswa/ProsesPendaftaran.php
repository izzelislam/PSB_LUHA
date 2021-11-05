<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Persyaratan;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProsesPendaftaran extends Controller
{
    public function index()
    {
        $user_looged_in = Auth::user();

        $pembayaran = User::where('id', $user_looged_in->id)->with('pembayaran')->first();
        
        $biodata    = User::where('id', $user_looged_in->id)->with(['biodata','ayah', 'ibu','wali', 'saudara', 'document'])->first();

        $setting    = Setting::all();

        $persyaratan = Persyaratan::all();

        $document   = User::where('id', Auth::user()->id)->with('document')->first();

        // dd($biodata->toArray());

        return view('siswa.proses_pendaftaran.index', compact('pembayaran', 'biodata', 'persyaratan', 'setting', 'document'));
    }
}
