<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit_Note_data extends Model
{
    use HasFactory;
    protected $table = 'credit_note_data';
    protected $fillable = [
      '*'         
    ];

}