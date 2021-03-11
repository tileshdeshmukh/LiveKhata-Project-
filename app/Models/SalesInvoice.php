<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{
    protected $table = 'sales_invoice';

    protected $fillable = [
        
        'sales_account',
        'date',
        'customer',
        'narration',
        'loading_No',
        'Taxes',
        'Item',
        'Description',
        'Quantity',
        'MRP',
        'Gross'
    ];

}
