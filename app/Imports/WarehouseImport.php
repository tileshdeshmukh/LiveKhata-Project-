<?php

namespace App\Imports;

use App\Models\Warehouse;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class WarehouseImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new Warehouse([

            'warehouse_name' => $row['warehouse_name'],
            'warehouse_code' => $row['warehouse_code'],
     
        ]);
    }
}
