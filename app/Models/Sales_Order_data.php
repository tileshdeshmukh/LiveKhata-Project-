<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_Order_data extends Model
{
    use HasFactory;
    protected $table = 'sales_order_data';
    protected $fillable = [
      '*'         
    ];
  

}
