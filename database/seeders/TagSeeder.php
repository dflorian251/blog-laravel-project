<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'name' => Str::random(10)
        ]);

        DB::table('tags')->insert([
            'name' =>'Not a Random Tag'
        ]);

        DB::table('tags')->insert([
            'name' => 'Books'
        ]);

        DB::table('tags')->insert([
            'name' => 'GYm Equipment'
        ]);
    }
}
