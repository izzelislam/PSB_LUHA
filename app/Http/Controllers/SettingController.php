<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        return view('admin.setting.index', compact('setting'));
    }

    public function saveWa(Request $request)
    {
       $setting_old = Setting::all();

       if ($setting_old){
            Setting::truncate();
       }

       $saved =  Setting::create($request->all());

       if ($saved) {
           return redirect()->back()->with('sukses', 'berhasil simpan perubahan');
       } else {
           return redirect()->back()->with('gagal', 'gagal simpan perubahan');
       }
    }
}
