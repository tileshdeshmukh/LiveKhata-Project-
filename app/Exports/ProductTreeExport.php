<?php

namespace App\Exports;

use App\Models\ProductTree;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductTreeExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'Item Name',
            'Item Code',
            'Description',
            'Unit',
            'HSN SAC',
            'Selling Rate',
            'Buying Rate',        
            'Item Type',
            'Product Category',
            'GST Unit'   ,
            'Taxes'   ,
            'INCL'   ,
            'Brand Name'   ,
            'Size'   ,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(ProductTree::getProductTree());
    }
}
