<?php

use App\Document_type;
use Illuminate\Database\Seeder;

class Document_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $DT = Document_type::create([
            'name' => 'C.C',
            'description' => 'Cédula de Ciudadanía'
        ]);
    }
}
