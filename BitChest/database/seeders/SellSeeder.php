<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sell;

class SellSeeder extends Seeder
{
    public function run()
    {
        
        Sell::create([
            'id_user' => 1, 
            'id_crypto' => 1,
            'quantity' => 5.0,
            'price' => 6000.00,
            'date_sell' => now(),
        ]);

     
    }
}
