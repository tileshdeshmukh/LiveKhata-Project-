<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Salesman extends Model
{
    protected $table = 'salesman';

    protected $fillable = [
        'salesman_name',      
        'salesman_code',      
    ];

    public static function getSalesman(){
        $records = DB::table('salesman')->select('id',  'salesman_name',      
        'salesman_code',  )->get()->toArray();
        return $records;
    }
}
