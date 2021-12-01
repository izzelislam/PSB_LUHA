<?php

namespace App\Exports;

use App\Models\Biodata;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BiodataExport implements FromView, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct($data)
    {
        $this->type     = $data['type'];
        $this->biodata    = new Biodata();
    }

    public function view(): View
    {
        if ($this->type == 'smp'){
            $model = $this->biodata->whereHas('unit', fn($query) => $query->where('nama', 'SMP'));
            $type_santri = 'SMP';
        }
        
        if ($this->type == 'sma'){
            $model = $this->biodata->whereHas('unit', fn($query) => $query->where('nama', 'SMA/ULYA'));
            $type_santri = 'SMA';
        }

        $data['type']  = $type_santri; 
        $data['models']=$model->get();
        return view('admin.calon-santri.export-excel', $data);
    }
    

    public function headings():array
    {   
        return[
            'Nama',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'NISN',
            'Alamat',
            'Asal Sekolah',
        ];
    }
}