<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelApplicant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pel_applicant', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('userid');
			 $table->string('formClass');
			 $table->string('lname');
			 $table->string('fname');
             $table->string('mname');
             $table->string('pid');
			 $table->string('country');
			 $table->text('paddre');
			 $table->text('bstate');
             $table->string('pcode');
			 $table->date('dob');
			 $table->string('hair');
             $table->string('tfone');
			 $table->string('eyes');
			 $table->string('gender');
             $table->string('license')->nullable();
             $table->string('tliother')->nullable();
             $table->string('lipellicense')->nullable();
             $table->string('occupation')->nullable();
             $table->text('avemployer')->nullable();
             $table->string('certrev')->nullable();
             $table->date('certd')->nullable();
             $table->text('explanation')->nullable();
             $table->string('tpilot')->nullable();
             $table->string('tpilotsm')->nullable();
             $table->date('dlma')->nullable();
             $table->string('nprioraap')->nullable();
             $table->string('daipre')->nullable();
             $table->string('drug1')->nullable();
             $table->string('precrip1')->nullable();
             $table->string('drug2')->nullable();
             $table->string('precrip2')->nullable();
             $table->string('drug3')->nullable();
             $table->string('precrip3')->nullable();
             $table->string('drug4')->nullable();
             $table->string('precrip4')->nullable();
             $table->string('drug5')->nullable();
             $table->string('precrip5')->nullable();
             $table->string('lense')->nullable();
             $table->string('headache')->nullable();
             $table->string('epilepsy')->nullable();
             $table->string('dizziness')->nullable();
             $table->string('depreession')->nullable();
             $table->string('unconsciousness')->nullable();
             $table->string('motionSickness')->nullable();
             $table->string('glasses')->nullable();
             $table->string('discharge')->nullable();
             $table->string('allergy')->nullable();
             $table->string('rejection')->nullable();
             $table->string('asthma')->nullable();
             $table->string('insurance')->nullable();
             $table->string('vascular')->nullable();
             $table->string('admission')->nullable();
             $table->string('bloodPressure')->nullable();
             $table->string('alcohol')->nullable();
             $table->string('stomach')->nullable();
             $table->string('failedTest')->nullable();
             $table->string('kidney')->nullable();
             $table->string('surgery')->nullable();
             $table->string('diabetes')->nullable();
             $table->string('suicide')->nullable();
             $table->string('fdisorder')->nullable();
             $table->string('fglaucoma')->nullable();
             $table->string('fmental')->nullable();
             $table->string('fcholesterol')->nullable();
             $table->string('ftuberculosis')->nullable();
             $table->string('fepilepsy')->nullable();
             $table->string('fallergies')->nullable();
             $table->string('fdiabetes')->nullable();
             $table->text('medexplanation')->nullable();
             $table->string('alcho')->nullable();
             $table->string('nontraf')->nullable();
             $table->text('convicexpl')->nullable();
             $table->text('fcaause')->nullable();
             $table->string('vhealth')->nullable();
             $table->date('dvprofesional1')->nullable();
             $table->date('dvprofesional2')->nullable();
             $table->date('dvprofesional3')->nullable();
             $table->string('vhealth1')->nullable();
             $table->text('vrhealth1')->nullable();
             $table->string('vhealth2')->nullable();
             $table->text('vrhealth2')->nullable();
             $table->string('vhealth3')->nullable();
             $table->text('vrhealth3')->nullable();
             $table->integer('ame')->nullable();
             $table->integer('status')->nullable();
             $table->date('dacknowledge')->nullable();
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
        Schema::dropIfExists('pel_applicant');
    }
}
