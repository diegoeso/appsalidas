<?php

use App\Activity;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=1; $i < 50 ; $i++) { 
        //     $activity = Activity::create([
        //         'title' => 'Activity'.$i,
        //         'description' => 'Description activity '.$i,
        //         'start_date' =>  date('y-m-d'),
        //         'end_date' => date('y-m-d')
        //     ]);
        // }
        factory(Activity::class, 15)->create();
    }
}
