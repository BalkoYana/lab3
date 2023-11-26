<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('factories')->insert([
            'id'=>rand(100,200),
        'code'=>rand(100,200),
        'name'=>Str::random(10),
        'number'=>rand(100,200),
        'branch'=>Str::random(10),
        'address'=>Str::random(10),]);
    }
}
