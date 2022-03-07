<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function  totalAmount($currency){
        $user = \Auth::user();
        $currency = Currency::query()->where('abbr', $currency)->first();
        $received =  Transaction::query()
            ->where('target_currency', $currency->id)
            ->where('receiver_id', $user->id)
            ->sum('amount');
        $sent = Transaction::query()
            ->where('source_currency', $currency->id)
            ->where('sender_id', $user->id)
            ->sum('amount');
        return $received - $sent;
    }
}
