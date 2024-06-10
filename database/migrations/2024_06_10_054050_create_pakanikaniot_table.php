<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakanikaniot', function (Blueprint $table) {
            $table->bigIncrements('idpakan');
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('takaranpakan', ['Sedikit', 'Sedang', 'Banyak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pakanikaniot');
    }
};
