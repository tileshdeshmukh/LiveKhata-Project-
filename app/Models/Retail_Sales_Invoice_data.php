<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retail_Sales_Invoice_data extends Model
{
    use HasFactory;
    protected $table = 'retail_sales_invoice_data';
    protected $fillable = [
      '*'         
    ];

}