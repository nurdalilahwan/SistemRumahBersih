<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkhidmatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkhidmatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tukang_bersih')->references('id')->on('users');
            $table->string('tajuk');
            $table->string('penerangan');
            $table->string('ketersediaan_lokasi');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('perkhidmatans');
    }
}
