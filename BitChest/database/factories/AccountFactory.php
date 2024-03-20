<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    public function run()
    {
        
        Account::create([
            'id_wallet' => 1, 
            'sold' => 1000.00,
        ]);

    
    }
}
