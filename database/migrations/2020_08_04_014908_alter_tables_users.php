<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                $table->foreign('document_type')->references('id')->on('document_types')->onDelete('restrict')->cascadeOnUpdate();
                $table->foreign('id_program')->references('id')->on('programs')->onDelete('restrict')->cascadeOnUpdate();
                $table->unique(['code', 'document', 'email', 'emailu', 'phone'], 'uc_users');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('document_type');
            $table->dropForeign('id_program');
            $table->dropUnique('uc_users');
        });
    }
}
