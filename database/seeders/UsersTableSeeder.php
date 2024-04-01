<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users')->insert([
        //Admin
        [
          'name' => 'Admin',
          'email' => 'admin@example.com',
          'password' => Hash::make('123'),
          'role' => 'admin'
        ],    
        //Customer
        [
          'name' => 'Customer',
          'email' => 'customer@example.com',
          'password' => Hash::make('123'),
          'role' => 'customer'
        ] 
        
      ]);
    }
}
