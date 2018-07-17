<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Account extends Authenticatable
{
	use Notifiable;

    protected $table = 'accounts';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_email', 'password',
    ];

    protected $hidden = [
    	'password','remember_token',
    ];
    public function getAuthPassword()
    {
        return $this->password;
    }
}


