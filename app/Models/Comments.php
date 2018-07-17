<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table ='comments';
    protected $primaryKey='comment_id';
    protected $guarded=[];
}
