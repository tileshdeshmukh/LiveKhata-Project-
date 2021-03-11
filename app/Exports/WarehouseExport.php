<?php

namespace App\Exports;

use App\Models\Warehouse;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WarehouseExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'Sr No',
            'Warehouse Name',      
        'Warehouse Code',   
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Warehouse::getWarehouse());
    }
}
