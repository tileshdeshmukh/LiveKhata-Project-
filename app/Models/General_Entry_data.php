<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_Entry_data extends Model
{
    use HasFactory;
     protected $table = 'general_entry_data';

    protected $fillable = [
        '*',
    ];
}
