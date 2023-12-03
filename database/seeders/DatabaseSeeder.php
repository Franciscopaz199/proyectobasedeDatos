<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Persona;
use App\Models\Sexo;
use App\Models\Genero;
use App\Models\Ciudad;
use App\Models\EstadoCivil;
use App\Models\Pais;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            EstadoCivil::create([
                'nombre_estado_civil' => 'Soltero(a)',
            ]);

            EstadoCivil::create([
                'nombre_estado_civil' => 'Casado(a)',
            ]);

            EstadoCivil::create([
                'nombre_estado_civil' => 'Divorciado(a)',
            ]);

            EstadoCivil::create([
                'nombre_estado_civil' => 'Viudo(a)',
            ]);

            Sexo::create([
                'nombre_sexo' => 'Masculino',
            ]);

            Sexo::create([
                'nombre_sexo' => 'Femenino',
            ]);

            Genero::create([
                'nombre_genero' => 'Hombre',
            ]);

            Genero::create([
                'nombre_genero' => 'Mujer',
            ]);

            Pais::create([
                'nombre_pais' => 'Honduras',
                'nombre_nacionalidad' => 'Hondureña',
            ]);

            Pais::create([
                'nombre_pais' => 'El Salvador',
                'nombre_nacionalidad' => 'Salvadoreña',
            ]);

            Ciudad::create([
                'nombre_ciudad' => 'Choluteca',
                'id_pais' => 1,
            ]);

            Ciudad::create([
                'nombre_ciudad' => 'San Pedro Sula',
                'id_pais' => 1,
            ]);

            Ciudad::create([
                'nombre_ciudad' => 'La Ceiba',
                'id_pais' => 1,
            ]);

            Ciudad::create([
                'nombre_ciudad' => 'San Salvador',
                'id_pais' => 2,
            ]);


            Ciudad::create([
                'nombre_ciudad' => 'Santa Ana',
                'id_pais' => 2,
            ]);

            Persona::create([
                'id_sexo' => 1,
                'id_genero' => 1,
                'id_ciudad' => 1,
                'id_estado_civil' => 1,
                'nombre' => 'Admin',
                'apellido' => 'Admin',
            ]);


            User::create([
                'name' => 'admin',
                'email' => 'admin@unah.hn',
                'password' => bcrypt('admin123'),
                'id_persona' => 1,
            ]);
    }   
}
