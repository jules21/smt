<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $transactions = Transaction::query()
            ->where('sender_id', $user->id)
            ->OrWhere('receiver_id', $user->id)
            ->get();
        $monthlyTransactions =[];
        for($i = 1; $i < 13; $i++) {
            $monthlyTransactions[date('F', mktime(0, 0, 0, $i, 10))] = Transaction::whereMonth('created_at', $i)->count();
        }
        return view('dashboard', compact('transactions','monthlyTransactions'));
    }
}
