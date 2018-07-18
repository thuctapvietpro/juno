<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    
    /**
     * [$table description]
     * @var string
     */
    protected $table ='comments';
    
    /**
     * [$primaryKey description]
     * @var string
     */
    protected $primaryKey='comment_id';
    
    /**
     * [$guarded description]
     * @var array
     */
    protected $guarded=[];
}
