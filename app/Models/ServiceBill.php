<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBill extends Model
{
    protected $table = 'service_bill';

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
