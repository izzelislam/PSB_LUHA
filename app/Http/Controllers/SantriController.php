<?php

namespace App\Http\Controllers;

use App\Exports\BiodataExport;
use App\Models\Biodata;
use App\Models\unit;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;

class SantriController extends Controller
{
    public function index()
    {
        $data['smp'] = Biodata::wherehas('unit', fn($query) => $query->where('nama', 'SMP'))->with(['user', 'unit'])->get();
        $data['sma'] = Biodata::wherehas('unit', fn($query) => $query->where('nama', 'SMA/ULYA'))->with(['user', 'unit'])->get();

        return view('admin.calon-santri.index', $data);
    }

    public function show($id)
    {
        $biodata = User::where('id', $id)->with([
            'biodata.unit', 'ayah.agama', 'ibu.agama', 'wali', 'saudara'
        ])->first();

        return view('admin.calon-santri.detail-santri', compact('biodata'));
    }

    public function exportExcel()
    {
        $data['type'] = request('type');
        return Excel::download(new BiodataExport($data), 'data calon santri'.$data['type'].'.xlsx');
    }

    public function exportPdf($id)
    {
        
        $data['biodata'] = User::where('id', $id)->with([
            'biodata.unit', 'ayah.agama', 'ibu.agama', 'wali', 'saudara'
        ])->first();

        $pdf = PDF::loadView('admin.calon-santri.export-pdf', $data);
        return $pdf->stream($data['biodata']->name.'.pdf');
    }
}
