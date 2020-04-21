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
    
        <div class="col-md-12" >
            <div class="card  polaroided">
                <div class="card-header">
                  <section>
                  <img src="/template/bagasoo_logo.png" height="40"/>
                  <div align="center"><strong>APPLICATION FOR MEDICAL CERTIFICATE</strong></div>
                  </section>
                </div>
              <div class="card-body">		
 
  <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
            <tbody class="appSubSec" >
			  
                <tr >
                 <td colspan ="10" >  
                    <strong>
                    <label for="formClass" > 
                     1. Class of medical certificate applied for:
                    </label>
                    </strong>
                 <label style="margin: 20px">  </label>
				 <label style="margin: 20px">  </label>
                <label style="margin: 20px">  </label>
                <label style="margin: 20px">  </label>
                 </td>
                 <td colspan ="10" >   
                <span style="margin: 20px"><label>1.</label>
                <input type="radio" name="formClass" 
                class="text-right" style="margin: 10px" value="1"
                {{ $person->formClass =="1" ? 'checked' : "disabled='disabled'"}} >
                </span>
                
                <span style="margin: 20px">
                <label for="formClass" >2.</label>
                <input type="radio" name="formClass" value="2"
				{{ $person->formClass == "2" ? 'checked' :"disabled='disabled'"}}
				class="text-right " style="margin: 10px" >
				</span>

                <span style="margin: 20px">
				<label for="formClass" >3.</label>
                <input type="radio" name="formClass" value = "3"
				{{ $person->formClass == "3" ? 'checked' : "disabled ='disabled'"}}
				class="text-right" style="margin: 10px" >
				</span>
                    </td>
                </tr>
                </tbody>
            </table>
			
			<table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                <tr >
                    <th  colspan ="5"  class="t3"> </th>
                </tr>
                <tr  >
                    <td  colspan = "2">
                       <strong><label>2. Name</label></strong><br>
                        <div class="cll">{{$person->lname}}</div>
						
                    <div class="cll">{{$person->fname}}</div>
					
                      
                       <div class="cll">{{$person->mname}}</div>
                                            
                    </td>
                  
							<td   class="t3">
								<strong><label>3. Identification Number:</label></strong>
								<div class="cll">{{$person->pid}}</div>
							</td>
                  <td  >
                        <strong><label for ='ccname'>4. Citizenship:</label></strong>
                        
                        <div class="cll">{{$person->country}}</div> 
						
				    </td>
                </tr>
                 <tr>
                    <td rowspan="3" >
                        <strong><label>5a. Address (Number and Street)</label></strong>
                        <div class="cll">{{$person->paddre}}</div>
                    </td>
                    <td colspan="2" rowspan="3" class="t2">
                        <strong><label>5b. City and State / province</label></strong>
				<div class="cll">{{$person->bstate}}</div>
                    
                    </td>
                </tr>
        		<tr id="t2" >
                    
                  <td  class="t3" >
                            <strong><label>5c. Country and postal code</label></strong><br>
							<div class="cll">{{$person->pcode}}</div>
                    </td>
                  <td  class="t3" >
                           <strong><label>6. Date of birth </label></strong>
                    <div class="cll">{{$person->dob}}</div>
                                                                    
                  </td>
                  
                    <td  class="t3" >
                           <strong><label>7. Hair</label></strong>
                           <div class="cll">{{$person->hair}}</div>
						   
						</td>
                </tr>
                <tr id="t2" >
                    <td  class="t3">
                        <strong><label>5d. Telephone:</label></strong>
                        <div class="cll">{{$person->tfone}}</div>
                    </td>
                  <td  class="t3" >
                        <strong><label>8. EYES</label><br></strong>
                        <div class="cll">{{$person->eyes}}</div>
						  
                    </td>
                   <td class="t3" colspan="4" >
                        <strong><label>9. GENDER</label></strong>
                        <div class="cll">{{$person->gender}}</div>
							
                    </td>
                  </tr>
                  
			</tbody>
			
        </table>
         
        <table class="table table-bordered table-sm table-responsive tab1 appSubSec">
            <tbody class="appSubSec">
                <tr>
                   <th colspan="4" class="t4"> </th>
                </tr>
                <tr ><th colspan="4" class="t4"><strong>10. Types of Licenses you currently hold</strong></th></tr>
                     <tr id="t3">
                    <td  class="t4" >
                    <input type="checkbox" name="linone"  value="yes" {{$person->linone =="yes" ? 'checked': "disabled='disabled'" }}> None<br>
                   <input type="checkbox" name="liairline" value="yes" {{ $person->liairline =="yes" ? 'checked' : "disabled='disabled'"}} > Airline transport<br>
                   <input type="checkbox" name="licommercial" 
                          {{ $person->licommercial=="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> Commercial<br>
                   <input type="checkbox" name="limulticrew"
                          {{ $person->limulticrew=="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> Multi-crew<br>
                  </td >
                  <td class="t4" >
                   <input type="checkbox" name="liatcspecialist" 
                          {{$person->liatcspecialist=="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> ATC specialist<br>
                   <input type="checkbox" name="liflightengineer"
                          {{ $person->liflightengineer=="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> Flight engineer<br>
                   <input type="checkbox" name="liflightnav" 
                          {{ $person->liflightnav=="yes" ? 'checked' : "disabled='disabled'" }}  value="yes"> Flight navigator<br>
                   </td>
                  <td class="t4" >
                    <input type="checkbox" name="liflightinstruc" 
                           {{ $person->liflightinstruc=="yes" ? 'checked' : "disabled='disabled'" }} value="yes"> Flight instructor<br> 
                  <input type="checkbox" name="liprivate" 
                         {{ $person->liprivate=="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> Private<br>
                   <input type="checkbox" name="listudent"
                           {{ $person->listudent=="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> Student<br>
                   </td>
                  <td class="t4" >
                    <input type="checkbox" name="liballon"
                             {{$person->liballon=="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> Balloon<br>
                   <input type="checkbox" name="liglider"
                          {{ $person->liglider =="yes" ? 'checked' : "disabled='disabled'" }} value="yes"> Glider<br>
                   <input type="checkbox" name="liother" 
                          {{ $person->liother =="yes" ? 'checked' : "disabled='disabled'"}} value="yes"> Other
                    <div class="cll">{{$person->tliother}}</div>
                      <br>
                    PEL LICENSE # <div class="cll">{{$person->lipellicense}}</div>
                     
                    </td>                
                </tr>              
               <tr  >
                  <td class="t3"><strong><label>11. Occupation</label></strong><div class="cll">{{$person->occupation}}</div>
                    </td>
                    <td class="t3"> <strong><label>12. Aviation employer (name and telephone number)</label></strong>
                      <div class="cll">{{$person->avemployer}}</div></td>
                 <td colspan="2" class="t4"><strong><label>13. Has your CAA Airman medical certificate ever been denied, suspended, or revoked?</label></strong>
                         <label>(a)</label> 
                   <input type="radio" name="certrev" value="yes" style="margin-left: 20px" 
                         {{ $person->certrev =="yes" ? 'checked' : "disabled='disabled'"}}>
                         <label for="certrev"> Yes </label>  <br>
                   
                   
                   if yes, give date
                   <div class="cll">{{$person->certd}}</div><br>(Provide explanation)
                   <div class="cll">{{$person->explanation}}</div><br>
                       <label>(b)</label>  <input type="radio" name="certrev" value="no" style="margin-left: 20px" {{ $person->certrev =="no" ? 'checked'  : "disabled='disabled'"}}> 
                       <label for="certrev" >No</label> <br>
                        </td>
                 
                </tr>
               
              
               
                <tr id="t3" >
                    <td class="t3"><strong><label>14a. Total pilot time (Civil only)</label></strong>
                      <div class="cll">{{$person->tpilot}}</div>
                    </td>
                 <td class="t3"><strong><label>14b. Total pilot time since the last 6 MONTHS</label></strong>
                   <div class="cll">{{$person->tpilotsm}}</div>
                  </td>
                <td class="t4"><strong><label>15a. Date of last CAA medical application</label></strong><div class="cll">{{$person->dlma}}</div>
                     </td>
                    <td class="t4" colspan="2"><strong><label>15b. No prior application</label></strong> <input type ="checkbox" name ="nprioraap" {{ $person->nprioraap =="lnprioraap" ? 'checked': "Disabled='disabled'"}}  value ="lnprioraap">
                  </td>
                  
                  
                </tr>
        
            </tbody>
        </table>

        <table class="table table-bordered table-sm table-responsive tab1 appSubSec">
            <tbody class="appSubSec">
                <tr>
                    <th class="t5" colspan="8">
                       
                    </th>
                </tr>
                   <td class="t5" colspan="6"><strong>16. Daily or Regular Use: Non-Prescription or Prescription</strong><br>
                             <input type="radio" value="yes" name="daipre" style="margin-left: 20px" 
                             {{ $person->daipre =="yes" ? 'checked' : "disabled='disabled'"}}> 
                             <label for ="daipre" class = "input {{$errors->has('daipre') ? 'errcoll' : ''}}">
                              Yes <i>(List Below)</i></label>
                             <input type="radio" value="no" name="daipre" style="margin-left: 20px" 
                             {{ $person->daipre =="no" ? 'checked' : "disabled'='disabled"}}> 
                             <label for ="daipre" >No</label>
                    </td>
              <td class="t5" colspan="2" align="center">
                <br>
                <Label>Previously reported</label>
              </td>
          <tr id="t4" >
                        <td class="t5" colspan ="6"><div class="cll">{{$person->precrip1 }}</div></td>

                      <td class="t5" colspan="2" align="center">
                      <input type="radio" name="drug1" style="margin-left: 20px" value="yes" 
                      {{ $person->drug1 =="yes" ? 'checked' : "disabled='disabled'"}}> <label>Yes</label>
                      <input type="radio" name="drug1" style="margin-left: 20px" value="no"
                       {{ $person->drug1 =="no" ? 'checked' : "disabled='disabled'"}}> <label>No</label>
                    </td>
                        
                    </tr>
                    <tr id="t4" >
                        <td class="t5" colspan ="6"><div class="cll">{{$person->precrip2 }}</div>
                        </td>
                        <td class="t5" colspan="2" align="center">
                        <input type="radio" name="drug2" style="margin-left: 20px" value="yes"
                        {{ $person->drug2 =="yes" ? 'checked' : "disabled='disabled'"}}> <label>Yes</label>
                          <input type="radio" name="drug2" style="margin-left: 20px" value="no"
                          {{ $person->drug2 =="no" ? 'checked' : "disabled='disabled'"}}>
                           <label>No</label>
                    </td>
                    </tr>
                  
                      <tr id="t4" >
                        <td class="t5"  colspan="6" ><div class="cll">{{$person->precrip3 }}</div></td>
                        <td class="t5" colspan="2" align="center">
                        <input type="radio" name="drug3" style="margin-left: 20px" value="yes"
                        {{ $person->drug3 =="yes" ? 'checked' : "disabled='disabled'"}}> <label>Yes</label>
                          <input type="radio" name="drug3" style="margin-left: 20px" value="no"
                          {{ $person->drug3 =="no" ? 'checked' : "disabled='disabled'"}}> <label>No</label>
                    </td>
                    </tr>              
              
              <tr id="t4" >
                    <td class="t5" colspan="8">
                        <strong>
                           17. Do you use near vision contact lenses when flying? </strong>  
                      <input type="radio" name= "lense" value="yes" style="margin-left: 20px" {{ $person->lense =="yes" ? 'checked' : "disabled='disabled'"}}>  
                      <label for ="lense" class = "input {{$errors->has('lense') ? 'errcoll' : ''}}">Yes </label>
                      <input type="radio" name= "lense" value="no" style="margin-left: 20px"  {{ $person->lense =="no" ? 'checked' : "disabled='disabled'"}}> 
                      <label for ="lense" class = "input {{$errors->has('lense') ? 'errcoll' : ''}}">No</label>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" colspan="8">
                      <strong>18a. 
                      
                            Medical history: Have you ever been diagnosed with or had, or do you presently have, any 
              of the following?</strong><br> 
              <i>Answer “Yes” or “No” for every condition listed below. In the EXPLANATIONS box below,
              you may note “PREVIOUSLY REPORTED, NO CHANGE” only if the explanation of the condition 
              was reported on a previous application for an airman medical certificate and there has been 
              no change in your condition. (See instructions for completion):</i>
                        
                    </td>
                </tr>
                    
                <!--tr id="t4" >
                     <td class="t5"></td>
                    <td class="col-xs-2 t5"></td>
                    <td class="t5" colspan="">CONDITION</td>
                    <td class="t5"></td>
                     <td class="col-xs-2 t5"></td>
                    <td class="t5" colspan="">CONDITION</td>
                </tr-->
                <tr id="t4">
                    <td width="5%" align="center">#</td>
                    <td width="5%" align="center">Yes</td>
                    <td width="5%" align="center">No</td>
                    <td width="35%">CONDITION</td>
                    <td width="5%" align="center">#</td>
                    <td width="5%" align="center">Yes</td>
                    <td width="5%" align="center">No</td>
                    <td width="35%">CONDITION</td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">a</td>
                    <td class="t5" align="center">
                        <input type="radio" name="headache" value="yes"
                        {{$person->headache =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="headache" value="no"
                        {{$person->headache =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('headache') ? 'errcoll' : ''}}">Frequent or severe headaches?</span>
                    </td>
                    <td class="t5" align="center">l</td>
                    <td class="t5" align="center">
                        <input type="radio" name="epilepsy" value="yes"
                        {{$person->epilepsy =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="epilepsy" value="no"
                        {{$person->epilepsy =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" colspan="">
                        <span >Neurological disorders, epilepsy, seizures, stroke, paralysis, etc</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">b</td>
                    <td class="t5" align="center">
                        <input type="radio" name="dizziness" value="yes"
                        {{$person->dizziness =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="dizziness" value="no"
                        {{$person->dizziness =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Dizziness or fainting spell?</span>
                    </td>
                    <td class="t5" align="center">m</td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="yes"
                        {{$person->depreession =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="no"
                        {{$person->depreession =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5">
                        <span >Mental disorders of any sort, depression, anxiety, etc</span>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" align="center">c</td>
                    <td class="t5" align="center">
                        <input type="radio" name="unconsciousness" value="yes"
                        {{$person->unconsciousness =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="unconsciousness" value="no"
                        {{$person->unconsciousness =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Unconsciousness for any reason?</span>
                    </td>
                    <td class="t5" align="center">n</td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="yes"
                         {{$person->motionSickness =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="no"
                         {{$person->motionSickness =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5"><span >Motion sickness requiring medication?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">d</td>
                    <td class="t5" align="center">
                        <input type="radio" name="glasses" value="yes"
                        {{$person->glasses =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="glasses" value="no"
                         {{$person->glasses =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Eye or vision trouble except for glasses?</span>         
                    </td>
                    <td class="t5" align="center">o</td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="yes"
                        {{$person->discharge =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="no"
                        {{$person->discharge =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Medical discharge from any organization?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">e</td>
                    <td class="t5" align="center">
                        <input type="radio" name="allergy" value="yes"
                        {{$person->allergy =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="allergy" value="no"
                        {{$person->allergy =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5">
                        <span >Hay fever or allergy?</span>
                    </td>
                    <td class="t5" align="center">p</td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="yes"
                        {{$person->rejection =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="no"
                        {{$person->rejection =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5"><span >Medical rejection by any organization?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">f</td>
                    <td class="t5" align="center">
                        <input type="radio" name="asthma" value="yes"
                        {{$person->asthma =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="asthma" value="no"
                        {{$person->asthma =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Asthma or lung disease?</span>
                    </td>
                    <td class="t5" align="center">q</td>
                    <td class="t5" align="center">
                        <input type="radio" name="insurance" value="yes"
                        {{$person->insurance =='yes' ? 'checked' : "disabled='disabled'"}} >
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="insurance" value="no"
                         {{$person->insurance =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5"><span >Rejection for life or medical insurance?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">g</td>
                    <td class="t5" align="center">
                         <input type="radio" name="vascular" value="yes"
                         {{$person->vascular =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="vascular" value="no"
                         {{$person->vascular =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Heart or vascular trouble?</span>
                    </td>
                    <td class="t5" align="center">r</td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="yes"
                         {{$person->admission =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="no"
                         {{$person->admission =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('admission') ? 'errcoll' : ''}}">Admission to hospital?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">h</td>
                    <td class="t5" align="center">
                        <input type="radio" name="bloodPressure" value="yes"
                        {{$person->bloodPressure =='yes' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="bloodPressure" value="no"
                        {{$person->bloodPressure =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >High or low blood pressure?</span>
                    </td>
                    <td class="t5" align="center">s</td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="yes"
                        {{$person->alcohol =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="no"
                        {{$person->alcohol =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5"><span >Alcohol dependence or abuse; failed an alcohol test?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">i</td>
                    <td class="t5" align="center">
                         <input type="radio" name="stomach" value="yes"
                         {{$person->stomach =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="stomach" value="no"
                         {{$person->stomach =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Stomach, liver, or intestinal trouble?</span>
                    </td>
                    <td class="t5" align="center">t</td>
                    <td class="t5" align="center">
                         <input type="radio" name="failedTest" value="yes"
                         {{$person->failedTest =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="failedTest" value="no"
                        {{$person->failedTest =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Substance dependence, or substance abuse, or use of illegal
                            substances in the last 2 years, or failed a drug test ever?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">j</td>
                    <td class="t5" align="center">
                        <input type="radio" name="kidney" value="yes"
                         {{$person->kidney =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="kidney" value="no"
                         {{$person->kidney =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('kidney') ? 'errcoll' : ''}}">Kidney stone or blood in the urine?</span>
                    </td>
                    <td class="t5" align="center">u</td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="yes"
                        {{$person->surgery =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="no"
                        {{$person->surgery =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Other illness disability or surgery?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">k</td>
                    <td class="t5" align="center">
                        <input type="radio" name="suicide" value="yes"
                         {{$person->suicide =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="suicide" value="no"
                         {{$person->suicide =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Suicide attempt?</span>
                    </td>
                    <td class="t5" align="center">v</td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="yes"
                        {{$person->diabetes =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="no"
                        {{$person->diabetes =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5"><span >Diabetes?</span></td>
                </tr>
                  <tr id="t4" >
                    <td class="t5" colspan="8">
                      <strong>18b.</strong>  
                      <b>
                            Family medical history: Do any of the following pertain to your family’s medical history?
                        </b>
                    </td>
                </tr>
                    
                <!--tr id="t4" >
                     <td class="t5"></td>
                    <td class="col-xs-2 t5"></td>
                    <td class="t5" colspan="">CONDITION</td>
                    <td class="t5"></td>
                     <td class="col-xs-2 t5"></td>
                    <td class="t5" colspan="">CONDITION</td>
                </tr-->
                <tr id="t4">
                    <td width="5%" align="center">#</td>
                    <td width="5%" align="center">Yes</td>
                    <td width="5%" align="center">No</td>
                    <td width="35%">CONDITION</td>
                    <td width="5%" align="center">#</td>
                    <td width="5%" align="center">Yes</td>
                    <td width="5%" align="center">No</td>
                    <td width="35%">CONDITION</td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">a</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdisorder" value="yes"
                        {{$person->fdisorder =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdisorder" value="no"
                        {{$person->fdisorder =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span >Inherited disorders?</span>
                    </td>
                    <td class="t5" align="center">b</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="yes"
                        {{$person->fglaucoma =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="no"
                        {{$person->fglaucoma =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" colspan="">
                        <span >Glaucoma?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">c</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="yes"
                        {{$person->fmental =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="no"
                        {{$person->fmental =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Mental illness?</span>
                    </td>
                    <td class="t5" align="center">d</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="yes"
                        {{$person->fcholesterol =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="no"
                        {{$person->fcholesterol =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5">
                        <span >High Cholesterol levels?</span>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" align="center">e</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="yes"
                        {{$person->fepilepsy =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="no"
                        {{$person->fepilepsy =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Epilepsy?</span>
                    </td>
                    <td class="t5" align="center">f</td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="yes"
                         {{$person->fallergies =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="no"
                         {{$person->fallergies =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5"><span "disabled='disabled'">Allergies/asthma/eczema?</span></td>
                </tr>
                   <tr id="t4" >
                    <td class="t5" align="center">g</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="yes"
                        {{$person->fdiabetes =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="no"
                        {{$person->fdiabetes =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5">
                        <span >Diabetes?</span>
                    </td>
                    <td class="t5" align="center">h</td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="yes"
                         {{$person->ftuberculosis =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="no"
                         {{$person->ftuberculosis =='no' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5"><span >Tuberculosis?</span></td>
                </tr>
                <tr id="t4">
                  <td class="t5" colspan="8">
                    <b>18c. Explanations</b>
                    <div class="cll">{{$person->medexplanation }}</div>
                   </td>
                    
                </tr>
        
            </tbody>
        </table>
             <table class="table table-bordered table-sm table-responsive" >
                <tbody >
                    <tr>
                        <th colspan="3">
                            <label>19. Conviction and/or administrative action history</label>
                            </th>
                    </tr>
                   

                    <tr >
                        <td class="t8 col-xs-7" ><label>19a.</label> <label>Have you ever had (1) 
            any convictions involving driving while intoxicated by, while impaired by, or while under
the influence of alcohol or a drug; or (2) any convictions or administrative actions involving an offense(s) which
resulted in the denial, suspension, cancellation, or revocation of driving privileges or which resulted in attendance at
an educational or rehabilitation program?</label><br>
                                <input type="radio" name ="alcho" value= "yes" 
                                {{ $person->alcho =="yes" ? 'checked' : "disabled='disabled'" }}>  <label style="margin-right: 20px" >Yes</label>
                                <input type="radio" name ="alcho" value="no" {{ $person->alcho =="no" ? 'checked' : "disabled='disabled'" }}> <label 
                                >No</label>
                            </td>
                        
                        <td class="t8 " colspan="2"><label>19b.</label><label>Have you ever had any non-traffic convictions 
            (misdemeanours or felonies)?</label><br>
                        <input type="radio" name = "nontraf" value="yes"
                        {{$person->nontraf =="yes" ? 'checked' : "disabled='disabled'"}}>  <label style="margin-right: 20px" >Yes</label>
                                <input type="radio" name = "nontraf" value="no"
                                {{$person->nontraf =="no" ? 'checked' : "disabled='disabled'"}}> <label >No</label>

                        </td>
                    </tr>
                <tr id="t7" >
                    <td class="t8" colspan="2"><label>19c. Explanations (see instructions)</label>
                        <div >{{$person->convicexpl }}</div>
                    </td>
                    
                </tr>
        
                </tbody>
            </table>


            <table class="table-responsive table-striped table-bordered" >
                <tbody >
                    
                    <tr >
                        <td colspan="3">
                      <strong>20. Visit to health professional within the last 3 years?</strong><br>
                            <input type="radio" name ="vhealth" value="Yes"
                            {{$person->vhealth =="yes" ? 'checked' : "disabled='disabled'"}}> 
                            <label style="margin-right: 20px" >Yes <i>(Explain Below)</i>
                            </label>
                            <input type="radio" name ="vhealth" value="no"
                            {{$person->vhealth =="no" ? 'checked' : "disabled='disabled'"}}> 
                            <label >No</label>
                        </td>
                        </tr>
                    <tr >
                        <td ><label>Date</label></td>
                        <td ><label>Name, Address & Type of Health Professional Consulted</label></td>
                        <td ><label>Reason</label></td>
                    </tr>
                    <tr>
                        <td class="t6"><div >{{$person->dvprofesional1 }}</div></td>
                        <td class="t6">
                          <div class="cll">{{$person->vhealth1 }}</div>
                        <td class="t6">
                        <div >{{$person->vrhealth1 }}</div>
                      </td>
                    </tr>
                    <tr >
                        <td class="t6"><div >{{$person->dvprofesional2 }}</div></td>
                        <td class="t6"><div >{{$person->vhealth2 }}</div>
                        <td class="t6"><div >{{$person->vrhealth2 }}</div></td>
                    </tr>
                    <tr >
                        <td class="t6"><div >{{$person->dvprofesional3 }}</div></td>
                       <td class="t6"><div >{{$person->vhealth3 }}</div>
                        <td class="t6"><div >{{$person->vrhealth3 }}</div>
                        </td>
                    </tr>
          
                </tbody>
            </table>

            <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                    
                        

                <tr >
                    <td colspan = "2"><strong>21. I hereby certify that all statements and answers provided by me on this application are complete and true to the best of my knowledge, and I
agree that they are to be considered part of the basis for issuance of any CAA licence and certificate to me.</strong></td>
                </tr>
                <tr>
                    <td ><label>1. Date<br> <div class="cll">{{$person->dacknowledge }}</div></label>
                    </td>
                    
                    <td >
                        <label>2. Signature of applicant</label>
                      <div class="cll">{{$person->signature }}</div>
                    </td>
                </tr>
                  <tr >
                    <td  class="t9" colspan="4"><span>CAA Form 548 [c]2018</span></td>
                </tr>
        
            </tbody>
        </table>
   <div align = "right">
      <button onclick="myFunction()" id = "myButton" class="button" >Print</button>
      </div>
    
      </div>

      <script>
        function myFunction() {
           document.getElementById('myButton').className = "printbutton";
          window.print();
           document.getElementById('myButton').className = "button";
          
        }
        </script>
     </div>
    </div>
          </div>
      </div>
    </div>
    </div>
    @endsection
    