<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Taxes extends Model
{
    protected $table = 'taxes';

    protected $fillable = [
        'id',
        'name',
        'CGST',
        'SGST',
        'IGST',
        'Cess',
        'GST',
        'incl_rate',
        'cmp_id'
    ];

    public static function getTaxes(){
        $records = DB::table('taxes')->select('id','name','CGST',
        'SGST',
        'IGST',
        'Cess',
        'GST',
        'incl_rate')->get()->toArray();
        return $records;
    }
 

}
