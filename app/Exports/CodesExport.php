<?php

namespace App\Exports;

use App\Codes;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CodesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Codes::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Código',
            'Código FME',
            'Nombre FME',
            'Código DORMAN',
            'Nombre DORMAN',
            'Creado',
            'Actualizado'
        ];
    }

}
