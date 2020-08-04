<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableRoleUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->cascadeOnUpdate();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->cascadeOnUpdate();
            $table->unique(['user_id', 'role_id'], 'uc_role_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_users', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('role_id');
            $table->dropUnique('uc_role_users');
        });
    }
}
