<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'root@email.com',
            'password' => Hash::make('root'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('root123'),
        ]);
    }
}
