<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening_Balance_data extends Model
{
    use HasFactory;
    protected $table = 'opening_balance_data';
    protected $fillable = [
      '*'         
    ];

}
