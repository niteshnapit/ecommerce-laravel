<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Import database
use Illuminate\Support\Facades\DB;

// for encrypt the password
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Ravi',
            'email' => 'ravi@gmail.com',
            'password' => Hash::make('54321')
        ]);
    }
}
