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
        <div class="col-md-6">
            <div class="card  polaroided">
              <div class="card-header">
                <section>
                <img src="template/bagasoo_logo.png" height="40"/>
                <strong>Fill in the details of the Applicant</strong>
                </section>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                  85% Complete
                </div>
              </div>
              <div class="card-body">
              <form method ='POST' Action ='applconvic' enctype="multipart/form-data">
                        {{ csrf_field() }}
                <table class="table-responsive table-striped appSubSec" >
                        
                        <tbody >
                            <tr>
                            <td colspan="2"><strong>
                              <label>19a. Have you ever had<br> (1) 
                                            any convictions involving driving while intoxicated by, while impaired by, or while under
                                the influence of alcohol or a drug; or 
                                <br>(2) any convictions or administrative actions involving an offense(s) which
                                resulted in the denial, suspension, cancellation, or revocation of driving privileges or which resulted in attendance at
                                an educational or rehabilitation program? <a href="instructions#nineteen">
                                    <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                                </a>
                              </label>
                              
                            </strong> 
                               
                                <br>
                                <input type="radio" name ="alcho" value= "yes" 
                                 {{isset($person->alcho) ? ($person->alcho == "yes" ? 'checked' : '') : (old('alcho')=="yes" ? 'checked' : '')}}>  <label style="margin-right: 20px" class="input {{$errors->has('alcho')? 'errcoll': ''}}">Yes</label>
                                <input type="radio" name ="alcho" value="no" {{isset($person->alcho) ? ($person->alcho == "no" ? 'checked' : '') : (old('alcho')=="no" ? 'checked' : '')}}> <label 
                                class="input {{$errors->has('alcho')? 'errcoll': ''}}">No</label>
                            </td>
                        
                        
                    </tr>
                    <tr>
                        <td class="t8 " colspan="2"><strong><label>19b. Have you ever had any non-traffic convictions 
            (misdemeanours or felonies)?</label></strong><br>
                        <input type="radio" name = "nontraf" value="yes" onclick = "toggleUnexplain()"
                        {{isset($person->nontraf) ? ($person->nontraf == "yes" ? 'checked' : '') : (old('nontraf')=="yes" ? 'checked' : '')}}>  <label style="margin-right: 20px" class="input {{$errors->has('nontraf')? 'errcoll': ''}}">Yes</label>
                        <input type="radio" name = "nontraf" value="no" onclick ="toggleExplain()"
                        {{isset($person->nontraf) ? ($person->nontraf == "no" ? 'checked' : '') : (old('nontraf')=="no" ? 'checked' : '')}}> <label class="input {{$errors->has('nontraf')? 'errcoll': ''}}">No</label>

                        </td>
                    </tr>
                <tr id="t7" >
                    <td class="t8" colspan="2">
                      <div id ="explain"><strong><label>19c. Explanations</label></strong> 
                        <a href="instructions#nineteenc">
                          <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                      </a>
                        <textarea style="width: 100%" rows = "3" name="convicexpl" class="input {{$errors->has('convicexpl')? 'errcol': ''}}">{{isset($person->convicexpl) ? $person->convicexpl : old('convicexpl') }}</textarea>
                      </div>
                    </td>
                    
                </tr>
                <tr ><td colspan="4">
                      <strong><label>20. Visit to health professional within the last 3 years?</label></strong>
                      <a href="instructions#twenty">
                          <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                            <input type="radio" name ="vhealth" value="yes" onclick="toggleUnvisit()"
                            {{isset($person->vhealth) ? ($person->vhealth == "yes" ? 'checked' : '') : (old('vhealth')=="yes" ? 'checked' : '') }}> 
                            <label style="margin-right: 20px" class="input {{$errors->has('vhealth')? 'errcoll': ''}}">Yes <i>(Explain Below)</i>
                            </label>
                            <input type="radio" name ="vhealth" value="no" onclick = "toggleVisit()"
                            {{isset($person->vhealth) ? ($person->vhealth == "no" ? 'checked' : '') : (old('vhealth')=="no" ? 'checked' : '') }}> 
                            <label class="input {{$errors->has('vhealth')? 'errcoll': ''}}">No</label>
                        </td>
                        </tr>
                   
                    <tr >
                        <td >
                            <div id = "visitAdate">
                            <label style="margin-bottom:50px"><strong>a.</strong> Date</label><br><input type="date" name ="dvprofesional1" 
                            value="{{ isset($person->dvprofesional1) ? $person->dvprofesional1 : old('dvprofesional1') }}" 
                            class="input {{$errors->has('dvprofesional1')? 'errcol': 'form-control'}}">
                            </div>
                        </td>
                        <td >
                            <div id = "visitAhealth">
                              <label>Name, Address & Type of Health Professional Consulted</label><br>
                              <textarea rows="2" style="width: 100%" name="vhealth1"  class="input {{$errors->has('vhealth1')? 'errcol': 'form-control'}}">
                                {{ isset($person->vhealth1) ? $person->vhealth1 : old('vhealth1') }}
                              </textarea>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><label>Reason</label><br>
                          <div id = "visitAreason">
                            <textarea rows="2" style="width: 100%" name = "vrhealth1"
                            class="input {{$errors->has('vrhealth1')? 'errcol': 'form-control'}}">
                            {{ isset($person->vrhealth1) ? $person->vrhealth1 : old('vrhealth1') }}
                            </textarea>
                          </div>
                      </td>
                    </tr>
                    <tr id="t5" >
                        <td>
                          <div id ="visitBdate">
                          <label style="margin-bottom:50px"><strong>b.</strong> Date</label>
                          <input type="date" name ="dvprofesional2" value="{{ isset($person->dvprofesional2) ? $person->dvprofesional2 : old('dvprofesional2') }}" 
                          class="input {{$errors->has('dvprofesional2')? 'errcol': 'form-control'}}">
                        </td>
                        <td>
                          <div id="visitBhealth">
                          <label>Name, Address & Type of Health Professional Consulted</label><br>
                          <textarea rows="2" style="width: 100%" name ="vhealth2" class="input {{$errors->has('vhealth2')? 'errcol': 'form-control'}}" >{{ isset($person->vhealth2) ? $person->vhealth2 : old('vhealth2') }}
                          </textarea>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <div id = "visitBreason">
                          <label >Reason</label><br>
                          <textarea rows="2" style="width: 100%" name ="vrhealth2" class="input {{$errors->has('vrhealth2')? 'errcol': 'form-control'}}">{{ isset($person->vrhealth2) ? $person->vrhealth2 : old('vrhealth2') }}
                          </textarea></td>
                      </tr>
                      <tr>
                        <td>
                          <div id="visitCdate">
                            <label style="margin-bottom:50px"><strong>c.</strong> Date</label><br>
                            <input type="date" name ="dvprofesional3" value="{{ isset($person->dvprofesional3) ? $person->dvprofesional3 : old('dvprofesional3') }}" 
                            class="input {{$errors->has('dvprofesional3')? 'errcol': 'form-control'}}">
                          </div>
                        </td>
                        <td>
                          <div id="visitChealth">
                            <label>Name, Address & Type of Health Professional Consulted</label><br>
                            <textarea rows="2" style="width: 100%" name="vhealth3" class="input {{$errors->has('vhealth3')? 'errcol': 'form-control'}}">{{ isset($person->vhealth3) ? $person->vhealth3 : old('vhealth3') }}
                            </textarea>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <div id= "visitCreason">
                            <label>Reason</label>
                            <textarea rows="2" style="width: 100%" name = "vrhealth3" class="input {{$errors->has('vrhealth3')? 'errcol': 'form-control'}}">{{ isset($person->vrhealth3) ? $person->vrhealth3 : old('vrhealth3') }}
                            </textarea>
                          </div>
                        </td>
                      </tr>
          
              <tr>
                  <td colspan="1"><div align = "left" style="margin-top:20px">
                  <a href="applhistoryb" class="btn btn-success"> Previous</a>
                </div><label> </label>
                </td>
                <td colspan ="1"><div align = "right">
                  <input type="submit" class="btn btn-success" id="sub" value="Next"/>
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
<script>
   function toggleExplain() {
     $('#explain :input').attr('disabled', true);
   }
  </script>
  <script>
    function toggleUnexplain() {
      $('#explain :input').removeAttr('disabled');
    }
   </script>
<script>
    function toggleVisit() {
      $('#visitAdate :input').attr('disabled', true);
      $('#visitAhealth :input').attr('disabled', true);
      $('#visitAreason :input').attr('disabled', true);
      $('#visitBdate :input').attr('disabled', true);
      $('#visitBhealth :input').attr('disabled', true);
      $('#visitBreason :input').attr('disabled', true);
      $('#visitCdate :input').attr('disabled', true);
      $('#visitChealth :input').attr('disabled', true);
      $('#visitCreason :input').attr('disabled', true);
      document.getElementById('sub').focus();
    }
</script>
<script>
    function toggleUnvisit() {
      $('#visitAdate :input').removeAttr('disabled');
      $('#visitAhealth :input').removeAttr('disabled');
      $('#visitAreason :input').removeAttr('disabled');
      $('#visitBdate :input').removeAttr('disabled');
      $('#visitBhealth :input').removeAttr('disabled');
      $('#visitBreason :input').removeAttr('disabled');
      $('#visitCdate :input').removeAttr('disabled');
      $('#visitChealth :input').removeAttr('disabled');
      $('#visitCreason :input').removeAttr('disabled');
    }
</script>

@endsection
