<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Purchase;

class PurchaseSeeder extends Seeder
{
    public function run()
    {
        
        Purchase::create([
            'id_user' => 1, 
            'id_crypto' => 1, 
            'quantity' => 2.5,
            'price' => 5000.00,
            'date_achat' => now(),
        ]);

       
    }
}
