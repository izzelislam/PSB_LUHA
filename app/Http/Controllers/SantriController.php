<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\unit;
use App\Models\User;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $unit = unit::all();

        $first_unit = unit::first();
        $data = Biodata::with(['user', 'unit']);

        // dd($data);

        if (request('unit_id') == null && count($data->get()) > 0){
           $data = $data->where('unit_id',$first_unit->id);
        }

        if (request()->unit_id != null){
           $data = $data->where('unit_id',request('unit_id'));
        }

        $data = $data->get();

        return view('admin.calon-santri.index', compact('data', 'unit'));
    }

    public function show($id)
    {
        $biodata = User::where('id', $id)->with([
            'biodata.unit', 'ayah.agama', 'ibu.agama', 'wali', 'saudara'
        ])->first();

        return view('admin.calon-santri.detail-santri', compact('biodata'));
    }
}
