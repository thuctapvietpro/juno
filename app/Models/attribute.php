<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table = 'attributes';
    protected $primaryKey = 'att_id';
    protected $guarded = [];
    public function value(){
    	return $this->hasMany('App\Models\AttributeValue','att_id');
    }
}
