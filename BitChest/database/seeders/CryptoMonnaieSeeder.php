<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CryptoMonnaie;

class CryptoMonnaieSeeder extends Seeder
{
    public function run()
    {
        
        CryptoMonnaie::create([
            'name' => 'Bitcoin',
            'symbole' => 'BTC',
        ]);

        
    }
}
