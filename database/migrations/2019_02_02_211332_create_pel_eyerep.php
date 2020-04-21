<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelEyerep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_eyerep', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('appid');
            $table->string('dorep')->nullable();
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('paddre')->nullable();
            $table->text('hist')->nullable();
            $table->string('cor20exo')->nullable();
            $table->string('cor20eso')->nullable();
            $table->string('cor20hyper')->nullable();
            $table->string('cor18exo')->nullable();
            $table->string('cor18eso')->nullable();
            $table->string('cor18hyper')->nullable();
            $table->string('uncor20exo')->nullable();
            $table->string('uncor20eso')->nullable();
            $table->string('uncor20hyper')->nullable();
            $table->string('uncor18exo')->nullable();
            $table->string('uncor18eso')->nullable();
            $table->string('uncor18hyper')->nullable();
            $table->text('fusion')->nullable();
            $table->text('pupils')->nullable();
            $table->text('fields')->nullable();
            $table->text('ophthalmoscopic')->nullable();
            $table->text('slit')->nullable();
            $table->string('mused')->nullable();
            $table->string('od')->nullable();
            $table->string('os')->nullable();
            $table->string('dvtsmethd')->nullable();
            $table->string('dvexo')->nullable();
            $table->string('dveso')->nullable();
            $table->string('dvhyper')->nullable();
            $table->string('dvcood')->nullable();
            $table->string('dvcoos')->nullable();
            $table->string('dvcoov')->nullable();
            $table->string('dvglod')->nullable();
            $table->string('dvglos')->nullable();
            $table->string('dvglov')->nullable();
            $table->string('nvtsmethd')->nullable();
            $table->string('nvexo')->nullable();
            $table->string('nveso')->nullable();
            $table->string('nvhyper')->nullable();
            $table->string('nvcood')->nullable();
            $table->string('nvcoos')->nullable();
            $table->string('nvcoov')->nullable();
            $table->string('nvglod')->nullable();
            $table->string('nvglos')->nullable();
            $table->string('nvglov')->nullable();
            $table->string('ivtsmethd')->nullable();
            $table->string('ivexo')->nullable();
            $table->string('iveso')->nullable();
            $table->string('ivhyper')->nullable();
            $table->string('ivcood')->nullable();
            $table->string('ivcoos')->nullable();
            $table->string('ivcoov')->nullable();
            $table->string('ivglod')->nullable();
            $table->string('ivglos')->nullable();
            $table->string('ivglov')->nullable();
            $table->string('preaod')->nullable();
            $table->string('preaos')->nullable();
            $table->string('prebod')->nullable();
            $table->string('prebos')->nullable();
            $table->string('typelense')->nullable();
            $table->string('examfreq')->nullable();
            $table->text('propinion')->nullable();
            $table->text('symptoms')->nullable();
            $table->string('speaddre')->nullable();
            $table->string('spesign')->nullable();
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
        Schema::dropIfExists('pel_eyerep');
    }
}
