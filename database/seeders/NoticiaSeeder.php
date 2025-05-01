<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'titulo' => 'Partido 18-6-2025 Contra Universitarios de Colombia',
                'contenido' => 'Partido 18-6-2025 Contra Universitarios de Colombia',
                'imagen' => 'noticias/1746138102_River vs. Barcelona Ecuador.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Partido 12-5-2025 Contra Barcelona de Guayaquil',
                'contenido' => 'Partido 12-5-2025 Contra Barcelona de Guayaquil',
                'imagen' => 'noticias/1746138410_R59o8IDD1_1290x760__1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
