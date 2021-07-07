<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PettyCash_data extends Model
{
    use HasFactory;
    protected $table = 'pettyCash_data';
    protected $fillable = [
      '*'         
    ];

}