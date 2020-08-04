<?php

use App\Document_type;
use App\Program;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id_program' => 1,
            'code' => '1151505',
            'name' => 'Andrés Camilo',
            'password' => bcrypt('1234'),
            'lastname' => 'Yáñez Escobar',
            'document' => '1090522152',
            'document_type' => 1,
            'email' => 'camilo_escobar2398@outlook.com',
            'emailu' => 'andrescamiloye@ufps.edu.co',
            'address' => 'Av 1E 0AN #27 Quinta Bosch',
            'phone' => '3176695378',
            'birth' => '1998-11-23'
        ]);
        factory(User::class, 25)->create();
    }
}
