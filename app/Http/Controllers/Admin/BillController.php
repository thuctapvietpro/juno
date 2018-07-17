<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Bills;
use App\Models\BillDetails;
use DB;
class BillController extends Controller
{
    /**
     * [ bills description]
     * @return \Illuminate\View\View
     */
    public function getBill()
    {
    	$data['oderslist'] = Bills::all();
    	$data['oderslist'] = DB::table('oders')->paginate(5);
    	return view('backend.bill',$data);
    }

    
    /**
     * description edit in the bill details
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function getEditBill($id)
    {
    	$arr['detaillist'] = BillDetails::find($id);
    	$data['prodlist'] = BillDetails::find($id)->checkProd->get();
    	//$data['prodlist'] = BillDetails::with('checkProd')->find($id)->get();
    	//$data['prodlist'] = BillDetails::with($id)->checkProd->get();
    	//dd($data);
    	//$aray['misses'] = BillDetails::find($id);
    	return view('backend.billdetail',$arr,$data);
    }

    /**
     * description delete in the bill
     * @param  $id;
     * @return \Illuminate\View\View
     */
    public function getDeleteBill($id)
    {
    	Bills::destroy($id);
    	return back();
    }
}
