<?php

namespace App\Http\Controllers;


use App\Models\Currency;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function sendMoneyForm()
    {
        $users = User::all();
        $currencies = Currency::all();
        return view('transfer', compact('users','currencies'));
    }
    function transfer(Request $request)
    {
        $user = auth()->user();
        if ($user->totalAmount($request->current_currency) > $request->sent_amount){
            //has enough found
            $this->createTransaction($user, $request, 'Success');
        }else{
            $reason = 'No enough found to make this transaction!';
            $this->createTransaction($user, $request->merge(['comment'=>$reason]), 'Failed');
        }
        return redirect()->route('home');
    }
    function createTransaction($user, Request $request, $status){
        Transaction::create([
            "sender_id" =>$user->id,
            "receiver_id" => $request->receiver,
            "status" => $status,
            "amount" => $request->received_amount,
            "rate" => $request->rate,
            "comment" => $request->comment,
            "source_currency" => Currency::query()->where('abbr', $request->current_currency)->first()->id,
            "target_currency" => Currency::query()->where('abbr', $request->target_currency)->first()->id,
        ]);
    }
    function allTransactions(){
        $user = auth()->user();
        $transactions = Transaction::query()
            ->where('sender_id', $user->id)
            ->OrWhere('receiver_id', $user->id)
            ->get();
        return view('transactions', compact('transactions'));
    }
}
