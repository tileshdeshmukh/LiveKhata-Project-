<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax_Invoice_data extends Model
{
    use HasFactory;
    protected $table = 'tax_invoice_data';
    protected $fillable = [
      '*'         
    ];
    
}
