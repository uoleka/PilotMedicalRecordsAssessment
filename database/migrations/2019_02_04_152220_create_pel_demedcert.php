<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelDemedcert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_demedcert', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('appid');
            $table->string('aname')->nullable();
            $table->string('dob')->nullable();
            $table->string('paddre')->nullable();
            $table->string('doexam')->nullable();
            $table->string('formClass')->nullable();
            $table->text('mcar')->nullable();
            $table->string('disqucond')->nullable();
            $table->string('signature')->nullable();
            $table->string('signaturex')->nullable();
            $table->string('authnumb')->nullable();
            $table->text('doapplication')->nullable();
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
        Schema::dropIfExists('pel_demedcert');
    }
}
