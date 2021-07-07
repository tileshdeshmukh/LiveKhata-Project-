<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit_Note_data extends Model
{
    use HasFactory;
    protected $table = 'debit_note_data';
    protected $fillable = [
      '*'         
    ];

}
