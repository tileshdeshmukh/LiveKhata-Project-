<?php

namespace App\Imports;

use App\Models\Size;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class SizeImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new Size([

            'size_name' => $row['size_name'],
     
        ]);
    }
}
