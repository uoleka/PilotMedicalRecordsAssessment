<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelMedcert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_medcert', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('appid');
            $table->string('aname')->nullable();
            $table->string('dob')->nullable();
            $table->string('paddre')->nullable();
            $table->string('doexam')->nullable();
            $table->string('medcertclass')->nullable();
            $table->string('nationality')->nullable();
            $table->string('sinatureohold')->nullable();
            $table->string('issauthority')->nullable();
            $table->string('validity')->nullable();
            $table->text('limitation')->nullable();
            $table->string('doissu')->nullable();
            $table->string('signatureauth')->nullable();
            $table->string('caastaffname')->nullable();
            $table->string('authnumb')->nullable();
            $table->string('signaturcaa')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('pel_medcert');
    }
}
