<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
	use UuidForKey;
    use SoftDeletes;
    protected $table = 'accounts';

    public $incrementing = false;
    protected $dates = ['deleted_at'];

    protected $guarded = ['*'];

    public function user () {
    	return $this->hasOne('App\User');
    }

    public function transactions () {
    	return $this->hasMany('App\Transaction');
    }
}
