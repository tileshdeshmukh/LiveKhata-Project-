<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortageStock extends Model
{
    protected $table = 'shortage_stock';

    protected $fillable = [
        'cmp_id',
        'Voucher_no',
        'billCreatedDate',      
        'dueDate',      
        'Service_Acc',      
        'Sales_Account',      
        'customer_name',      
        'bill_narration',      
        'mobile',      
        'totalBillQuantity',      
        'totalBillAmount',      
        
             
    ];

}
