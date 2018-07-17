<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    //
    protected $table ='categorys';
    protected $primaryKey='cate_id';
    protected $guarded=[];
    public function childs(){
    	return $this->hasMany('App\Models\Categorys','cate_parent');
    }
}
