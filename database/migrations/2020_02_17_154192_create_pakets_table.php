<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmpaket', 250);
            $table->decimal('pagurmp', 15, 2);
            $table->integer('ta');
            $table->decimal('trgoutput', 8, 2);
            $table->string('satoutput');
            $table->decimal('trgoutcome', 8, 2);
            $table->unsignedBigInteger('satoutcome_id')->nullable();
            $table->unsignedBigInteger('ppk_id')->nullable();
            $table->unsignedBigInteger('balai_id')->nullable();
            $table->string('kdsatker', 8);
            $table->string('kdkabupaten', 4);
            $table->string('kddesa', 10);
            $table->string('kdoutput', 3);
            $table->unsignedBigInteger('wilayah_id')->nullable();
            $table->unsignedBigInteger('fnf_id')->nullable();
            $table->unsignedBigInteger('ks_id')->nullable();
            $table->unsignedBigInteger('apbnsbsn_id')->nullable();
            $table->unsignedBigInteger('sycmyc_id')->nullable();
            $table->unsignedBigInteger('status_kontrak_id')->nullable();
            $table->string('slug');
            $table->timestamps();

            $table->foreign('satoutcome_id')->references('id')->on('satoutcome');
            //$table->foreign('ppk_id')->references('id')->on('ppk');
            //$table->foreign('kdsatker')->references('kdsatker')->on('satker');
            $table->foreign('balai_id')->references('id')->on('balai');
            $table->foreign('wilayah_id')->references('id')->on('wilayah');
            $table->foreign('fnf_id')->references('id')->on('fnf');
            $table->foreign('ks_id')->references('id')->on('ks');
            $table->foreign('apbnsbsn_id')->references('id')->on('apbnsbsn');
            $table->foreign('sycmyc_id')->references('id')->on('sycmyc');
            //$table->foreign('status_kontrak_id')->references('id')->on('status_kontrak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket');
    }
}
