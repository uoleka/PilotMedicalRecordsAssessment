@extends ('layouts.app')

  
@section('content')
<div class="container" style="margin-top: 5px">
   @if (count($errors) > 0)
      <div class="alert alert-danger" align= "center">
      {{"Fill the field(s) marked in red"}}
      </div>
    @endif
    @if (isset($message))
      <div class="alert alert-info">
      {{$message}}
      </div>
    @endif

  <div class="row justify-content-center" >
        <div class="col-md-6" >
            <div class="card  polaroided">
              <div class="card-header">
                <section>
                <img src="template/bagasoo_logo.png" height="40"/>
                <strong>Fill in the details of the Applicant</strong>
                </section>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                  60% Complete
                </div>
              </div>
              <div class="card-body">
              <form method ='POST' Action ='applhistoryb' enctype="multipart/form-data">
                        {{ csrf_field() }}
                <table class="table-responsive table-striped appSubSec" >
                        
                        <tbody >
                                <tr id="t4" >
                                        <td class="t5" colspan="8">
                                          <label><strong>18a. 
                                          
                                                Medical history: Have you ever been diagnosed with or had, or do you presently have, any 
                                  of the following?</strong></label> 
                                  <i>Answer “Yes” or “No” for every condition listed below. In the EXPLANATIONS box below,
                                  you may note “PREVIOUSLY REPORTED, NO CHANGE” only if the explanation of the condition 
                                  was reported on a previous application for an airman medical certificate and there has been 
                                  no change in your condition. <a href= "instructions#eighteen">(See instructions for completion)</a>:</i>
                                            
                                        </td>
                                    </tr>
                                        
                                    <tr id="t4">
                                        <td width="10%" align="center">#</td>
                                        <td width="10%" align="center">Yes</td>
                                        <td width="10%" align="center">No</td>
                                        <td width="70%">CONDITION</td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">a</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="headache" value="yes"
                                            {{isset($person->headache) ? ($person->headache == 'yes' ? 'checked' : '') : (old('headache')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="headache" value="no"
                                            {{isset($person->headache) ? ($person->headache == 'no' ? 'checked' : '') : (old('headache')=='no' ? 'checked' : '')}}> 
                                        </td>
                                        <td class="t5" colspan="">
                                            <span class= "input {{$errors->has('headache') ? 'errcoll' : ''}}">Frequent or severe headaches?</span>
                                        </td>
                     
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">b</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="dizziness" value="yes"
                                            {{isset($person->dizziness) ? ($person->dizziness == 'yes' ? 'checked' : '') : (old('dizziness')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="dizziness" value="no"
                                            {{isset($person->dizziness) ? ($person->dizziness == 'no' ? 'checked' : '') : (old('dizziness')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('dizziness') ? 'errcoll' : ''}}">Dizziness or fainting spell?</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="t5" align="center">c</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="unconsciousness" value="yes"
                                            {{isset($person->unconsciousness) ? ($person->unconsciousness == 'yes' ? 'checked' : '') : (old('unconsciousness')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="unconsciousness" value="no"
                                            {{isset($person->unconsciousness) ? ($person->unconsciousness == 'no' ? 'checked' : '') : (old('unconsciousness')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('unconsciousness') ? 'errcoll' : ''}}">Unconsciousness for any reason?</span>
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">d</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="glasses" value="yes"
                                            {{isset($person->glasses) ? ($person->glasses == 'yes' ? 'checked' : '') : (old('glasses')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                             <input type="radio" name="glasses" value="no"
                                             {{isset($person->glasses) ? ($person->glasses == 'no' ? 'checked' : '') : (old('glasses')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('glasses') ? 'errcoll' : ''}}">Eye or vision trouble except for glasses?</span>         
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">e</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="allergy" value="yes"
                                            {{isset($person->allergy) ? ($person->allergy == 'yes' ? 'checked' : '') : (old('allergy')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="allergy" value="no"
                                            {{isset($person->allergy) ? ($person->allergy == 'no' ? 'checked' : '') : (old('allergy')=='no' ? 'checked' : '')}}> 
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('allergy') ? 'errcoll' : ''}}">Hay fever or allergy?</span>
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">f</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="asthma" value="yes"
                                            {{isset($person->asthma) ? ($person->asthma == 'yes' ? 'checked' : '') : (old('asthma')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="asthma" value="no"
                                            {{isset($person->asthma) ? ($person->asthma == 'no' ? 'checked' : '') : (old('asthma')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('asthma') ? 'errcoll' : ''}}">Asthma or lung disease?</span>
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">g</td>
                                        <td class="t5" align="center">
                                             <input type="radio" name="vascular" value="yes"
                                             {{isset($person->vascular) ? ($person->vascular == 'yes' ? 'checked' : '') : (old('vascular')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                             <input type="radio" name="vascular" value="no"
                                             {{isset($person->vascular) ? ($person->vascular == 'no' ? 'checked' : '') : (old('vascular')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('vascular') ? 'errcoll' : ''}}">Heart or vascular trouble?</span>
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">h</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="bloodPressure" value="yes"
                                            {{isset($person->bloodPressure) ? ($person->bloodPressure == 'yes' ? 'checked' : '') : (old('bloodPressure')=='yes' ? 'checked' : '')}}> 
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="bloodPressure" value="no"
                                            {{isset($person->bloodPressure) ? ($person->bloodPressure == 'no' ? 'checked' : '') : (old('bloodPressure')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('bloodPressure') ? 'errcoll' : ''}}">High or low blood pressure?</span>
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">i</td>
                                        <td class="t5" align="center">
                                             <input type="radio" name="stomach" value="yes"
                                             {{isset($person->stomach) ? ($person->stomach == 'yes' ? 'checked' : '') : (old('stomach')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                             <input type="radio" name="stomach" value="no"
                    
                                             {{isset($person->stomach) ? ($person->stomach == 'no' ? 'checked' : '') : (old('stomach')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('stomach') ? 'errcoll' : ''}}">Stomach, liver, or intestinal trouble?</span>
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">j</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="kidney" value="yes"
                    
                                             {{isset($person->kidney) ? ($person->kidney == 'yes' ? 'checked' : '') : (old('kidney')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="kidney" value="no"
                                              {{isset($person->kidney) ? ($person->kidney == 'no' ? 'checked' : '') : (old('kidney')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('kidney') ? 'errcoll' : ''}}">Kidney stone or blood in the urine?</span>
                                        </td>
                                    </tr>
                                    <tr id="t4">
                                        <td class="t5" align="center">k</td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="suicide" value="yes"
                                             {{isset($person->suicide) ? ($person->suicide == 'yes' ? 'checked' : '') : (old('suicide')=='yes' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5" align="center">
                                            <input type="radio" name="suicide" value="no"
                                             {{isset($person->suicide) ? ($person->suicide == 'no' ? 'checked' : '') : (old('suicide')=='no' ? 'checked' : '')}}>
                                        </td>
                                        <td class="t5">
                                            <span class= "input {{$errors->has('suicide') ? 'errcoll' : ''}}">Suicide attempt?</span>
                                        </td>
                                    </tr>                
                                    <tr>
                                            <td class="t5" align="center">l</td>
                                             <td class="t5" align="center">
                                                 <input type="radio" name="epilepsy" value="yes"
                                                 {{isset($person->epilepsy) ? ($person->epilepsy == "yes" ? 'checked' : '') : (old('epilepsy')=="yes" ? 'checked' : '')}}>
                                             </td>
                                             <td class="t5" align="center">
                                                 <input type="radio" name="epilepsy" value="no"
                                                 {{isset($person->epilepsy) ? ($person->epilepsy == "no" ? 'checked' : '') : (old('epilepsy')=="no" ? 'checked' : '')}}>
                                             </td>
                                             <td class="t5" colspan="">
                                                 <span class= "input {{$errors->has('epilepsy') ? 'errcoll' : ''}}">Neurological disorders, epilepsy, seizures, stroke, paralysis, etc</span>
                                             </td>
                                         </tr>
                <tr>
                    <td class="t5" align="center">m</td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="yes"
                        {{isset($person->depreession) ? ($person->depreession == "yes" ? 'checked' : '') : (old('depreession')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="no"
                        {{isset($person->depreession) ? ($person->depreession == "no" ? 'checked' : '') : (old('depreession')=="no" ? 'checked' : '')}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('depreession') ? 'errcoll' : ''}}">Mental disorders of any sort, depression, anxiety, etc</span>
                    </td>
                </tr>
                <tr>
                    <td class="t5" align="center">n</td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="yes"
                         {{isset($person->motionSickness) ? ($person->motionSickness == "yes" ? 'checked' : '') : (old('motionSickness')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="no"
                         {{isset($person->motionSickness) ? ($person->motionSickness == "no" ? 'checked' : '') : (old('motionSickness')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('motionSickness') ? 'errcoll' : ''}}">Motion sickness requiring medication?</span></td>
                </tr>
                <tr>
                    <td class="t5" align="center">o</td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="yes"
                        {{isset($person->discharge) ? ($person->discharge == "yes" ? 'checked' : '') : (old('discharge')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="no"
                        {{isset($person->discharge) ? ($person->discharge == "no" ? 'checked' : '') : (old('discharge')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('discharge') ? 'errcoll' : ''}}">Medical discharge from any organization?</span>
                    </td>
                </tr>
                <tr>
                    <td class="t5" align="center">p</td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="yes"
                        {{isset($person->rejection) ? ($person->rejection == "yes" ? 'checked' : '') : (old('rejection')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="no"
                        {{isset($person->rejection) ? ($person->rejection == "no" ? 'checked' : '') : (old('rejection')=="no" ? 'checked' : '')}}> 
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('rejection') ? 'errcoll' : ''}}">Medical rejection by any organization?</span></td>
                </tr>
                <tr>
                    <td class="t5" align="center">q</td>
                    <td class="t5" align="center">
                        <input type="radio" name="insurance" value="yes"
                        {{isset($person->insurance) ? ($person->insurance == "yes" ? 'checked' : '') : (old('insurance')=="yes" ? 'checked' : '')}} >
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="insurance" value="no"
                         {{isset($person->insurance) ? ($person->insurance == "no" ? 'checked' : '') : (old('insurance')=="no" ? 'checked' : '')}}> 
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('insurance') ? 'errcoll' : ''}}">Rejection for life or medical insurance?</span></td>
                </tr>
                <tr>
                    <td class="t5" align="center">r</td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="yes"
                         {{isset($person->admission) ? ($person->admission == "yes" ? 'checked' : '') : (old('admission')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="no"
                         {{isset($person->admission) ? ($person->admission == "no" ? 'checked' : '') : (old('admission')=="no" ? 'checked' : '')}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('admission') ? 'errcoll' : ''}}">Admission to hospital?</span>
                    </td>
                </tr>
                <tr>
                    <td class="t5" align="center">s</td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="yes"
                        {{isset($person->alcohol) ? ($person->alcohol == "yes" ? 'checked' : '') : (old('alcohol')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="no"
                        {{isset($person->alcohol) ? ($person->alcohol == "no" ? 'checked' : '') : (old('alcohol')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('alcohol') ? 'errcoll' : ''}}">Alcohol dependence or abuse; failed an alcohol test?</span></td>
                </tr>
                <tr>
                    <td class="t5" align="center">t</td>
                    <td class="t5" align="center">
                         <input type="radio" name="failedTest" value="yes"
                         {{isset($person->failedTest) ? ($person->failedTest == "yes" ? 'checked' : '') : (old('failedTest')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="failedTest" value="no"
                        {{isset($person->failedTest) ? ($person->failedTest == "no" ? 'checked' : '') : (old('failedTest')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('failedTest') ? 'errcoll' : ''}}">Substance dependence, or substance abuse, or use of illegal
                            substances in the last 2 years, or failed a drug test ever?</span>
                    </td>
                </tr>
                <tr>
                    <td class="t5" align="center">u</td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="yes"
                        {{isset($person->surgery) ? ($person->surgery == "yes" ? 'checked' : '') : (old('surgery')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="no"
                        {{isset($person->surgery) ? ($person->surgery == "no" ? 'checked' : '') : (old('surgery')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('surgery') ? 'errcoll' : ''}}">Other illness disability or surgery?</span>
                    </td>
                </tr>
                <tr>
                    <td class="t5" align="center">v</td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="yes"
                        {{isset($person->diabetes) ? ($person->diabetes == "yes" ? 'checked' : '') : (old('diabetes')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="no"
                        {{isset($person->diabetes) ? ($person->diabetes == "no" ? 'checked' : '') : (old('diabetes')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('diabetes') ? 'errcoll' : ''}}">Diabetes?</span></td>
                </tr>
                <tr id="t4" >
                <td class="t5" colspan="8">
                  <strong><label>18b.</label>  
                  Family medical history: Do any of the following pertain to your family’s medical history?</strong>
                </td>
                    </tr>
                <tr id="t4">
                    <td width="5%" align="center">#</td>
                    <td width="5%" align="center">Yes</td>
                    <td width="5%" align="center">No</td>
                    <td width="35%">CONDITION</td>
                <tr id="t4">
                    <td class="t5" align="center">a</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdisorder" value="yes"
                        {{isset($person->fdisorder) ? ($person->fdisorder == "yes" ? 'checked' : '') : (old('fdisorder')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdisorder" value="no"
                        {{isset($person->fdisorder) ? ($person->fdisorder == "no" ? 'checked' : '') : (old('fdisorder')=="no" ? 'checked' : '')}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('fdisorder') ? 'errcoll' : ''}}">Inherited disorders?</span>
                    </td>
                    
                </tr>
                <tr>
                    <td class="t5" align="center">b</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="yes"
                       {{isset($person->fglaucoma) ? ($person->fglaucoma == "yes" ? 'checked' : '') : (old('fglaucoma')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="no"
                        {{isset($person->fglaucoma) ? ($person->fglaucoma == "no" ? 'checked' : '') : (old('fglaucoma')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('fglaucoma') ? 'errcoll' : ''}}">Glaucoma?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">c</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="yes"
                        {{isset($person->fmental) ? ($person->fmental == "yes" ? 'checked' : '') : (old('fmental')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="no"
                        {{isset($person->fmental) ? ($person->fmental == "no" ? 'checked' : '') : (old('fmental')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fmental') ? 'errcoll' : ''}}">Mental illness?</span>
                    </td>
                    
                </tr>
                <tr>
                    <td class="t5" align="center">d</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="yes"
                        {{isset($person->fcholesterol) ? ($person->fcholesterol == "yes" ? 'checked' : '') : (old('fcholesterol')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="no"
                        {{isset($person->fcholesterol) ? ($person->fcholesterol == "no" ? 'checked' : '') : (old('fcholesterol')=="no" ? 'checked' : '')}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fcholesterol') ? 'errcoll' : ''}}">High Cholesterol levels?</span>
                    </td>
                </tr>
                <tr>
                    <td class="t5" align="center">e</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="yes"
                        {{isset($person->fepilepsy) ? ($person->fepilepsy == "yes" ? 'checked' : '') : (old('fepilepsy')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="no"
                       {{isset($person->fepilepsy) ? ($person->fepilepsy == "no" ? 'checked' : '') : (old('fepilepsy')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fepilepsy') ? 'errcoll' : ''}}">Epilepsy?</span>
                    </td>
                
                </tr>
                <tr>
                    <td class="t5" align="center">f</td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="yes"
                        {{isset($person->fallergies) ? ($person->fallergies == "yes" ? 'checked' : '') : (old('fallergies')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="no"
                         {{isset($person->fallergies) ? ($person->fallergies == "no" ? 'checked' : '') : (old('fallergies')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('fallergies') ? 'errcoll' : ''}}">Allergies/asthma/eczema?</span></td>
                </tr>
                   <tr id="t4" >
                    <td class="t5" align="center">g</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="yes"
                        {{isset($person->fdiabetes) ? ($person->fdiabetes == "yes" ? 'checked' : '') : (old('fdiabetes')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="no"
                       {{isset($person->fdiabetes) ? ($person->fdiabetes == "no" ? 'checked' : '') : (old('fdiabetes')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fdiabetes') ? 'errcoll' : ''}}">Diabetes?</span>
                    </td>
                </tr>
                <tr>
                    <td class="t5" align="center">h</td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="yes"
                         {{isset($person->ftuberculosis) ? ($person->ftuberculosis == "yes" ? 'checked' : '') : (old('ftuberculosis')=="yes" ? 'checked' : '')}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="no"
                         {{isset($person->ftuberculosis) ? ($person->ftuberculosis == "no" ? 'checked' : '') : (old('ftuberculosis')=="no" ? 'checked' : '')}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('ftuberculosis') ? 'errcoll' : ''}}">Tuberculosis?</span></td>
                </tr>
                <tr id="t4">
                  <td class="t5" colspan="8">
                    <b>18c. Explanations </b>
                    <a href="instructions#eighteenc">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                        </a>
                    <div id="elementExplain">
                    <textarea style="width: 100%" name ="medexplanation" class= "textarea {{$errors->has('medexplanation') ? 'errcol' : ''}}">
                        {{isset($person->medexplanation) ? $person->medexplanation : old('medexplanation') }}</textarea>
                    </div>
                   </td>
                    
                </tr>
                <tr>
                  <td colspan="2"><div align = "left" style="margin-top:20px">
                  <a href="applhistory" class="btn btn-success"> Previous</a>
                </div><label> </label>
                </td>
                <td colspan ="2"><div align = "right">
                  <input type="submit" class="btn btn-success"  value="Next"/>
                </div>
              </td>
              </tr>
            </tbody>
        </table>
        

               
                  
              </form>
              </div>
            </div>
        </div>
  </div>
</div>

@endsection
