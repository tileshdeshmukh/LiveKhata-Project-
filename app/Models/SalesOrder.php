<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    protected $table = 'sales_order';

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
