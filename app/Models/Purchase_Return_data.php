<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_Return_data extends Model
{
    use HasFactory;
    protected $table = 'purchase_return_data';
    protected $fillable = [
      '*'         
    ];

}
