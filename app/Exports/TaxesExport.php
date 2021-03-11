<?php

namespace App\Exports;

use App\Models\Taxes;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TaxesExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'Sr No',
            'Name',
        'CGST',
        'SGST',
        'IGST',
        'Cess',
        'GST',
        'IncL Rate'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Taxes::getTaxes());
    }
}
