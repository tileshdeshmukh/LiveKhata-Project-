<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AccountTreeGroup extends Model
{
    // use HasFactory;

    protected $table = "account_treesgroup";

    protected $fillable = [
        'groupname',           
        'cmp_id',

    ];    
}
