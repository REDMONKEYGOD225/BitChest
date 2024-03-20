<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
       
        Transaction::create([
            'user_id' => 1, 
            'name_crypto' => 'Bitcoin',
            'date' => now(),
            'price' => 5000.00,
            'type_crypto' => 1,
            'cout_crypto' => 4500.00,
            'quantity' => 2,
        ]);

        
    }
}
