<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wallet;

class WalletSeeder extends Seeder
{
    public function run()
    {
        
        Wallet::create([
            'id_user' => 1, 
            'key_security' => 'your_security_key',
            'address' => 'your_wallet_address',
        ]);

        
    }
}
