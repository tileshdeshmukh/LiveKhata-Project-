<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Size extends Model
{
    protected $table = 'size';

    protected $fillable = [
        'size_name',      
    ];

    
    public static function getSize(){
        $records = DB::table('size')->select('id','size_name')->get()->toArray();
        return $records;
    }
}
