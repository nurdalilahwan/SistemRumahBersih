<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempahans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->nullable()->references('id')->on('users');
            $table->foreignId('id_perkhidmatan')->nullable()->references('id')->on('perkhidmatans');
            $table->date('tarikh');
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
        Schema::dropIfExists('tempahans');
    }
}
