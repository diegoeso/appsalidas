<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id()->comment('Activity ID');
            $table->string('title', '80')->nullable(false)->comment('Activity Title');
            $table->text('description')->nullable(false)->comment('Activity description');
            $table->date('start_date')->nullable(false)->comment('Activity start date');
            $table->date('end_date')->nullable(false)->comment('Activity end date');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
