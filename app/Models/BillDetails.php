<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    /**
     * [$table description]
     * @var string
     */
    protected $table = 'product_oder';

    /**
     * [$primaryKey description]
     * @var string
     */
    protected $primaryKey = 'detail_id';

    /**
     * [$guarded description]
     * @var array
     */
    protected $guarded = [];

    /**
     * [description product on the bill details]
     * @return [array]
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
