<?php

use App\Program;
use App\Role_user;
use App\User;
use Illuminate\Database\Seeder;

class Role_UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Usersize = User::all()->count();
        $Programsize = Program::all()->count();
        for ($i = 1; $i <= $Usersize; $i++) {
            if ($i == 1) {
                Role_user::create([
                    'user_id' => 1,
                    'role_id' => 1,
                ]);
            }
            if ($i > 1 && $i < $Usersize / 2) {
                Role_user::create([
                    'user_id' => $i,
                    'role_id' => 2,
                ]);
            } elseif ($i > 1 && $i > $Usersize / 2) {
                Role_user::create([
                    'user_id' => $i,
                    'role_id' => 3,
                ]);
            }
        }
    }
}
