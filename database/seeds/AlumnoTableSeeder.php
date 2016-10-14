<?php

use Illuminate\Database\Seeder;

class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'Nombre', 'Apellido_Paterno', 'Apellido_Materno', 'Contrasena', 'Matricula', 'Grupo_id', 'company_id',
        DB::table('alumno')->insert([
            'Nombre' => 'Martin',
            'Apellido_Paterno'  => 'Garrix',
            'Apellido_Materno'   => 'Garcia',
            'Contrasena'      => '440040',
            'Matricula'   =>  '440-040',
            'Grupo_id'    =>  '1',
            'company_id'   =>  '0',
        ]);

        DB::table('alumno')->insert([
            'Nombre' => 'Julieta',
            'Apellido_Paterno'  => 'Venegas',
            'Apellido_Materno'   => 'Valdez',
            'Contrasena'      => '440041',
            'Matricula'   =>  '440-041',
            'Grupo_id'    =>  '1',
            'company_id'   =>  '0',
        ]);

        DB::table('alumno')->insert([
            'Nombre' => 'Julion',
            'Apellido_Paterno'  => 'Alvarez',
            'Apellido_Materno'   => 'Romero',
            'Contrasena'      => '440042',
            'Matricula'   =>  '440-042',
            'Grupo_id'    =>  '1',
            'company_id'   =>  '0',
        ]);

        DB::table('alumno')->insert([
            'Nombre' => 'Silvester',
            'Apellido_Paterno'  => 'Stalone',
            'Apellido_Materno'   => 'Mata',
            'Contrasena'      => '440043',
            'Matricula'   =>  '440-043',
            'Grupo_id'    =>  '1',
            'company_id'   =>  '0',
        ]);

        DB::table('alumno')->insert([
            'Nombre' => 'Juanito',
            'Apellido_Paterno'  => 'Cardenaz',
            'Apellido_Materno'   => 'Flores',
            'Contrasena'      => '440044',
            'Matricula'   =>  '440-044',
            'Grupo_id'    =>  '1',
            'company_id'   =>  '0',
        ]);
    }
}
