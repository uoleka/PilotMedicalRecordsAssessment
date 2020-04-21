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
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                  20% Complete
                </div>
              </div>
              <div class="card-body">
              <form method ='POST' Action ='appllicense' enctype="multipart/form-data">
                        {{ csrf_field() }}
                <table class="table-responsive table-striped appSubSec" >
                        
                  <tbody >
                     <tr >
                       <td colspan="2">
                         <strong>
                           10a. Types of Licenses you currently hold
                          </strong>
                          <a href="instructions#ten">
                              <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                          </a>
                      </td>
                    </tr>
                     <tr>
                      <td>
                          <input type="radio" name="license"  value="atc" {{ isset($person->license) ? ($person->license =="atc" ? 'atc' :"") : 
                          (old('license')=="atc" ? 'checked' : '')}} onclick = "toggleUnstatus()"> ATC specialist<br>
                          
                          <input type="radio" name="license"  value="airline" {{ isset($person->license) ? ($person->license =="airline" ? 'airline' :"") : 
                          (old('license')=="airline" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Airline transport<br>

                          <input type="radio" name="license"  value="commercial" {{ isset($person->license) ? ($person->license =="commercial" ? 'commercial' :"") : 
                          (old('license')=="commercial" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Commercial<br>
                        
                        <input type="radio" name="license"  value="multicrew" {{ isset($person->license) ? ($person->license =="multicrew" ? 'multicrew' :"") : 
                        (old('license')=="multicrew" ? 'checked' : '')}}> Multi-crew<br>
                      </td >
                      <td >
                        <div style="margin-bottom:20px">
                          <input type="radio" name="license" value="none"  {{ isset($person->license) ? ($person->license =="none" ? 'checked' :"") : 
                          (old('license')=="none" ? 'checked' : '')}} onclick="toggleStatus()"/>
                          <span title="If None, then fill in date of last CAA medical exam or No prior application."> None </span>
                          <br>
  
                          <input type="radio" name="license"  value="flightengr" {{ isset($person->license) ? ($person->license =="flightengr" ? 'flightengr' :"") : 
                          (old('license')=="flightengr" ? 'checked' : '')}} onclick = "toggleStat()"> Flight engineer<br>
                          
                          <input type="radio" name="license"  value="maintenanceengr" {{ isset($person->license) ? ($person->license =="maintenanceengr" ? 'maintenanceengr' :"") : 
                            (old('license')=="maintenanceengr" ? 'checked' : '')}} onclick = "toggleStat()"> Maintenance Engineer<br>
                        </div>
                      </td>
                      </tr>
                <tr>
                  <td >
                    <div style="margin-bottom:60px">
                      <input type="radio" name="license"  value="flightinst" {{ isset($person->license) ? ($person->license =="flightinst" ? 'flightinst' :"") : 
                            (old('license')=="flightinst" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Flight instructor<br> 
                      
                      <input type="radio" name="license"  value="private" {{ isset($person->license) ? ($person->license =="private" ? 'private' :"") : 
                            (old('license')=="private" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Private<br>

                      <input type="radio" name="license"  value="student" {{ isset($person->license) ? ($person->license =="student" ? 'student' :"") : 
                      (old('license')=="student" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Student<br>
                    </div>
                   </td>
                  <td >
                      <input type="radio" name="license"  value="ballon" {{ isset($person->license) ? ($person->license =="ballon" ? 'ballon' :"") : 
                      (old('license')=="ballon" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Balloon<br>

                      <input type="radio" name="license"  value="glider" {{ isset($person->license) ? ($person->license =="glider" ? 'glider' :"") : 
                      (old('license')=="glider" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Glider<br>
                      <input type="radio" name="license"  value="other" {{ isset($person->license) ? ($person->license =="other" ? 'other' :"") : 
                      (old('license')=="other" ? 'checked' : '')}} onclick = "toggleUnstatus()"> Other
                      <input type="text" name="tliother" style="width: 100%" value="{{isset($person->tliother)? $person->tliother : old('tliother')}}" class ="input {{$errors->has('tliother')? 'errcol': 'form-control'}}"> 
                      <br>
                  </td>                
                </tr>
                             
               <tr>
                  
                <td>
                  <div id="elementLipellicense">
                  <label class="col-form-label"><strong>
                10b. PEL LICENSE # </strong></label><br><input type="text" name ="lipellicense" style="width: 100%" value="{{isset($person->lipellicense) ? $person->lipellicense : old('lipellicense')}}" class ="input {{$errors->has('lipellicense')? 'errcol': 'form-control'}}">
                </div> 
                </td>
                  <td>
                    <div id="elementOccupation">
                    <label class="col-form-label">
                      <strong>
                        11. Occupation
                      </strong>
                      <a href="instructions#eleven">
                          <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                      </a>
                    </label>
                      <input type="text" style="width: 100%" name = "occupation" 
                      value="{{isset($person->occupation) ? $person->occupation : old('occupation')}}" 
                      class ="input {{$errors->has('occupation')? 'errcol': 'form-control'}}"> 
                    </div>
                  </td>
                  
                  </tr>
                  <tr>
                    <td> 
                      
                      <label class="col-form-label">
                        <strong>
                          12. Aviation employer/Training Org. (Name and Telephone number)
                        </strong>
                        <a href="instructions#twelve">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                        </a>
                      </label>
                      <div id="elementAvemployer">
                      <textarea  style="width: 100%" rows="7" name="avemployer" class ="textarea {{$errors->has('avemployer')? 'errcol': 'form-control'}}" >{{isset($person->avemployer) ? $person->avemployer : old('avemployer')}}</textarea>
                    </div>
                    </td>
                 <td>
                  <div id="elementCertrev">
                  <label class="col-form-label">
                    <strong>
                      13. Has your CAA Airman medical certificate ever been denied, suspended, or revoked?
                    </strong>
                    <a href="instructions#thirteen">
                        <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                    </a>
                  </label>
                  <label>(a)</label>  <input type="radio" name="certrev" value="no" style="margin-left: 20px" {{isset($person->certrev) ? ($person->certrev == "no" ? 'checked' : '') : (old('certrev')=="no" ? 'checked'  : '')}} > 
                       <label for="certrev" class="input {{$errors->has('certrev')? 'errcoll': ''}}">No</label><br>
                         <label>(b)</label> 
                   <input type="radio" name="certrev" value="yes" style="margin-left: 20px" 
                         {{ old('certrev')=="yes" ? 'checked' : ''}} {{isset($person->certrev) ? ($person->certrev == "yes" ? 'checked' : '') : ''}}>
                         <label for="certrev" class="input {{$errors->has('certrev')? 'errcoll': ''}}"> Yes </label>  
                         <br>
                   
                   
                   <span >if yes, give date</span>
                   <input type="date" name = "certd" value="{{isset($person->certd) ? $person->certd : old('certd')}}" class ="input {{$errors->has('certd')? 'errcol': 'form-control'}}">
                   <span >(Provide explanation)</span>
                   <textarea style="width: 100%" name ="explanation" class ="textarea {{$errors->has('explanation')? 'errcol': 'form-control'}}" >{{isset($person->explanation) ? $person->explanation : old('explanation')}}</textarea>
                    </div>
                        </td>
                 
                </tr>
               
              
               
                <tr>
                    <td>
                       <div id="elementTpilot">
                      <label>
                        <strong>
                          14a. Flight time (Civil only)
                        </strong>
                        <a href="instructions#fourteen">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                        </a>
                      </label>
                      <input type="text" name="tpilot" style="width: 100% ; margin-top: 24px" value ="{{isset($person->tpilot) ? $person->tpilot : old('tpilot')}}" class ="input {{$errors->has('tpilot')? 'errcol': 'form-control'}}">
                      </div>
                    </td>
                 <td>
                   <div id="elementTpilotsm">
                  <label>
                    <strong>
                      14b. Total Flight time since the last 6 MONTHS
                    </strong>
                    <a href="instructions#fourteen">
                        <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                    </a>
                  </label>
                   <input type="text" name = "tpilotsm" style="width: 100%" value="{{isset($person->tpilotsm) ? $person->tpilotsm : old('tpilotsm')}}" class ="input {{$errors->has('tpilotsm')? 'errcol': 'form-control'}}">
                 </div>
                  </td>
                </tr>
                <tr>
                <td>
                  <div id="elementDlma">
                  <label>
                    <strong>
                      15a. Date of last CAA medical application
                    </strong>
                    <a href="instructions#fifteen">
                        <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                    </a>
                  </label>
                  <input type="date" name="dlma" value="{{isset($person->dlma) ? $person->dlma : old('dlma') }}" 
                  class ="input {{$errors->has('dlma')? 'errcol': 'form-control'}}">
                   </div>
                     </td>
                    <td>
                      <div id="elementNprioraap">
                      <div style="margin-bottom:55px"><label><strong>15b.</strong></label> <input type ="checkbox" name ="nprioraap" {{ old('nprioraap')=="lnprioraap" ? 'checked': ''}} {{ isset($person->nprioraap) ? ($person->nprioraap=="lnprioraap" ? 'checked' : '') : ''}} value ="lnprioraap">No prior application</div>
                    </div>
                  </td>
                  
                  
                </tr>
              </div>
                <tr><td><div align = "left" style="margin-top:20px">
                  <a href={{route('applname.index')}} class = "btn btn-success">Previous</a>

                </div><label> </label>
                </td>
                <td><div align = "right">
                  <input type="submit" id ="sub" class="btn btn-success"  value="Next"/>
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
  
function toggleStatus() {
   
       $('#elementLipellicense :input').attr('disabled', true);
       $('#elementOccupation :input').attr('disabled', true);
       $('#elementAvemployer :input').attr('disabled', true);
       $('#elementCertrev :input').attr('disabled', true);
       $('#elementTpilot :input').attr('disabled', true);
       $('#elementTpilotsm :input').attr('disabled', true);
       $('#elementDlma :input').attr('disabled', true);
       $('#elementNprioraap :input').attr('disabled', true);
       document.getElementById("sub").focus();
  
}
</script>
<script>
function toggleUnstatus() {
       $('#elementLipellicense :input').removeAttr('disabled');
       $('#elementOccupation :input').removeAttr('disabled');
       $('#elementAvemployer :input').removeAttr('disabled');
       $('#elementCertrev :input').removeAttr('disabled');
       $('#elementTpilot :input').removeAttr('disabled');
       $('#elementTpilotsm :input').removeAttr('disabled');
       $('#elementDlma :input').removeAttr('disabled');
       $('#elementNprioraap :input').removeAttr('disabled');
  
}
</script>
<script>
    function toggleStat() {
           $('#elementLipellicense :input').removeAttr('disabled');
           $('#elementOccupation :input').removeAttr('disabled');
           $('#elementAvemployer :input').removeAttr('disabled');
           $('#elementCertrev :input').removeAttr('disabled');
           $('#elementTpilot :input').attr('disabled', true);
           $('#elementTpilotsm :input').attr('disabled', true);
           $('#elementDlma :input').removeAttr('disabled');
           $('#elementNprioraap :input').removeAttr('disabled');
      
    }
    </script>
@endsection