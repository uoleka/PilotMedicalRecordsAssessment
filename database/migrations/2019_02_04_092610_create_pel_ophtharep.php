<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelOphtharep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_ophtharep', function (Blueprint $table) {
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
            $table->text('fahist')->nullable();
            $table->string('diagnosis')->nullable();
            $table->text('discover')->nullable();
            $table->text('confirmation')->nullable();
            $table->text('surgeried')->nullable();
            $table->string('anticsurgery')->nullable();
            $table->text('resthera')->nullable();
            $table->text('pretret')->nullable();
            $table->text('priocont')->nullable();
            $table->string('maxintra')->nullable();
            $table->string('intraocu')->nullable();
            $table->string('preaod')->nullable();
            $table->string('preaos')->nullable();
            $table->string('prebod')->nullable();
            $table->string('prebos')->nullable();
            $table->string('glass')->nullable();
            $table->string('size')->nullable();
            $table->string('dvtmethod')->nullable();
            $table->string('dvuncood')->nullable();
            $table->string('dvuncoos')->nullable();
            $table->string('dvuncoov')->nullable();
            $table->string('dvcood')->nullable();
            $table->string('dvcoos')->nullable();
            $table->string('dvcoov')->nullable();
            $table->string('nvtmethod')->nullable();
            $table->string('nvuncood')->nullable();
            $table->string('nvuncoos')->nullable();
            $table->string('nvuncoov')->nullable();
            $table->string('nvcood')->nullable();
            $table->string('nvcoos')->nullable();
            $table->string('nvcoov')->nullable();
            $table->string('ivtmethod')->nullable();
            $table->string('ivuncood')->nullable();
            $table->string('ivuncoos')->nullable();
            $table->string('ivuncoov')->nullable();
            $table->string('ivcood')->nullable();
            $table->string('ivcoos')->nullable();
            $table->string('ivcoov')->nullable();
            $table->text('corneeded')->nullable();
            $table->string('conglass')->nullable();
            $table->string('odcylinaxis')->nullable();
            $table->text('pupilsiz')->nullable();
            $table->string('oscylinaxis')->nullable();
            $table->text('slitlamp')->nullable();
            $table->string('speaddre')->nullable();
            $table->string('spesign')->nullable();
            $table->text('varnorm')->nullable();
            $table->text('fusion')->nullable();
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
        Schema::dropIfExists('pel_ophtharep');
    }
}
