<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    //
    protected $table = 'oders';
    protected $primaryKey = 'oder_id';
    protected $guarded = [];
}
