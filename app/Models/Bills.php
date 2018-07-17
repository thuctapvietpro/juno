<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
	/**
	 * [$table description]
	 * @var string
	 */
    protected $table = 'oders';

    /**
     * [$primaryKey description]
     * @var string
     */
    protected $primaryKey = 'oder_id';

    /**
     * [$guarded description]
     * @var array
     */
    protected $guarded = [];
}
