<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satker', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('kdsatker', 8);
            $table->string('nmsatker', 200);
            $table->string('no_tlp_satker', 12)->nullable();
            $table->unsignedBigInteger('balai_id');
            $table->unsignedBigInteger('wilayah_id');
            
            
            $table->foreign('balai_id')->references('id')->on('balai');
            $table->foreign('wilayah_id')->references('id')->on('wilayah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satker');
    }
}
