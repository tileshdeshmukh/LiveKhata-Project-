<?php

namespace App\Exports;

use App\Models\Size;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SizeExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'Sr No',
            'Size Name',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Size::getSize());
    }
}
