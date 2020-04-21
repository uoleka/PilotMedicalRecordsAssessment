<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelAmeapproval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_ameapproval', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ameid');
            $table->string('certstatus')->nullable();
            $table->string('denialreason')->nullable();
            $table->string('classsame')->nullable();
            $table->string('serialnumb')->nullable();
            $table->string('desigstatus')->nullable();
            $table->string('desigdenialreason')->nullable();
            $table->string('applacceptance')->nullable();
            $table->string('intissued')->nullable();
            $table->string('amecity')->nullable();
            $table->date('dostatus')->nullable();
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
        Schema::dropIfExists('pel_ameapproval');
    }
}
