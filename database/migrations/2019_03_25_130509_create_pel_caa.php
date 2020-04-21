<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelCaa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_caa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('name');
            $table->string('designation');
            $table->string('staffid');
            $table->date('doapplication')->nullable();
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
        Schema::dropIfExists('pel_caa');
    }
}
