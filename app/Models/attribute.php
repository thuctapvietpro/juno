<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
*
*
*
*/
class Attribute extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    
    protected $table = 'attributes';

    /**
     * The primary key for the model.
     * @var string
     */
    
    protected $primaryKey = 'att_id';

    /**
     * The attributes that aren't mass assignable.
     * @var array
     */
    
    protected $guarded = [];
    
    /**
     * The function implements relationship one-to-many between Attribute,AttributeValue
     * @return $this [description]
     */
    
    public function value(){
    	return $this->hasMany('App\Models\AttributeValue','att_id');
    }
}
