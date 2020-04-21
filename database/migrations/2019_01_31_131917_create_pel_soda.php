<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelSoda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_soda', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('appid');
            $table->string('name')->nullable();
            $table->string('paddre')->nullable();
            $table->string('classsame')->nullable();
            $table->string('waiversnum')->nullable();
            $table->text('limitation')->nullable();
            $table->text('defect')->nullable();
            $table->string('bissue')->nullable();
            $table->date('doissu')->nullable();
            $table->string('nametitle')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('pel_soda');
    }
}
