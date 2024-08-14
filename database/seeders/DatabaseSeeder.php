<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'username' => 'M0b1l',
            'name' => 'Rare Pat',
            'email' => 'patrick@mymegamobile.com',
            'password' => Hash::make('megamobile'),
        ]);
    }
}
