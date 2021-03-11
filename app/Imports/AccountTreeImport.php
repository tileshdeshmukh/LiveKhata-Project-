<?php

namespace App\Imports;

use App\Models\AccountTree;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AccountTreeImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new AccountTree([

            'name' => $row['Name'],
            'type_account' => $row['Account'],
            'address1' => $row['address1'],
            'city' => $row['city'],
            'Adhar_No' => $row['Adhar_No'],
            'pin' => $row['pin'],
            'cont_person' => $row['cont_person'],
            'tel_no' => $row['tel_no'],     
            'mobile_no' => $row['mobile_no']    ,    
            'email' => $row['email']        ,
            'stateName' => $row['stateName']    ,
            'stateCode' => $row['stateCode']       , 
            'GSTIN' => $row['GSTIN']       ,
            'business_type' => $row['business_type']  ,  
            'pan' => $row['pan'],
            'gst_party_type' => $row['gst_party_type'],
            'acc_head_type' => $row['acc_head_type'],
            'gst_reg_type' => $row['gst_reg_type'],
            'Eligible_ITC' => $row['Eligible_ITC'],
            'invoice_type' => $row['invoice_type'],
            'bank_name' => $row['bank_name'],
            'bank_branch' => $row['bank_branch'],
            'bank_account_no' => $row['bank_account_no'],
            'ISFC_code' => $row['ISFC_code'],
            'swift_code' => $row['swift_code'],
            'TCS' => $row['TCS']
        ]);
    }
}
