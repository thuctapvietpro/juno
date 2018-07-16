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
     * Đổ dữ liệu đơn hàng ra ngoài view
     * @param App\Models\Bills;
     * @param DB; xây đựng chức năng phân trang paginate
     *@return view đơn hàng.
     */
    public function getBill()
    {
    	$data['oderslist'] = Bills::all();
    	$data['oderslist'] = DB::table('oders')->paginate(5);
    	return view('backend.bill',$data);
    }

    /**
     * Đổ dữ liệu chi tiết đProductsơn hàng ra ngoài view
     * @param App\Models\Products;
     * @param App\Models\BillDetails;
     *@param $id; id trong bảng đơn hàng
     *@return view chi tiết đơn hàng.
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
     * Xóa dữ liệu trong bảng đơn hàng
     * @param App\Models\Bills;
     *@param $id;
     *@return view đơn hàng.
     */

    public function getDeleteBill($id)
    {
    	Bills::destroy($id);
    	return back();
    }
}
