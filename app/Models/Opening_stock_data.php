<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening_stock_data extends Model
{
    use HasFactory;
    protected $table = 'opening_stock_data';
    protected $fillable = [
      '*'         
    ];

}
