<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AccountTree extends Model
{
    // use HasFactory;

    protected $table = "account_trees";

    protected $fillable = [
        'name',        
        'type_account',       
        'address1',        
        'city',
        'Adhar_No',
        'pin',
        'cont_person',
        'tel_no',           
        'mobile_no',        
        'email',        
        'stateName',           
        'stateCode',        
        'GSTIN',       
        'business_type',    
        'pan',
        'gst_party_type',
        'acc_head_type',
        'gst_reg_type',
        'Eligible_ITC',
        'invoice_type',
        'bank_name',
        'bank_branch',
        'bank_account_no',
        'ISFC_code',
        'swift_code',
        'TCS',
        'group_id',
        'cmpUserId'
       
    ];

    public static function getAccountTree(){
        
        $records = DB::table('account_trees')->select('name','type_account','address1','city','Adhar_No','pin','cont_person','tel_no','mobile_no','email','stateName','stateCode','GSTIN','business_type','pan','gst_party_type','acc_head_type','gst_reg_type','Eligible_ITC','invoice_type','bank_name','bank_branch','bank_account_no','ISFC_code','swift_code','TCS')->get()->toArray();
        return $records;
    }
}
