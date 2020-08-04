<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Role::create([
            'name' => 'Administrador'
        ]);
        $rol = Role::create([
            'name' => 'Estudiante'
        ]);
        $rol = Role::create([
            'name' => 'Docente'
        ]);
        $rol = Role::create([
            'name' => 'Director'
        ]);
    }
}
