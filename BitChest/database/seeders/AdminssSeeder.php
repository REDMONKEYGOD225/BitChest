<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Assale',
            'email' => 'pierreassale15@gmail.com',
            'password' => Hash::make('pokemon0210'),
        ]);
    

    DB::table('users')->insert([
        'name' => 'Jean',
        'email' => 'jeanpaul@gmail.com',
        'password' => Hash::make('jeanpaul@gmail.com'),
    ]);
     }
}
