<?php

namespace App\Imports;

use App\Models\ProductTree;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ProductTreeImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new ProductTree([

            'itemname' => $row['itemname'],
            'itemcode' => $row['itemcode'],
            'description' => $row['description'],
            'unit' => $row['unit'],
            'hsn_sac' => $row['hsn_sac'],
            'Selling_Rate' => $row['Selling_Rate'],            
            'Buying_Rate' => $row['Buying_Rate'],
            'item_type' => $row['item_type'],
            'product_category' => $row['product_category'],
            'gst_unit' => $row['gst_unit'],
            'Taxes' => $row['Taxes'],
            'INCL' => $row['INCL'],
            'Brand_Name' => $row['Brand_Name'],
            'Size' => $row['Size']
            
     
        ]);
    }
}
