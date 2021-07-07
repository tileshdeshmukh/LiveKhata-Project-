<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments_data extends Model
{
    use HasFactory;
    protected $table = 'payments_data';
    protected $fillable = [
      '*'         
    ];

}