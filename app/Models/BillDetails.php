<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    //
    protected $table = 'product_oder';
    protected $primaryKey = 'detail_id';
    protected $guarded = [];

    /**
		* quan hệ nghịch đảo từ chi tiết đơn hàng lấy ra sản phẩm;
    */
    public function checkProd()
    {
    	return $this->belongsTo('App\Models\Products','prod_id');
    }

    // function checkBill()
    // {
    // 	return $this->belongsTo('App\Models\Bills','oder_id');
    // }
}
