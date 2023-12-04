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


use App\Models\Universidad;
use App\Models\Facultad;
use App\Models\Carrera;

use App\Models\Centro;

use App\Models\Departamento;
use App\Models\Clase;

use App\Models\Estudiante;

use App\Models\EstadoRecurso;

use App\Models\VersionRecurso;

use App\Models\EstadoTema;

use App\Models\CategoriaTema;

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

        Persona::create([
                'id_sexo' => 1,
                'id_genero' => 1,
                'id_ciudad' => 1,
                'id_estado_civil' => 1,
                'nombre' => 'Kenis',
                'apellido' => 'Reyes',
            ]);

        Persona::create([
            'id_sexo' => 1,
            'id_genero' => 1,
            'id_ciudad' => 1,
            'id_estado_civil' => 1,
            'nombre' => 'Ingrid',
            'apellido' => 'Lozano',
        ]);

        Persona::create([
            'id_sexo' => 1,
            'id_genero' => 1,
            'id_ciudad' => 1,
            'id_estado_civil' => 1,
            'nombre' => 'Cristian',
            'apellido' => 'Avila',
        ]);

        Persona::create([
            'id_sexo' => 1,
            'id_genero' => 1,
            'id_ciudad' => 1,
            'id_estado_civil' => 1,
            'nombre' => 'Francisco',
            'apellido' => 'Paz',
        ]);




        User::create([
            'name' => 'admin',
            'email' => 'admin@unah.hn',
            'password' => bcrypt('admin123'),
            'id_persona' => 1,
        ]);

        User::create([
            'name' => 'kenis',
            'email' => 'kenis@unah.hn',
            'password' => bcrypt('kenis123'),
            'id_persona' => 2,
        ]);

        User::create([
            'name' => 'ingrid',
            'email' => 'ingrid@unah.hn',
            'password' => bcrypt('ingrid123'),
            'id_persona' => 3,
        ]);

        User::create([
            'name' => 'cristian',
            'email' => 'cristian@unah.hn',
            'password' => bcrypt('cristian123'),
            'id_persona' => 4,
        ]);

        User::create([
            'name' => 'francisco',
            'email' => 'francisco@Unah.hn',
            'password' => bcrypt('francisco123'),
            'id_persona' => 5,
        ]);




        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional Autónoma de Honduras',
            'logo' => 'unah.png',
        ]);

        Universidad::create([
            'nombre_universidad' => 'Universidad Pedagógica Nacional Francisco Morazán',
            'logo' => 'upnfm.png',
        ]);

        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional de Agricultura',
            'logo' => 'una.png',
        ]);

        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional de Ciencias Forestales',
            'logo' => 'uncf.png',
        ]);


        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional de Artes',
            'logo' => 'una.png',
        ]);

        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional de la Esperanza',
            'logo' => 'une.png',
        ]);


        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional de la Agricultura',
            'logo' => 'una.png',
        ]);


        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional de Educación a Distancia',
            'logo' => 'uned.png',
        ]);

        Universidad::create([
            'nombre_universidad' => 'Universidad Nacional de la Esperanza',
            'logo' => 'une.png',
        ]);

        Facultad::create([
            'nombre_facultad' => 'Facultad de ingeniería',
        ]);

        Facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Económicas',
        ]);

        Facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Sociales',
        ]);

        Facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Jurídicas',
        ]);

        Facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Médicas',
        ]);

        Facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Espaciales',
        ]);

        Facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Forestales',
        ]);

        Universidad::find(1)->facultades()->attach([1, 2, 3, 4, 5, 6, 7]);
        Universidad::find(2)->facultades()->attach([3, 4, 5, 6, 7]);
        Universidad::find(3)->facultades()->attach([3, 4, 5, 6, 7]);

        Carrera::create([
            'id_facultad' => 1,
            'id_universidad' => 1,
            'nombre_carrera' => 'Ingeniería en Sistemas',
            'logo' => 'unah.png'
        ]);


        Carrera::create([
            'id_facultad' => 1,
            'id_universidad' => 1,
            'nombre_carrera' => 'Ingeniería en Agro Industrial',
            'logo' => 'unah.png'
        ]);

        Carrera::create([
            'id_facultad' => 1,
            'id_universidad' => 1,
            'nombre_carrera' => 'Ingeniería en Acuicola',
            'logo' => 'unah.png'
        ]);

        Centro::create([
            'id_universidad' => 1,
            'nombre_centro' => 'Centro Universitario Regional del Litoral Pacífico',
            'correo_electronico' => 'curl@unah.hn',
            'direccion' => 'Choluteca, Honduras',
        ]);

        Centro::create([
            'id_universidad' => 1,
            'nombre_centro' => 'Centro Universitario Regional del Litoral Atlántico',
            'correo_electronico' => 'curla',
            'direccion' => 'La Ceiba, Honduras',
        ]);

        Centro::create([
            'id_universidad' => 1,
            'nombre_centro' => 'Centro Universitario Regional del Centro',
            'correo_electronico' => 'curc',
            'direccion' => 'Comayagua, Honduras',
        ]);

        Centro::create([
            'id_universidad' => 1,
            'nombre_centro' => 'Ciudad Universitaria',
            'correo_electronico' => 'cu',
            'direccion' => 'Tegucigalpa, Honduras',
        ]);

        Centro::find(1)->carreras()->attach([1, 2, 3]);
        Centro::find(2)->carreras()->attach([1, 2, 3]);
        Centro::find(3)->carreras()->attach([1, 2, 3]);
        Centro::find(4)->carreras()->attach([1, 2, 3]);

        Estudiante::create([
            'id_user' => 2,
            'id_carrera_centro' => 1,
            'numero_cuenta' => '20181000001',
        ]);

        Estudiante::create([
            'id_user' => 3,
            'id_carrera_centro' => 1,
            'numero_cuenta' => '20181000002',
        ]);

        Estudiante::create([
            'id_user' => 4,
            'id_carrera_centro' => 1,
            'numero_cuenta' => '20181000003',
        ]);

        Estudiante::create([
            'id_user' => 5,
            'id_carrera_centro' => 1,
            'numero_cuenta' => '20181000004',
        ]);

      

        Departamento::create([
            'nombre_departamento' => 'Departamento de ingeniería en sistemas',
        ]);

        Departamento::create([
            'nombre_departamento' => 'Departamento de física',
        ]);

        Departamento::create([
            'nombre_departamento' => 'Departamento de química',
        ]);


        Departamento::create([
            'nombre_departamento' => 'Departamento de biología',
        ]);



        Departamento::create([
            'nombre_departamento' => 'Departamento de matemáticas',
        ]);


        Clase::create([
            'id_departamento' => 1,
            'nombre_clase' => 'Programación I',
            'codigo_clase' => 'IS-110',
            'uv' => 4,
        ]);

        Clase::create([
            'id_departamento' => 1,
            'nombre_clase' => 'Programación II',
            'codigo_clase' => 'IS-210',
            'uv' => 4,
        ]);

        Clase::create([
            'id_departamento' => 1,
            'nombre_clase' => 'Programación III',
            'codigo_clase' => 'IS-310',
            'uv' => 4,
        ]);

        Clase::create([
            'id_departamento' => 1,
            'nombre_clase' => 'Programación IV',
            'codigo_clase' => 'IS-410',
            'uv' => 4,
        ]);

        Clase::create([
            'id_departamento' => 1,
            'nombre_clase' => 'Algoritmos y Estructuras de Datos I',
            'codigo_clase' => 'IS-120',
            'uv' => 4,
        ]);

        Clase::create([
            'id_departamento' => 1,
            'nombre_clase' => 'Programación Orientada a Objetos I',
            'codigo_clase' => 'IS-220',
            'uv' => 4,
        ]);

        Carrera::find(1)->clases()->attach([1, 2, 3, 4, 5, 6]);

        EstadoRecurso::create([
            'nombre_estado_recurso' => 'Aprobado',
        ]);

        EstadoRecurso::create([
            'nombre_estado_recurso' => 'Rechazado',
        ]);

        EstadoRecurso::create([
            'nombre_estado_recurso' => 'Pendiente',
        ]);

        EstadoRecurso::create([
            'nombre_estado_recurso' => 'En revisión',
        ]);

        VersionRecurso::create([
            'nombre_version_recurso' => 'primera version',
        ]);

        VersionRecurso::create([
            'nombre_version_recurso' => 'segunda version',
        ]);

        VersionRecurso::create([
            'nombre_version_recurso' => 'tercera version',
        ]);

        VersionRecurso::create([
            'nombre_version_recurso' => 'cuarta version',
        ]);

        VersionRecurso::create([
            'nombre_version_recurso' => 'quinta version',
        ]);


        EstadoTema::create([
            'nombre_estado_tema' => 'Abierto',
        ]);

        EstadoTema::create([
            'nombre_estado_tema' => 'Cerrado',
        ]);

        EstadoTema::create([
            'nombre_estado_tema' => 'Pendiente',
        ]);

        EstadoTema::create([
            'nombre_estado_tema' => 'En revisión',
        ]);

        EstadoTema::create([
            'nombre_estado_tema' => 'Rechazado',
        ]);

        EstadoTema::create([
            'nombre_estado_tema' => 'Aprobado',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de discusión',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de ayuda',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de sugerencia',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de queja',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de felicitación',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de otro',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de duda',
        ]);

        CategoriaTema::create([
            'nombre_categoria_tema' => 'Tema de comentario',
        ]);

        




        

    }
}
