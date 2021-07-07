<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Brand extends Model
{
    protected $table = 'brand';

    protected $fillable = [
        
        'brand_name',      
        'product_id',
        'cmp_id',
    ];

    public static function getBrand(){
        $records = DB::table('brand')->select('id','brand_name')->get()->toArray();
        return $records;
    }
}
