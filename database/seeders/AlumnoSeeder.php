<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Alumno;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->insert([
            [
                'nombre_completo' => 'Nicolás Firpo',
                'nacimiento' => '2000-04-17',
                'foto' => 'perfil-nicolas-firpo.png',
                'github' => 'https://github.com/niknef',
                'linkedin' => 'https://www.linkedin.com/in/nicolasfirpo/',
                'mail' => 'nicolas.firpo@davinci.edu.ar',
            ],
            [
                'nombre_completo' => 'Matías Martinez',
                'nacimiento' => '2001-03-28',
                'foto' => 'perfil-matias-martinez.jpeg',
                'github' => 'https://github.com/MatiasJulianMartinez?tab=repositories',
                'linkedin' => ' https://www.linkedin.com/in/matias-julian-martinez-a15599208/',
                'mail' => 'martinezmatiasdigital@gmail.com',
            ],
            [
                'nombre_completo' => 'Matías Neto',
                'nacimiento' => '2000-09-13',
                'foto' => 'perfil-matias-neto.jpg',
                'github' => 'https://github.com/M4ttux/',
                'linkedin' => 'https://linkedin.com/',
                'mail' => 'https://github.com/M4ttux/'
            ],
        ]);
    }
}

