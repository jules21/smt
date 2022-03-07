<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = [
        'sent_money'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id');
    }
    public function targetCurrency(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return  $this->belongsTo(Currency::class, 'target_currency');
    }
    public function currentCurrency(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return  $this->belongsTo(Currency::class, 'current_currency');
    }
    public function getASentMoneyAttribute()
    {
        return $this->amount * $this->rate;
    }
}
