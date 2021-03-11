<?php

namespace App\Exports;

use App\Models\Salesman;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SalesmanExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'Sr No',
            'Salesman Name',      
            'Salesman Code',    
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Salesman::getSalesman());
    }
}
