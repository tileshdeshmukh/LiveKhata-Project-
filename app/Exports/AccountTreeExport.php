<?php

namespace App\Exports;

use App\Models\AccountTree;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AccountTreeExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'Name',        
        'Account Type',       
        'Address',        
        'City',
        'Adhar No',
        'Pin',
        'Cont Person',
        'Tel No',           
        'Mobile No',        
        'Email',        
        'State Name',           
        'State Code',        
        'GSTIN',       
        'Business Type',    
        'Pan',
        'GST Party Type',
        'Acc Head Type',
        'GST Reg Type',
        'Eligible ITC',
        'Invoice Type',
        'Bank Bame',
        'Bank Branch',
        'Bank Account No',
        'ISFC Code',
        'Swift Code',
        'TCS',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(AccountTree::getAccountTree());
    }
}
