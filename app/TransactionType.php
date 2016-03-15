<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionType extends Model
{
	use UuidForKey;
	use SoftDeletes;
	
	protected $table = 'transaction_types';
	protected $dates = ['deleted_at'];
	protected $guarded = ['*'];
	public $incrementing = false;    

	public function transactions()
	{
		return $this->hasMany('App\Transaction');
	}
}
