<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'personal_id' => 'admin',
            'teenager' => 0,
            'address' => 'admin',
            'exact_address' => 'admin',
            'municipality' => 'admin',
            'cellphone' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
    }
}
