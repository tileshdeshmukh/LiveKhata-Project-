<?php

namespace App\Imports;

use App\Models\Brand;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BrandImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new Brand([

            'brand_name' => $row['brand_name'],  
                           
        ]);
    }
}
