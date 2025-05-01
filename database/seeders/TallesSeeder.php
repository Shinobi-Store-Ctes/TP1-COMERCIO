<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('talles')->insert([
            ['talle' => 'XS'], // 1
            ['talle' => 'S'], // 2
            ['talle' => 'M'], // 3
            ['talle' => 'L'], // 4
            ['talle' => 'XL'], // 5
            ['talle' => 'XXL'], // 6
        ]);
    }
}
