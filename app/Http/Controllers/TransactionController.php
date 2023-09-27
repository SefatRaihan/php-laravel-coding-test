<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function allTransactions(){
        $allTransactions = Transaction::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get(); 
        return view('allTransactions.show', compact('allTransactions'));
    }

}
