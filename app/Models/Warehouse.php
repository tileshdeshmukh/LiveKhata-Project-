<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Warehouse extends Model
{
    protected $table = 'warehouse';

    protected $fillable = [
        'warehouse_name',      
        'warehouse_code',      
    ];

    public static function getWarehouse(){
        $records = DB::table('warehouse')->select('id','warehouse_name',      
        'warehouse_code', )->get()->toArray();
        return $records;
    }

}
