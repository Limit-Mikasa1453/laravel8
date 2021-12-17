<?php

namespace App\Exports;

use App\Models\ModelSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSiswa implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelSiswa::all();
    }
}
