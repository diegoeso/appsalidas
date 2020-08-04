<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->foreign('id_faculty')->references('id')->on('faculties')->onDelete('restrict')->cascadeOnUpdate();
            $table->unique(['code', 'name'], 'uc_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropForeign('id_faculty');
            $table->dropUnique('uc_programs');
        });
    }
}
