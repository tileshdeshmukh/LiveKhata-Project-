<?php

namespace App\Imports;

use App\Models\Salesman;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class SalesmanImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new Salesman([

            'salesman_name' => $row['salesman_name'],
            'salesman_code' => $row['salesman_code'],
     
        ]);
    }
}
