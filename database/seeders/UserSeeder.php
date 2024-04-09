<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'dev@calimasolutions.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Calima!2023'), 
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
