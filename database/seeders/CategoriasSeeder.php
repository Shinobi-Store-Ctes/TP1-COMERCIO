<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['categoria' => 'Camisas'],
            ['categoria' => 'Pantalones'],
            ['categoria' => 'Zapatos'],
            ['categoria' => 'Accesorios'],
            ['categoria' => 'Vestidos'],
            ['categoria' => 'Faldas'],
            ['categoria' => 'Chaquetas'],
            ['categoria' => 'Suéteres'],
            ['categoria' => 'Ropa interior'],
            ['categoria' => 'Camiseta de Futbol'],
            ['categoria' => 'Campera de Futbol'],
            ['categoria' => 'Buzo de Futbol'],
            ['categoria' => 'Remera de Futbol'],
            ['categoria' => 'Short de Futbol'],
            ['categoria' => 'Calza'],
        ]);
    }
}
