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
            $table->foreignId('id_tukang_bersih')->nullable()->references('id')->on('tukang_bersihs');
            $table->foreignId('id_tempahan')->nullable()->references('id')->on('tukang_bersihs');
            $table->string('tajuk');
            $table->string('penerangan');
            $table->string('ketersediaan_lokasi');
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
