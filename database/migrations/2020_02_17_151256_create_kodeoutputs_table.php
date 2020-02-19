<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodeoutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kodeoutput', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdoutput', 3);
            $table->string('nmoutput');
            $table->string('abat', 1);
            $table->string('rehabbangun', 1);
            $table->string('abjiat', 1);
            $table->string('atab', 1);

            //$table->foreign('kdoutput')->references('kdoutput')->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kodeoutput');
    }
}
