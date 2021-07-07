<?php

namespace App\Http\Controllers;
use App\Models\AccountTree;
use App\Models\AccountTreeGroup;
use App\Models\ProductTree;

use Illuminate\Http\Request;

class AccountTreeSearchController extends Controller
{
    public function accountTreeSearch()
    {
        $searchbtn = $_GET['Sbtn'];

        $data['search_account'] = AccountTree::where('name','LIKE','%'.$searchbtn.'%')->orWhere('mobile_no','LIKE','%'.$searchbtn.'%')->get();
        $data['group_list'] =  AccountTreeGroup::all();

        return view('account_search_tree',$data);
        
    }

    public function product_search()
    {
         $searchbtn = $_GET['Sbtn'];

        $data['product'] = ProductTree::where('itemname','LIKE','%'.$searchbtn.'%')->orWhere('itemcode','LIKE','%'.$searchbtn.'%')->get();
        // $data['group_list'] =  AccountTreeGroup::all();

        return view('product_search',$data);
        
    }
}
