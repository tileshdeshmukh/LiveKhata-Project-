<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_bill_data extends Model
{
    use HasFactory;
    protected $table = 'service_bill_data';
    protected $fillable = [
      '*'         
    ];

}
