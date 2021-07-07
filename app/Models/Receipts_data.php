<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipts_data extends Model
{
    use HasFactory;
    protected $table = 'receipts_data';
    protected $fillable = [
      '*'         
    ];

}