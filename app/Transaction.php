<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
	use UuidForKey;
    use SoftDeletes;
    protected $table = 'transactions';

    public $incrementing = false;
    protected $dates = ['deleted_at'];

    protected $guarded = ['*'];
	
	public function transactionType()
	{
		return $this->belongsTo('App\TransactionType');
	}

	public function account()
	{
		return $this->belongsTo('App\Account');
	}
}