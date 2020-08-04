<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('User id');
            $table->tinyInteger('id_program')->unsigned()->nullable(false)->comment('id_program from Programss');
            $table->string('code', '8')->nullable(false)->comment('User code');
            $table->string('password')->nullable(false)->default('1234')->comment('User password');
            $table->string('name', '50')->nullable(false)->comment('Username');
            $table->string('lastname', '50')->nullable(false)->comment('Username');
            $table->string('document', '15')->nullable(false)->comment('Document');
            $table->tinyInteger('document_type')->unsigned()->nullable(false)->comment('Document');
            $table->string('email', '60')->nullable(false)->comment('User personal email');
            $table->string('emailu', '60')->nullable(false)->comment('User university email');
            $table->string('address')->default('No address')->nullable(false)->comment('User address');
            $table->string('phone')->default('No phone')->nullable(false)->comment('User phone');
            $table->date('birth')->nullable(false)->comment('User birthday');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
