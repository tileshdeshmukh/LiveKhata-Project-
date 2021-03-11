<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    protected $table = 'department';

    protected $fillable = [
        'department_name',      
        'department_code',      
    ];

    public static function getDepartment(){
        $records = DB::table('department')->select('id', 'department_name',      
        'department_code',  )->get()->toArray();
        return $records;
    }
}
