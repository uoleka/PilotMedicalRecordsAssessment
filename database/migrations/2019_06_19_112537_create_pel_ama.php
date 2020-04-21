<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelAma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_ama', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dob');
            $table->integer('userid');
            $table->string('examaddre')->nullable();
            $table->string('name')->nullable();
            $table->string('licenseas')->nullable();
            $table->string('typlicense')->nullable();
            $table->string('instname')->nullable();
            $table->string('country')->nullable();
            $table->string('streetaddre')->nullable();
            $table->string('lnumber')->nullable();
            $table->string('city')->nullable();
            $table->string('lcountry')->nullable();
            $table->string('officefone')->nullable();
            $table->string('medspec')->nullable();
            $table->string('ameauth')->nullable();
            $table->string('authlicense')->nullable();
            $table->string('schuni')->nullable();
            $table->string('unicountry')->nullable();
            $table->string('yrgrad')->nullable();
            $table->string('degreerecd')->nullable();
            $table->string('intschuni')->nullable();
            $table->string('intunicountry')->nullable();
            $table->string('inclusivedt')->nullable();
            $table->string('specialtytng')->nullable();
            $table->string('naminsti')->nullable();
            $table->string('inclusivedt2')->nullable();
            $table->string('pgcity')->nullable();
            $table->string('degrecert')->nullable();
            $table->string('typeprac')->nullable();
            $table->string('hprivi')->nullable();
            $table->string('pilot')->nullable();
            $table->string('aviationpilot')->nullable();
            $table->string('onduty')->nullable();
            $table->string('reserve')->nullable();
            $table->string('service')->nullable();
            $table->string('flightsurgeon')->nullable();
            $table->string('boards')->nullable();
            $table->string('specialsocie')->nullable();
            $table->string('aviationmedsocie')->nullable();
            $table->string('limitedlicen')->nullable();
            $table->string('suspendlicen')->nullable();
            $table->string('refusedlicen')->nullable();
            $table->string('controlledhabit')->nullable();
            $table->date('doapplication')->nullable();
            $table->string('dsignature')->nullable();
            $table->string('profdegree')->nullable();
            $table->string('medinsti')->nullable();
            $table->string('yearsofprac')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('pel_ama');
    }
}
