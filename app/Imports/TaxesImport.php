<?php

namespace App\Imports;

use App\Models\Taxes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class TaxesImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new Taxes([

            'name' => $row['name'],
            'CGST' => $row['CGST'],
            'SGST' => $row['SGST'],
            'IGST' => $row['IGST'],
            'Cess' => $row['Cess'],
            'GST' => $row['GST'],            
            'incl_rate' => $row['incl_rate'],
        ]);
    }
}
