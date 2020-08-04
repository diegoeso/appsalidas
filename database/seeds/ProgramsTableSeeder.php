<?php

use App\Program;
use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = Program::create([
            'id_faculty' => '1',
            'code' => '115',
            'name' => 'Ingeniería de Sistemas'
        ]);
        $program = Program::create([
            'id_faculty' => '1',
            'code' => '119',
            'name' => 'Ingeniería Industrial'
        ]);
    }
}
