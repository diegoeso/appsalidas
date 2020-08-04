<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('Program ID');
            $table->tinyInteger('id_faculty')->unsigned()->nullable(false)->comment('Faculty ID');
            $table->string('name', '50')->nullable(false)->comment('Faculty name');
            $table->string('code', '3')->nullable(false)->comment('Program code');
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
        Schema::dropIfExists('programs');
    }
}
