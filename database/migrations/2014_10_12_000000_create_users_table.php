<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('password');
            $table->integer('level')->default(2);
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alamat');
            $table->date('tanggallahir');
            $table->string('foto')->nullable();
            $table->string('folder')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
