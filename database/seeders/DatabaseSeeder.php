<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::Create([
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);
        
        User::Create([
            'username' => 'aziz',
            'password' => Hash::make('aziz')
        ]);
        
        User::Create([
            'username' => 'faris',
            'password' => Hash::make('faris')
        ]);
        
        User::Create([
            'username' => 'hassan',
            'password' => Hash::make('hassan')
        ]);
    }
}
