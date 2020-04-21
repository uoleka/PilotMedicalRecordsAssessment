<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelMedexam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_medexam', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedinteger('appid');
        $table->string('height')->nullable();
        $table->string('weight')->nullable();
        $table->string('soda')->nullable();
        $table->string('sodasn')->nullable();
        $table->string('head')->nullable();
        $table->string('vascularsys')->nullable(); 
        $table->string('nose')->nullable(); 
        $table->string('sinuses')->nullable(); 
        $table->string('abdomen')->nullable(); 
        $table->string('anus')->nullable(); 
        $table->string('mouth')->nullable(); 
        $table->string('skin')->nullable(); 
        $table->string('ear')->nullable(); 
        $table->string('gusys')->nullable(); 
        $table->string('eardrum')->nullable(); 
        $table->string('extremities')->nullable(); 
        $table->string('eyes')->nullable(); 
        $table->string('spine')->nullable(); 
        $table->string('opthal')->nullable(); 
        $table->string('pupils')->nullable(); 
        $table->string('bodymarks')->nullable(); 
        $table->string('lymphatics')->nullable(); 
        $table->string('ocularotility')->nullable(); 
        $table->string('neurologic')->nullable(); 
        $table->string('lungsschest')->nullable(); 
        $table->string('psychiatric')->nullable(); 
        $table->string('hear')->nullable(); 
        $table->string('gensys')->nullable(); 
        $table->string('abdescription')->nullable();
        $table->string('hrresult')->nullable();
        $table->string('amepcode')->nullable();
        $table->string('fivehuna')->nullable();
        $table->string('onethoua')->nullable();
        $table->string('twothoua')->nullable(); 
        $table->string('threethoua')->nullable(); 
        $table->string('fourthoua')->nullable(); 
        $table->string('fivehunb')->nullable(); 
        $table->string('onethoub')->nullable(); 
        $table->string('twothoub')->nullable(); 
        $table->string('threethoub')->nullable(); 
        $table->string('fourthoub')->nullable(); 
        $table->string('colorresult')->nullable(); 
        $table->string('rightear')->nullable(); 
        $table->string('rightcorear')->nullable(); 
        $table->string('nearright')->nullable(); 
        $table->string('interright')->nullable(); 
        $table->string('leftear')->nullable(); 
        $table->string('leftcorear')->nullable(); 
        $table->string('nearleft')->nullable(); 
        $table->string('interleft')->nullable(); 
        $table->string('bothear')->nullable(); 
        $table->string('bothcorear')->nullable(); 
        $table->string('nearboth')->nullable(); 
        $table->string('interboth')->nullable();
        $table->string('fovision')->nullable();
        $table->string('esoph')->nullable();
        $table->string('exoph')->nullable();
        $table->string('lhyper')->nullable();
        $table->string('rhyper')->nullable(); 
        $table->string('systolic')->nullable(); 
        $table->string('pulse')->nullable(); 
        $table->string('diastolic')->nullable(); 
        $table->string('urinalysis')->nullable(); 
        $table->string('albumin')->nullable(); 
        $table->string('sugar')->nullable(); 
        $table->date('ecgdate')->nullable(); 
        $table->text('othertestgiv')->nullable(); 
        $table->text('commenonhist')->nullable(); 
        $table->string('sigmedhis')->nullable(); 
        $table->string('abphyfinding')->nullable(); 
        $table->string('recommend')->nullable(); 
        $table->text('disquadefects')->nullable(); 
        $table->string('dateofexam')->nullable(); 
        $table->string('amename')->nullable(); 
        $table->string('amesignature')->nullable(); 
        $table->string('amecountry')->nullable(); 
        $table->string('pcode')->nullable(); 
        $table->string('tel')->nullable();
        $table->string('ameserialnum')->nullable(); 
        $table->string('amestate')->nullable();
        $table->string('dnoted')->nullable();
        $table->string('ameaddre')->nullable();
        $table->string('audiospeechdis')->nullable();
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
        Schema::dropIfExists('pel_medexam');
    }
}
