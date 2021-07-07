<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductTreeGroup extends Model
{
    // use HasFactory;

    protected $table = "product_treesgroup";

    protected $fillable = [
        'groupname',           
        'cmp_id',           
    ];    
}
