<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProductTree extends Model
{
    protected $table = 'product_trees';

    protected $fillable = [
        'itemname',
        'itemcode',
        'description',
        'unit',
        'hsn_sac',
        'Selling_Rate',
        'Buying_Rate',        
        'item_type',
        'product_category',
        'gst_unit'   ,
        'Taxes'   ,
        'INCL'   ,
        'Brand_Name'   ,
        'Size'   ,
        'group_id'   ,
        'cmpUserId'   ,
    ];

    public static function getProductTree(){
        $records = DB::table('product_trees')->select('itemname','itemcode','description','unit','hsn_sac','Selling_Rate',
        'Buying_Rate',        
        'item_type',
        'product_category',
        'gst_unit'   ,
        'Taxes'   ,
        'INCL'   ,
        'Brand_Name'   ,
        'Size'   ,)->get()->toArray();
        return $records;
    }
  

}
