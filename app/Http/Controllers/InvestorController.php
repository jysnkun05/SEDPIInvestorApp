<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvestorController extends Controller
{
    public function showSOA() 
    {
    	return view('investor.index');
    }

    public function getAllTransactions()
    {
    	$account = Account::findOrFail(Auth::user()->account_id);
 		$account->load('transactions');
 		foreach($account->transactions as $key => $value)
 		{
 			$value->load('transactionType');
 		}

 		return $account;
    }
}
