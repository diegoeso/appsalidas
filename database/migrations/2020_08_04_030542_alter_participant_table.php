<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participants', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->cascadeOnUpdate();
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('restrict')->cascadeOnUpdate();
            $table->unique(['user_id', 'activity_id'], 'uc_participants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participants', function (Blueprint $table) {
            //
        });
    }
}
