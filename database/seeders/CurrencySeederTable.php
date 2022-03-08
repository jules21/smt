<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            ['name'=>'US Dollar','abbr'=>'USD'],
            ['name'=>'British pound sterling','abbr'=>'GBP'],
            ['name'=>'Nigerian Naira','abbr'=>'NGN'],
        ];

        foreach ($currencies as $currency){
            Currency::create($currency);
        }
    }
}
