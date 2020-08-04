<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProfileImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_images', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->cascadeOnUpdate();
            $table->unique(['path', 'name'], 'uc_profile_images');
            $table->unique(['user_id'], 'uc_profile_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_images', function (Blueprint $table) {
            $table->dropUnique('uc_profile_images');
            $table->dropUnique('uc_profile_user');
            $table->dropForeign('user_id');
        });
    }
}
