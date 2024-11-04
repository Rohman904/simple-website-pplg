<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([ 
       'name' => 'admin',
        'email' => 'abdulrohmanut1@gmail.com',
        'password' => bcrypt('wwww222'),
      ]);
    }
}
