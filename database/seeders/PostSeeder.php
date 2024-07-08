<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'content' => Str::random(25),
        ]);

        DB::table('posts')->insert([
            'title' =>'Not Random Post',
            'content' => 'If you know you know',
        ]);

        DB::table('posts')->insert([
            'title' =>'Random Post',
            'content' => Str::random(25),
        ]);
    }
}
