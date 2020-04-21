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
    
        <div class="col-md-10" >
            <div class="card  polaroided">
                <div class="card-header">
                  <section>
                  <img src="/template/bagasoo_logo.png" height="40"/>
                  <div align="center"><strong>APPLICATION FOR MEDICAL CERTIFICATE</strong></div>
                  </section>
                </div>
              <div class="card-body">		
		
         
 
 
  <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
            <tbody class="appSubSec">
			   <tr><th colspan="10" class="t3"> </th></tr>
                <tr id="t2"  >
                 <td colspan="6" class="">  
                 <label for="formClass" class=""> 1. Class of medical certificate applied for:</label><label style="margin: 20px">  </label>
				 <label style="margin: 20px">  </label>
		<label style="margin: 20px">  </label>
		<label style="margin: 20px">  </label>   
		<span style="margin: 20px"><label  class="input {{$errors->has('formClass')? 'errcoll': ''}}">1.</label>
                   <input type="radio" name="formClass" 
				   class="text-right" style="margin: 10px" value="1"
				    {{ $person->formClass =="1" ? 'checked' : ''}} >
					</span>
                
				<span style="margin: 20px"><label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': ''}}">2.</label>
                  
                <input type="radio" name="formClass" value="2"
				{{ $person->formClass =="2" ? 'checked' :''}}
				class="text-right " style="margin: 10px" >
				</span>

                <span style="margin: 20px">
				<label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': ''}}">3.</label>
                  
                <input type="radio" name="formClass" value="3"
				{{ $person->formClass =="3" ? 'checked' : ''}}
				class="text-right" style="margin: 10px" >
				</span>
                    </td>
                </tr>
                </tbody>
            </table>
			
			<table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                <tr id="t2">
                    <th  colspan ="10"  class="t3"> </th>
                </tr>
                <tr id="t2" >
                    <td  colspan ="5" class="t3">
                       <label>2. Name</label><br>
                        <input type="text" placeholder="Last Name" name="lname" value="{{$person->lname}}" 
						class ="input {{$errors->has('lname')? 'errcol': ''}}">
                     <input type="text" placeholder="First Name" name="fname" value="{{$person->fname}}" 
					 class ="input {{$errors->has('fname')? 'errcol': ''}}"> 
                      
                        <input type="text" placeholder="Middle Name" name="mname" value="{{$person->mname}}" 
						class ="input {{$errors->has('mname')? 'errcol': ''}}"> 
                                            
                    </td>
                  
							<td   class="t3">
								<label>3. Identification Number:</label>
								<input type="text" name="pid" value="{{$person->pid}}" 
								class ="input {{$errors->has('pid')? 'errcol': ''}}">
							</td>
                  <td  class="t3">
                        <label for ='ccname'>4. Citizenship:</label>
                        
                        <input type="text" name="country" value ="{{$person->country}}" > 
						
				  </td>
                </tr>
                 <tr>
                    <td colspan="2" rowspan="3" class="t3">
                        <label>5a. Address (Number and Street)</label>
                        <textarea placeholder="Enter your current address" style="width: 100%" rows="5" name="paddre" class ="textarea {{$errors->has('paddre')? 'errcol': ''}}" >{{$person->paddre}}</textarea>
                    </td>
                    <td colspan="2" rowspan="3" class="t2">
                        <label>5b. City and State / province</label>
				<textarea placeholder="Enter your state or province" style="width: 100%" rows="5" name="bstate" class ="textarea {{$errors->has('bstate')? 'errcol': ''}}" > {{$person->bstate}}</textarea>
                    
                    </td>
                </tr>
        		<tr id="t2" >
                    
                  <td  class="t3" >
                            <label>5c. Country and postal code</label><br>
							<input type="text" name="pcode" value="{{$person->pcode}}" class ="input {{$errors->has('pcode')? 'errcol': ''}}">
                    </td>
                  <td  class="t3" >
                           <label>6. Date of birth </label>
                    <input type="date" name="dob" value="{{$person->dob}}" class ="input {{$errors->has('dob')? 'errcol': ''}}">
                                                                    
                  </td>
                  
                    <td  class="t3" >
                           <label>7. Hair</label>
                           <input type="text" name ="hair" value="{{$person->hair}}" >
						   
						</td>
                </tr>
                <tr id="t2" >
                    <td  class="t3">
                        <label>5d. Telephone:</label>
                        <input type="text" name="tfone" value="{{$person->tfone}}" class ="input {{$errors->has('tfone')? 'errcol': ''}}">
                    </td>
                  <td  class="t3" >
                        <label>8. EYES</label><br>
                        <input type="text" name="eyes" value="{{$person->eyes}}">
						  
                    </td>
                   <td class="t3" colspan="4" >
                        <label>9. GENDER</label>
                        <input type="text" name="gender" value="{{$person->gender}}"    >
							
                    </td>
                  </tr>
                  
			</tbody>
			
        </table>
         
        <table class="table table-bordered table-sm table-responsive tab1 appSubSec">
            <tbody class="appSubSec">
                <tr>
                   <th colspan="4" class="t4"> </th>
                </tr>
                <tr ><th colspan="4" class="t4">10. Types of Licenses you currently hold</th></tr>
                     <tr id="t3">
                    <td  class="t4" >
                    <input type="checkbox" name="linone"  value="yes" {{$person->linone =="yes" ? 'checked': '' }}> None<br>
                   <input type="checkbox" name="liairline" value="yes" {{ $person->liairline =="yes" ? 'checked' : ''}} > Airline transport<br>
                   <input type="checkbox" name="licommercial" 
                          {{ $person->licommercial=="yes" ? 'checked' : ''}} value="yes"> Commercial<br>
                   <input type="checkbox" name="limulticrew"
                          {{ $person->limulticrew=="yes" ? 'checked' : ''}} value="yes"> Multi-crew<br>
                  </td >
                  <td class="t4" >
                   <input type="checkbox" name="liatcspecialist" 
                          {{$person->liatcspecialist=="yes" ? 'checked' : ''}} value="yes"> ATC specialist<br>
                   <input type="checkbox" name="liflightengineer"
                          {{ $person->liflightengineer=="yes" ? 'checked' : ''}} value="yes"> Flight engineer<br>
                   <input type="checkbox" name="liflightnav" 
                          {{ $person->liflightnav=="yes" ? 'checked' : '' }}  value="yes"> Flight navigator<br>
                   </td>
                  <td class="t4" >
                    <input type="checkbox" name="liflightinstruc" 
                           {{ $person->liflightinstruc=="yes" ? 'checked' : '' }} value="yes"> Flight instructor<br> 
                  <input type="checkbox" name="liprivate" 
                         {{ $person->liprivate=="yes" ? 'checked' : ''}} value="yes"> Private<br>
                   <input type="checkbox" name="listudent"
                           {{ $person->listudent=="yes" ? 'checked' : ''}} value="yes"> Student<br>
                   </td>
                  <td class="t4" >
                    <input type="checkbox" name="liballon"
                             {{$person->liballon=="yes" ? 'checked' : ''}} value="yes"> Balloon<br>
                   <input type="checkbox" name="liglider"
                          {{ $person->liglider =="yes" ? 'checked' : '' }} value="yes"> Glider<br>
                   <input type="checkbox" name="liother" 
                          {{ $person->liother =="yes" ? 'checked' : ''}} value="yes"> Other
                    <input type="text" name="tliother" style="width: 100%" value="{{$person->tliother}}" class ="input {{$errors->has('tliother')? 'errcol': ''}}"> 
                      <br>
                    PEL LICENSE # <input type="text" name ="lipellicense" style="width: 100%" value="{{$person->lipellicense}}" class ="input {{$errors->has('lipellicense')? 'errcol': ''}}"> 
                     
                    </td>                
                </tr>              
               <tr  >
                  <td class="t3"><label>11. Occupation</label><input type="text"name = "occupation" value="{{$person->occupation}}" class ="input {{$errors->has('occupation')? 'errcol': ''}}"> 
                    </td>
                    <td class="t3"> <label>12. Aviation employer (name and telephone number)</label>
                      <textarea  style="width: 100%" rows="5" name="avemployer" class ="textarea {{$errors->has('avemployer')? 'errcol': ''}}" > {{$person->avemployer}}</textarea></td>
                 <td colspan="2" class="t4"><label>13. Has your CAA Airman medical certificate ever been denied, suspended, or revoked?</label>
                         <label>(a)</label><b> 
                   <input type="radio" name="certrev" value="yes" style="margin-left: 20px" 
                         {{ $person->certrev =="yes" ? 'checked' : ''}}>
                         <label for="certrev" class="input {{$errors->has('certrev')? 'errcoll': ''}}"> Yes </label>  <br>
                   
                   
                   if yes, give date
                   <input type="date" name = "certd" value="{{$person->certd}}" class ="input {{$errors->has('certd')? 'errcol': ''}}"><br>(Provide explanation)
                   <textarea style="width: 100%" name ="explanation" class ="textarea {{$errors->has('explanation')? 'errcol': ''}}" > {{$person->explanation}}</textarea></b><br>
                       <label>(b)</label>  <input type="radio" name="certrev" value="no" style="margin-left: 20px" {{ $person->certrev =="no" ? 'checked'  : ''}}> 
                       <label for="certrev" class="input {{$errors->has('certrev')? 'errcoll': ''}}">No</label> <br>
                        </td>
                 
                </tr>
               
              
               
                <tr id="t3" >
                    <td class="t3"><label>14a. Total pilot time (Civil only)</label>
                      <input type="text" name="tpilot" style="width: 100%" value ="{{$person->tpilot}}" class ="input {{$errors->has('tpilot')? 'errcol': ''}}">
                    </td>
                 <td class="t3"><label>14b. Total pilot time since the last 6 MONTHS</label>
                   <input type="text" name = "tpilotsm" style="width: 100%" value="{{$person->tpilotsm}}" class ="input {{$errors->has('tpilotsm')? 'errcol': ''}}">
                  </td>
                <td class="t4"><label>15a. Date of last CAA medical application</label><input type="date" name="dlma" value="{{$person->dlma}}" class ="input {{$errors->has('dlma')? 'errcol': ''}}">
                     </td>
                    <td class="t4" colspan="2"><label>15b. No prior application</label> <input type ="checkbox" name ="nprioraap" {{ $person->nprioraap =="lnprioraap" ? 'checked': ''}}  value ="lnprioraap">
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
                   <td class="t5" colspan="6"><label>16. Daily or Regular Use: Non-Prescription or Prescription</label><br>
                             <input type="radio" value="yes" name="daipre" style="margin-left: 20px" 
                             {{ $person->daipre =="yes" ? 'checked' : ''}}> 
                             <label for ="daipre" class = "input {{$errors->has('daipre') ? 'errcoll' : ''}}">
                              Yes <i>(List Below)</i></label>
                             <input type="radio" value="no" name="daipre" style="margin-left: 20px" 
                             {{ $person->daipre =="no" ? 'checked' : ''}}> 
                             <label for ="daipre" class = "input {{$errors->has('daipre') ? 'errcoll' : ''}}">No</label>
                    </td>
              <td class="t5" colspan="2" align="center">
                <br>
                <Label>Previously reported</label>
              </td>
          <tr id="t4" >
                        <td class="t5" colspan ="6"><input type="text" name ="precrip1" style="width: 100%"
                           value="{{$person->precrip1 }}" class ="input {{$errors->has('precrip1')? 'errcol': ''}}"></td>

                      <td class="t5" colspan="2" align="center">
                      <input type="radio" name="drug1" style="margin-left: 20px" value="yes" 
                      {{ $person->drug1 =="yes" ? 'checked' : ''}}> <label>Yes</label>
                      <input type="radio" name="drug1" style="margin-left: 20px" value="no"
                       {{ $person->drug1 =="no" ? 'checked' : ''}}> <label>No</label>
                    </td>
                        
                    </tr>
                    <tr id="t4" >
                        <td class="t5" colspan ="6"><input type="text" name ="precrip2" style="width: 100%" 
                          value="{{$person->precrip2 }}" class ="input {{$errors->has('precrip2')? 'errcol': ''}}">
                        </td>
                        <td class="t5" colspan="2" align="center">
                        <input type="radio" name="drug2" style="margin-left: 20px" value="yes"
                        {{ $person->drug2 =="yes" ? 'checked' : ''}}> <label>Yes</label>
                          <input type="radio" name="drug2" style="margin-left: 20px" value="no"
                          {{ $person->drug2 =="no" ? 'checked' : ''}}>
                           <label>No</label>
                    </td>
                    </tr>
                  
                      <tr id="t4" >
                        <td class="t5"  colspan="6" ><input type="text" name ="precrip3" style="width: 100%"
                           value="{{$person->precrip3 }}" class ="input {{$errors->has('precrip3')? 'errcol': ''}}"></td>
                        <td class="t5" colspan="2" align="center">
                        <input type="radio" name="drug3" style="margin-left: 20px" value="yes"
                        {{ $person->drug3 =="yes" ? 'checked' : ''}}> <label>Yes</label>
                          <input type="radio" name="drug3" style="margin-left: 20px" value="no"
                          {{ $person->drug3 =="no" ? 'checked' : ''}}> <label>No</label>
                    </td>
                    </tr>              
              
              <tr id="t4" >
                    <td class="t5" colspan="8">
                        <label>
                           17. Do you use near vision contact lenses when flying? </label>  
                      <input type="radio" name= "lense" value="yes" style="margin-left: 20px" {{ $person->lense =="yes" ? 'checked' : ''}}>  
                      <label for ="lense" class = "input {{$errors->has('lense') ? 'errcoll' : ''}}">Yes </label>
                      <input type="radio" name= "lense" value="no" style="margin-left: 20px"  {{ $person->lense =="no" ? 'checked' : ''}}> 
                      <label for ="lense" class = "input {{$errors->has('lense') ? 'errcoll' : ''}}">No</label>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" colspan="8">
                      <label>18a. 
                      
                            Medical history: Have you ever been diagnosed with or had, or do you presently have, any 
              of the following?</label> 
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
                        {{$person->headache =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="headache" value="no"
                        {{$person->headache =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('headache') ? 'errcoll' : ''}}">Frequent or severe headaches?</span>
                    </td>
                    <td class="t5" align="center">l</td>
                    <td class="t5" align="center">
                        <input type="radio" name="epilepsy" value="yes"
                        {{$person->epilepsy =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="epilepsy" value="no"
                        {{$person->epilepsy =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('epilepsy') ? 'errcoll' : ''}}">Neurological disorders, epilepsy, seizures, stroke, paralysis, etc</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">b</td>
                    <td class="t5" align="center">
                        <input type="radio" name="dizziness" value="yes"
                        {{$person->dizziness =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="dizziness" value="no"
                        {{$person->dizziness =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('dizziness') ? 'errcoll' : ''}}">Dizziness or fainting spell?</span>
                    </td>
                    <td class="t5" align="center">m</td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="yes"
                        {{$person->depreession =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="no"
                        {{$person->depreession =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('depreession') ? 'errcoll' : ''}}">Mental disorders of any sort, depression, anxiety, etc</span>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" align="center">c</td>
                    <td class="t5" align="center">
                        <input type="radio" name="unconsciousness" value="yes"
                        {{$person->unconsciousness =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="unconsciousness" value="no"
                        {{$person->unconsciousness =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('unconsciousness') ? 'errcoll' : ''}}">Unconsciousness for any reason?</span>
                    </td>
                    <td class="t5" align="center">n</td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="yes"
                         {{$person->motionSickness =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="no"
                         {{$person->motionSickness =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('motionSickness') ? 'errcoll' : ''}}">Motion sickness requiring medication?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">d</td>
                    <td class="t5" align="center">
                        <input type="radio" name="glasses" value="yes"
                        {{$person->glasses =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="glasses" value="no"
                         {{$person->glasses =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('glasses') ? 'errcoll' : ''}}">Eye or vision trouble except for glasses?</span>         
                    </td>
                    <td class="t5" align="center">o</td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="yes"
                        {{$person->discharge =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="no"
                        {{$person->discharge =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('discharge') ? 'errcoll' : ''}}">Medical discharge from any organization?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">e</td>
                    <td class="t5" align="center">
                        <input type="radio" name="allergy" value="yes"
                        {{$person->allergy =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="allergy" value="no"
                        {{$person->allergy =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('allergy') ? 'errcoll' : ''}}">Hay fever or allergy?</span>
                    </td>
                    <td class="t5" align="center">p</td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="yes"
                        {{$person->rejection =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="no"
                        {{$person->rejection =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('rejection') ? 'errcoll' : ''}}">Medical rejection by any organization?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">f</td>
                    <td class="t5" align="center">
                        <input type="radio" name="asthma" value="yes"
                        {{$person->asthma =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="asthma" value="no"
                        {{$person->asthma =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('asthma') ? 'errcoll' : ''}}">Asthma or lung disease?</span>
                    </td>
                    <td class="t5" align="center">q</td>
                    <td class="t5" align="center">
                        <input type="radio" name="insurance" value="yes"
                        {{$person->insurance =='yes' ? 'checked' : ''}} >
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="insurance" value="no"
                         {{$person->insurance =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('insurance') ? 'errcoll' : ''}}">Rejection for life or medical insurance?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">g</td>
                    <td class="t5" align="center">
                         <input type="radio" name="vascular" value="yes"
                         {{$person->vascular =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="vascular" value="no"
                         {{$person->vascular =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('vascular') ? 'errcoll' : ''}}">Heart or vascular trouble?</span>
                    </td>
                    <td class="t5" align="center">r</td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="yes"
                         {{$person->admission =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="no"
                         {{$person->admission =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('admission') ? 'errcoll' : ''}}">Admission to hospital?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">h</td>
                    <td class="t5" align="center">
                        <input type="radio" name="bloodPressure" value="yes"
                        {{$person->bloodPressure =='yes' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="bloodPressure" value="no"
                        {{$person->bloodPressure =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('bloodPressure') ? 'errcoll' : ''}}">High or low blood pressure?</span>
                    </td>
                    <td class="t5" align="center">s</td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="yes"
                        {{$person->alcohol =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="no"
                        {{$person->alcohol =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('alcohol') ? 'errcoll' : ''}}">Alcohol dependence or abuse; failed an alcohol test?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">i</td>
                    <td class="t5" align="center">
                         <input type="radio" name="stomach" value="yes"
                         {{$person->stomach =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="stomach" value="no"
                         {{$person->stomach =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('stomach') ? 'errcoll' : ''}}">Stomach, liver, or intestinal trouble?</span>
                    </td>
                    <td class="t5" align="center">t</td>
                    <td class="t5" align="center">
                         <input type="radio" name="failedTest" value="yes"
                         {{$person->failedTest =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="failedTest" value="no"
                        {{$person->failedTest =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('failedTest') ? 'errcoll' : ''}}">Substance dependence, or substance abuse, or use of illegal
                            substances in the last 2 years, or failed a drug test ever?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">j</td>
                    <td class="t5" align="center">
                        <input type="radio" name="kidney" value="yes"
                         {{$person->kidney =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="kidney" value="no"
                         {{$person->kidney =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('kidney') ? 'errcoll' : ''}}">Kidney stone or blood in the urine?</span>
                    </td>
                    <td class="t5" align="center">u</td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="yes"
                        {{$person->surgery =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="no"
                        {{$person->surgery =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('surgery') ? 'errcoll' : ''}}">Other illness disability or surgery?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">k</td>
                    <td class="t5" align="center">
                        <input type="radio" name="suicide" value="yes"
                         {{$person->suicide =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="suicide" value="no"
                         {{$person->suicide =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('suicide') ? 'errcoll' : ''}}">Suicide attempt?</span>
                    </td>
                    <td class="t5" align="center">v</td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="yes"
                        {{$person->diabetes =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="no"
                        {{$person->diabetes =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('diabetes') ? 'errcoll' : ''}}">Diabetes?</span></td>
                </tr>
                  <tr id="t4" >
                    <td class="t5" colspan="8">
                      <label>18b.</label>  
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
                        {{$person->fdisorder =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdisorder" value="no"
                        {{$person->fdisorder =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('fdisorder') ? 'errcoll' : ''}}">Inherited disorders?</span>
                    </td>
                    <td class="t5" align="center">b</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="yes"
                        {{$person->fglaucoma =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="no"
                        {{$person->fglaucoma =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('fglaucoma') ? 'errcoll' : ''}}">Glaucoma?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">c</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="yes"
                        {{$person->fmental =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="no"
                        {{$person->fmental =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fmental') ? 'errcoll' : ''}}">Mental illness?</span>
                    </td>
                    <td class="t5" align="center">d</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="yes"
                        {{$person->fcholesterol =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="no"
                        {{$person->fcholesterol =='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fcholesterol') ? 'errcoll' : ''}}">High Cholesterol levels?</span>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" align="center">e</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="yes"
                        {{$person->fepilepsy =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="no"
                        {{$person->fepilepsy =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fepilepsy') ? 'errcoll' : ''}}">Epilepsy?</span>
                    </td>
                    <td class="t5" align="center">f</td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="yes"
                         {{$person->fallergies =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="no"
                         {{$person->fallergies =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('fallergies') ? 'errcoll' : ''}}">Allergies/asthma/eczema?</span></td>
                </tr>
                   <tr id="t4" >
                    <td class="t5" align="center">g</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="yes"
                        {{$person->fdiabetes =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="no"
                        {{$person->fdiabetes =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fdiabetes') ? 'errcoll' : ''}}">Diabetes?</span>
                    </td>
                    <td class="t5" align="center">h</td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="yes"
                         {{$person->ftuberculosis =='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="no"
                         {{$person->ftuberculosis =='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('ftuberculosis') ? 'errcoll' : ''}}">Tuberculosis?</span></td>
                </tr>
                <tr id="t4">
                  <td class="t5" colspan="8">
                    <b>18c. Explanations</b>
                    <textarea style="width: 100%" name ="medexplanation" class= "textarea {{$errors->has('medexplanation') ? 'errcol' : ''}}">{{$person->medexplanation }}</textarea>
                   </td>
                    
                </tr>
        
            </tbody>
        </table>
             <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                    <tr>
                        <th class="t8" colspan="3">
                            <label>19. Conviction and/or administrative action history (see instructions )</label>
                            </th>
                    </tr><tr id="t7" >
                    
                        </tr>

                    <tr id="t7" >
                        <td class="t8 col-xs-7" ><label>19a.</label> <label>Have you ever had (1) 
            any convictions involving driving while intoxicated by, while impaired by, or while under
the influence of alcohol or a drug; or (2) any convictions or administrative actions involving an offense(s) which
resulted in the denial, suspension, cancellation, or revocation of driving privileges or which resulted in attendance at
an educational or rehabilitation program?</label><br>
                                <input type="radio" name ="alcho" value= "yes" 
                                {{ $person->alcho =="yes" ? 'checked' : '' }}>  <label style="margin-right: 20px" class="input {{$errors->has('alcho')? 'errcoll': ''}}">Yes</label>
                                <input type="radio" name ="alcho" value="no" {{ $person->alcho =="no" ? 'checked' : '' }}> <label 
                                class="input {{$errors->has('alcho')? 'errcoll': ''}}">No</label>
                            </td>
                        
                        <td class="t8 " colspan="2"><label>19b.</label><label>Have you ever had any non-traffic convictions 
            (misdemeanours or felonies)?</label><br>
                        <input type="radio" name = "nontraf" value="yes"
                        {{$person->nontraf =="yes" ? 'checked' : ''}}>  <label style="margin-right: 20px" class="input {{$errors->has('nontraf')? 'errcoll': ''}}">Yes</label>
                                <input type="radio" name = "nontraf" value="no"
                                {{$person->nontraf =="no" ? 'checked' : ''}}> <label class="input {{$errors->has('nontraf')? 'errcoll': ''}}">No</label>

                        </td>
                    </tr>
                <tr id="t7" >
                    <td class="t8" colspan="2"><label>19c. Explanations (see instructions)</label>
                        <textarea style="width: 100%" rows="3" name="convicexpl" >{{$person->convicexpl }}</textarea>
                    </td>
                    <td class="t8"><b>FOR CAA USE</b>
                        <textarea style="width: 100%" name="fcaause" rows ="3">{{$person->fcaause }} </textarea>
                    </td>
                </tr>
        
                </tbody>
            </table>


            <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                    
                    <tr id="t5" ><td class="t6" colspan="3">
                      <label>20. Visit to health professional within the last 3 years?</label>
                            <input type="radio" name ="vhealth" value="Yes"
                            {{$person->vhealth =="yes" ? 'checked' : ''}}> 
                            <label style="margin-right: 20px" class="input {{$errors->has('vhealth')? 'errcoll': ''}}">Yes <i>(Explain Below)</i>
                            </label>
                            <input type="radio" name ="vhealth" value="no"
                            {{$person->vhealth =="no" ? 'checked' : ''}}> 
                            <label class="input {{$errors->has('vhealth')? 'errcoll': ''}}">No</label>
                        </td>
                        </tr>
                    <tr id="t5" >
                        <td class="t6 col-xs-2" ><label>Date</label></td>
                        <td class="t6 col-xs-4"><label>Name, Address & Type of Health Professional Consulted</label></td>
                        <td class="t6"><label>Reason</label></td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><input type="date" name ="dvprofesional1" value="{{$person->dvprofesional1 }}"></td>
                        <td class="t6">
                          <textarea rows="2" style="width: 100%" name="vhealth1"  class="input {{$errors->has('vhealth1')? 'errcol': ''}}">{{$person->vhealth1 }}</textarea>
                        <td class="t6">
                        <textarea rows="2" style="width: 100%" name = "vrhealth1"class="input {{$errors->has('vrhealth1')? 'errcol': ''}}">{{$person->vrhealth1 }}</textarea>
                      </td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><input type="date" name ="dvprofesional2" value="{{$person->dvprofesional2 }}"></td>
                        <td class="t6"><textarea rows="2" style="width: 100%" name ="vhealth2" class="input {{$errors->has('vhealth2')? 'errcol': ''}}" >{{$person->vhealth2 }}</textarea>
                        <td class="t6"><textarea rows="2" style="width: 100%" name ="vrhealth2" class="input {{$errors->has('vrhealth2')? 'errcol': ''}}">{{$person->vrhealth2 }}</textarea></td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><input type="date" name ="dvprofesional3" value="{{$person->dvprofesional3 }}"></td>
                       <td class="t6"><textarea rows="2" style="width: 100%" name="vhealth3" class="input {{$errors->has('vhealth3')? 'errcol': ''}}">{{$person->vhealth3 }}</textarea>
                        <td class="t6"><textarea rows="2" style="width: 100%"name = "vrhealth3" class="input {{$errors->has('vrhealth3')? 'errcol': ''}}">{{$person->vrhealth3 }}</textarea>
                        </td>
                    </tr>
          
                </tbody>
            </table>

            <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                    
                        

                <tr id="t8" >
                    <td class="t9"><label>21. I hereby certify that all statements and answers provided by me on
this application are complete and true to the best of my knowledge, and I
agree that they are to be considered part of the basis for issuance of any
CAA licence and certificate to me.</label></td>
                    <td class="t9"><label>1. Date<br> <input type="date" name="dacknowledge" value="{{$person->dacknowledge }}" class="input {{$errors->has('dacknowledge')? 'errcol': ''}}"></label>
                    </td>
                    
                    <td class="t9"><label>2. Signature of applicant</label>
                      <textarea rows="" cols="48" placeholder="signature" name="signature" class="input {{$errors->has('signature')? 'errcol': ''}}">{{$person->signature }}</textarea>
                    </td>
                </tr>
                <tr id="t8" >
                    <td  class="t9" colspan="2"><span>Select AME</span>
                    	<Input type="text" name="ame" value="{{$person->ame}}">
                      
                    </td>
                   <td  class="t9" colspan="2"><span>Book an Appointment</span>
                   	<Input type="text" name="ame" value="{{$person->ame}}">
                   </td>
                </tr>
                  <tr id="t8" >
                    <td  class="t9" colspan="3"><span>CAA Form 548 [c]2018</span><aside class="text-right">Page 1 of 2.</aside></td>
                </tr>
        
            </tbody>
        </table>
     </div>
     <div class="container" style="padding-top: 5px">
      
       <div id="Q" class="tabcontent">
        <table class="table table-bordered table-sm table-responsive tab1 RepSubSec" >
            <thead class="RepSubSec">
               <tr>
              <td colspan="12"><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label> [BAG Generic]</label></p></td></tr>
                <tr>
                    <th colspan="12"><span>REPORT OF MEDICAL EXAMINATION</span></th>
                </tr>
            </thead>
        </table>
         <div align ="center"style="color:red"><span>
    {{$errors ->any() ? "Please fill the Field(s) marked in red": ''}}
  </span></div>
</div>
<form method ='POST' Action ='/medexam'>
  {{ csrf_field() }}
<div id="I" class="tabcontent">
        <table class="table table-bordered table-sm table-responsive tab1 RepSubSec" >
            <tbody class="RepSubSec">
                <tr>
                <th class="t11" colspan="8">
                   
                </th>
            </tr>
           <tr id="t10" >
                    <td class="t11" colspan="3">
                       <label> 22. Height(m)  </label>
                        <input type="number" name="height" style = "width : 100%" value="{{old('height')}}"  
                        class ="input {{$errors->has('height')? 'errcol': ''}}">
                         <input type="hidden" name ='appid' value="{{$person->id}}">
                    </td>
             				<td class="t11" >
                       <label> 23. Weight(kg)</label>
                        <input type="number" name="weight" style = "width : 100%" value="{{old('weight')}}"  
                        class ="input {{$errors->has('weight')? 'errcol': ''}}">
                    </td>
                    <td class="t11" colspan="3"><label>24. Statement of Demonstrated Ability (SODA)</label><br>
                        <input type="radio" value="yes" name="soda" {{ old('soda') =="yes" ? "checked" : " "}}> 
                        <label class ="input {{$errors->has('soda')? 'errcoll': ''}}">YES</label>
                        <input type="radio" value="no" name="soda" {{ old('soda') =="no" ? "checked" : " "}}> 
                        <label class ="input {{$errors->has('soda')? 'errcoll': ''}}">NO</label>
                        <span>DEFECT NOTED</span>
                        <input type="number" name="dnoted" style = "width : 100%" value="{{old('dnoted')}}"  
                        class ="input {{$errors->has('dnoted')? 'errcol': ''}}">
                    </td>
             <td>
               <label> 25. SODA Serial Number</label> 
               <input type="number" name="sodasn" style = "width : 100%" value="{{old('sodasn')}}"  
                        class ="input {{$errors->has('sodasn')? 'errcol': ''}}">
               </td>
                </tr>
                <tr id="t10" >
                    <td class="t11"></td>
                    <td class="t11"><b>Normal</b></td>
                    <td class="t11"><b>Abnormal</b></td>
                    <td class="t11" colspan=""><b>CONDITION</b></td>
                    <td class="t11"></td>
                    <td class="t11"><b>Normal</b></td>
                    <td class="t11"><b>Abnormal</b></td>
                    <td class="t11" colspan=""><b>CONDITION</b></td>
                </tr>
                    <tr id="t10" >
                        <td class="t11">26</td>
                        <td class="t11"><input type="radio" name="head" value="yes" style="margin: 10px 20px" {{ old('head') =="yes" ? "checked" : " "}}></td>
                        <td class="t11">
                             <input type="radio" name="head" value="no" style="margin: 10px 20px" {{ old('head') =="no" ? "checked" : " "}}></td>
                        <td class="t11" colspan="">
                            <span class= "input {{$errors->has('head') ? 'errcoll' : ''}}">Head, face, neck and scalp</span>   
                        </td><td class="t11">38</td>
                        <td class="t11"><input type="radio" name="vascularsys" value="yes" style="margin: 10px 20px" {{ old('vascularsys') =="yes" ? "checked" : " "}}></td>
                        <td class="t11">
                             <input type="radio" name="vascularsys" value="no" style="margin: 10px 20px" {{ old('vascularsys') =="no" ? "checked" : " "}}> </td>
                        <td class="t11" colspan=""><span class= "input {{$errors->has('vascularsys') ? 'errcoll' : ''}}">Vascular system (Pulse, amplitude & character, arms, legs, other</span>
                        </td>
                    </tr>
                        <tr id="t10" >
                            <td class="t11">27</td>
                            <td class="t11"><input type="radio" name="nose" value="yes" style="margin: 10px 20px" {{ old('nose') =="yes" ? "checked" : " "}}></td>
                            <td class="t11">
                             <input type="radio" name="nose" value="no" style="margin: 10px 20px" {{ old('nose') =="no" ? "checked" : " "}}> </td>
                       <td class="t11">
                            <span class= "input {{$errors->has('nose') ? 'errcoll' : ''}}" >Nose</span>
                             
                        </td><td class="t11">39</td>
                            <td class="t11"><input type="radio" name="abdomen" value="yes" style="margin: 10px 20px" {{ old('abdomen') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                             <input type="radio" name="abdomen" value="no" style="margin: 10px 20px" {{ old('abdomen') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('abdomen') ? 'errcoll' : ''}}">Abdomen and viscera (including hernia)</span>
                        </td>
                    </tr>
                     <tr id="t10" ><td class="t11">28</td>
                         <td class="t11"><input type="radio" name="sinuses" value="yes" style="margin: 10px 20px" {{ old('sinuses') =="yes" ? "checked" : " "}}> </td>
                         <td class="t11">
                             <input type="radio" name="sinuses" value="no" style="margin: 10px 20px" {{ old('sinuses') =="no" ? "checked" : " "}}> </td>
                        <td class="t11">
                            <span class= "input {{$errors->has('sinuses') ? 'errcoll' : ''}}" >Sinuses</span>
                        </td><td class="t11">40</td>
                         <td class="t11"><input type="radio" name="anus" value="yes" style="margin: 10px 20px" {{ old('anus') =="yes" ? "checked" : " "}}></td>
                         <td class="t11">
                             <input type="radio" name="anus" value="no" style="margin: 10px 20px" {{ old('anus') =="no" ? "checked" : " "}}></td>
                        <td class="t11"><span class= "input {{$errors->has('anus') ? 'errcoll' : ''}}" >Anus (not including digital examination)</span>
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">29</td>
                            <td class="t11"><input type="radio" name="mouth" value="yes" style="margin: 10px 20px" {{ old('mouth') =="yes" ? "checked" : " "}}></td>
                            <td class="t11">
                             <input type="radio" name="mouth" value="no" style="margin: 10px 20px" {{ old('mouth') =="no" ? "checked" : " "}}> </td>
                       <td class="t11">
                            <span class= "input {{$errors->has('mouth') ? 'errcoll' : ''}}" > Mouth and throat</span>
                                                     </td>
                                                     <td class="t11">41</td>
                            <td class="t11"><input type="radio" name="skin" value="yes" style="margin: 10px 20px"{{ old('skin') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                             <input type="radio" name="skin" value="no" style="margin: 10px 20px"{{ old('skin') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('skin') ? 'errcoll' : ''}}">Skin</span>
                        </td>
                    </tr>
                     <tr id="t10" ><td class="t11">30</td>
                         <td class="t11"><input type="radio" name="ear" value="yes" style="margin: 10px 20px" {{ old('ear') =="yes" ? "checked" : ""}}></td>
                         <td class="t11">
                             <input type="radio" name="ear" value="no" style="margin: 10px 20px" {{ old('ear') =="no" ? "checked" : ""}}></td>
                        <td class="t11">
                            <span class= "input {{$errors->has('ear') ? 'errcoll' : ''}}">Ears, general (internal and external canals, hearing under item 50)</span>    
                        </td><td class="t11">42</td>
                         <td class="t11"><input type="radio" name="gusys" value="yes" style="margin: 10px 20px" {{ old('gusys') =="yes" ? "checked" : " "}}></td>
                         <td class="t11">
                            <input type="radio" name="gusys" value="no" style="margin: 10px 20px" {{ old('gusys') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('gusys') ? 'errcoll' : ''}}">G-U system (not including pelvic examination)</span>
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">31</td>
                            <td class="t11"><input type="radio" name="eardrum" value="yes" style="margin: 10px 20px" {{ old('eardrum') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                             <input type="radio" name="eardrum" value="no" style="margin: 10px 20px" {{ old('eardrum') =="no" ? "checked" : " "}}> </td>
                       <td class="t11">
                            <span class= "input {{$errors->has('eardrum') ? 'errcoll' : ''}}">Ear Drums (perforation)</span>
                             
                        </td><td class="t11">43</td>
                            <td class="t11"><input type="radio" name="extremities" value="yes" style="margin: 10px 20px" {{ old('extremities') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                             <input type="radio" name="extremities" value="no" style="margin: 10px 20px" {{ old('extremities') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('extremities') ? 'errcoll' : ''}}">Upper and lower extremities (strength and range of motion)</span>
                             </td>
                    </tr>
                     <tr id="t10" ><td class="t11">32</td>
                         <td class="t11"><input type="radio" name="eyes" value="yes" style="margin: 10px 20px" {{ old('eyes') =="yes" ? "checked" : " "}}> </td>
                         <td class="t11">
                             <input type="radio" name="eyes" value="no" style="margin: 10px 20px" {{ old('eyes') =="no" ? "checked" : " "}}> </td>
                        <td class="t11">
                            <span class= "input {{$errors->has('eyes') ? 'errcoll' : ''}}">Eyes, general (vision under item 51)</span>
                             
                        </td><td class="t11">44</td>
                         <td class="t11"><input type="radio" name="spine" value="yes" style="margin: 10px 20px" {{ old('spine') =="yes" ? "checked" : " "}}> </td>
                         <td class="t11">
                             <input type="radio" name="spine" value="no" style="margin: 10px 20px" {{ old('spine') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('spine') ? 'errcoll' : ''}}">Spine, other musculoskeletal</span>
                             
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">33</td>
                            <td class="t11"><input type="radio" name="opthal" value="yes" style="margin: 10px 20px" {{ old('opthal') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                             <input type="radio" name="opthal" value="no" style="margin: 10px 20px" {{ old('opthal') =="no" ? "checked" : " "}}> </td>
                       <td class="t11">
                            <span class= "input {{$errors->has('opthal') ? 'errcoll' : ''}}">Ophthalmoscopic</span>
                             
                        </td><td class="t11">45</td>
                        <td class="t11">  <input type="radio" name="bodymarks" value="yes" style="margin: 10px 20px" {{ old('bodymarks') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                            <input type="radio" name="bodymarks" value="no" style="margin: 10px 20px" {{ old('bodymarks') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('bodymarks') ? 'errcoll' : ''}}">Identifying body marks, scars, tattoos (size and location)</span>
                            
                        </td>
                    </tr>
                     <tr id="t10" ><td class="t11">34</td>
                         <td class="t11"><input type="radio" name="pupils" value="yes" style="margin: 10px 20px" {{ old('pupils') =="yes" ? "checked" : " "}}> </td>
                         <td class="t11">
                             <input type="radio" name="pupils" value="no" style="margin: 10px 20px" {{ old('pupils') =="no" ? "checked" : " "}}> </td>
                        <td class="t11">
                            <span class= "input {{$errors->has('pupils') ? 'errcoll' : ''}}">Pupils (Equality and Reaction)</span>
                        </td><td class="t11">46</td>
                         <td class="t11"><input type="radio" name="lymphatics" value="yes" style="margin: 10px 20px" {{ old('lymphatics') =="yes" ? "checked" : " "}}> </td>
                         <td class="t11">
                             <input type="radio" name="lymphatics" value="no" style="margin: 10px 20px" {{ old('lymphatics') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('lymphatics') ? 'errcoll' : ''}}">	Lymphatics	</span>
                             
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">35</td>
                            <td class="t11"> <input type="radio" name="ocularotility" value="yes" style="margin: 10px 20px" {{ old('ocularotility') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                             <input type="radio" name="ocularotility" value="no" style="margin: 10px 20px" {{ old('ocularotility') =="no" ? "checked" : " "}}> </td>
                       <td class="t11">
                            <span class= "input {{$errors->has('ocularotility') ? 'errcoll' : ''}}"> Ocular motility (associated parallel movement) </span>
                            
                        </td><td class="t11">47</td>
                            <td class="t11">
                                <input type="radio" name="neurologic" value="yes" style="margin: 10px 20px" 
                                {{ old('neurologic') =="yes" ? "checked" : " "}}> </td>
                            <td class="t11">
                             <input type="radio" name="neurologic" value="no" style="margin: 10px 20px"
                             {{ old('neurologic') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('neurologic') ? 'errcoll' : ''}}">Neurologic (tendon reflexes, equilibrium, cranial nerves, coordination, etc.)</span>
                             
                        </td>
                    </tr>
                    <tr id="t10" ><td class="t11" >36</td>
                        <td class="t11">
                            <input type="radio" name="lungsschest" value="yes" style="margin: 10px 20px"
                            {{ old('lungsschest') =="yes" ? "checked" : " "}}> </td>
                            
                        <td class="t11">
                             <input type="radio" name="lungsschest" value="no" style="margin: 10px 20px"
                             {{ old('lungsschest') =="no" ? "checked" : " "}}> </td>
                       <td class="t11">
                            <span class= "input {{$errors->has('lungsschest') ? 'errcoll' : ''}}">
                            Lungs and Chest (not including breast exam)</span>
                             
                        </td><td class="t11">48</td>
                        <td class="t11">
                            <input type="radio" name="psychiatric" value="yes" style="margin: 10px 20px"
                            {{ old('psychiatric') =="yes" ? "checked" : " "}}> </td>
                            
                        <td class="t11">
                             <input type="radio" name="psychiatric" value="no" style="margin: 10px 20px"
                             {{ old('psychiatric') =="no" ? "checked" : " "}}> </td>
                        <td class="t11"><span class= "input {{$errors->has('psychiatric') ? 'errcoll' : ''}}"
                            >Psychiatric (appearance, behavior, mood, communication & memory)</span>
                             
                        </td>
                    </tr>
                    <tr id="t10" ><td class="t11">37</td>
                        <td class="t11">
                            <input type="radio" name="hear" value="yes" style="margin: 10px 20px"
                            {{ old('hear') =="yes" ? "checked" : " "}}> </td>
                            
                        <td class="t11">
                            <input type="radio" name="hear" value="no" style="margin: 10px 20px"
                            {{ old('hear') =="no" ? "checked" : " "}}>
                        </td>
                       <td class="t11">
                            <span class= "input {{$errors->has('psychiatric') ? 'errcoll' : ''}}"
                                >Heart (precordial activity, rhythm, sounds &amp; murmurs))</span>
                             
                        </td><td>49</td>
                        <td class="t11"> <input type="radio" name="gensys" value="yes" style="margin: 10px 20px" 
                            {{ old('gensys') =="yes" ? "checked" : " "}}> 
                        </td>
                            
                        <td class="t11">
                             <input type="radio" name="gensys" value="no" style="margin: 10px 20px"
                             {{ old('gensys') =="no" ? "checked" : " "}}> 
                         </td>
                        <td class="t11">
                            <span class= "input {{$errors->has('genSys') ? 'errcoll' : ''}}"
                                >General Systemic	
                            </span>
                            
                        </td>
                    </tr>
                    <tr id="t10" >
                        <td class="t11" colspan="8"><label><i> NOTES:	(Describe every abnormality in detail. Enter applicable item number before each comment. Use additional sheets if necessary and attach to this form.</i></label>
                            <textarea cols="136" name = "abdescription"  style="width: 100%" 
                            class="input {{ $errors->has('abdescription') ? 'errcol': ''}} ">{{old('abdescription')}}
                            </textarea>
                        </td>
                    </tr>
					
                </tbody>
            </table>
			
</div>          
<div id="J" class="tabcontent">
  <table class="table table-bordered table-sm table-responsive tab1 RepSubSec" >
                <tbody class="RepSubSec">
                    <tr>
                        <th class="t12" colspan="12">50. HEARING:</th>
                    </tr>
                    <tr id="t11">
                        <td  colspan="6">
                            <label class="input {{$errors->has('hrresult')? 'errcoll': ''}}">Conversational Voice Test (2m)</label>
                        </td>
                        <td class="t12" colspan="6">
                            <label class="text-center">Record Audiometric Speech Discrimination score below</label>
                        </td>
                    </tr>
                    <tr id="t11">
                        <td class="t12" rowspan="1" colspan="6">
                            <label class="col-xs-">PASS</label> 
                            <input type="radio" value="pass" name="hrresult" style="margin: 10px" 
                             {{ old('hrresult') =="pass" ? "checked" : " "}}>
                            <br>
                            <label class="col-xs-">FAIL</label> 
                            <input type="radio" value="fail" name="hrresult" style="margin: 15px"
                             {{ old('hrresult') =="fail" ? "checked" : " "}}>
                        </td>
                        <td class="t12" rowspan="1" colspan="6">
                            <input type="text"  name ="audiospeechdis" 
                            value="{{old('audiospeechdis')}}" style="width : 100%"
                            class="input {{$errors->has('audiospeechdis')? 'errcol': ''}} ">
                        </td>
                    </tr>
                    <tr id="t11" >
                        <td class="t12" colspan="2"></td>
                        <td  colspan="5" class="text-center t12"><label>Right Ear</label></td>
                        <td colspan="5"  class="text-center t12"><label>Left Ear</label></td>
                    </tr>
                    <tr id="t11" >
                        <td class="t12" colspan="2">Audiometer</td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('fivehuna') ? 'errcoll' : '' }}">500</label></td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('onethoua') ? 'errcoll' : ''}}">1000</label>
                        </td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('twothoua') ? 'errcoll' : ''}}">2000</label>
                        </td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('threethoua') ? 'errcoll' : ''}}">3000</label>
                        </td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('fourthoua') ? 'errcoll' : ''}}">4000</label>
                        </td>
                      	<td class="text-center t12">
                            <label class="input {{$errors->has ('fivehunb') ? 'errcoll' : ''}}">500</label>
                        </td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('onethoub') ? 'errcoll' : ''}}">1000</label>
                        </td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('twothoub') ? 'errcoll' : ''}}">2000</label>
                        </td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('threethoub') ? 'errcoll' : ''}}">3000</label>
                        </td>
                        <td class="text-center t12">
                            <label class="input {{$errors->has ('fourthoub') ? 'errcoll' : ''}}">4000</label>
                        </td>
                    </tr>
                   <tr id="t11" >
                   <td class="t12" colspan="2">Threshold in decibels</td>
                    <td class="text-center t12">
                        <div align="right">
                            <input type="number" name="fivehuna" class="col-xs-12"  value="{{old('fivehuna')}}">
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <input type="number" name ="onethoua" Class="col-xs-12" value="{{old('onethoua')}}" />
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <input type="number" name="twothoua" class="col-xs-12" value="{{old('twothoua')}}"/>
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <input type="number" name="threethoua" class="col-xs-12" value="{{old('threethoua')}}" />
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <input type="number" name="fourthoua" class="col-xs-12"  value="{{old('fourthoua')}}" />
                        </div>
                    </td>
                   
                    <td class="text-center t12">
                        <div align="center">
                            <input type="number" name="fivehunb" class="col-xs-12" value="{{old('fivehunb')}}" />
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <input type="number" name="onethoub"  class ="col-xs-12" value="{{old('onethoub')}}" />
                        </div>
                    </td>
                    <td align="center" class="text-center t12">
                        <input type="number" name="twothoub" class="col-xs-12" value="{{old('twothoub')}}" />
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <input type="number" name="threethoub" class="col-xs-12" value="{{old('threethoub')}}" />
                        </div>
                    </td>
                     <td class="text-center t12">
                        <div align="center">
                            <input type="number" name="fourthoub" class="col-xs-12" value="{{old('fourthoub')}}"/>
                        </div>
                    </td>
                   </tr>
				   </tbody>
        </table>
		
</div>
<div id="K" class="tabcontent">
        <table class="table table-bordered table-sm table-responsive tab1 RepSubSec" >
            <tbody class="RepSubSec">
                <tr>
                        <th class="t13" colspan="6">51. VISION:</th>
                </tr>
                <tr id="t12" >
                        <td class="t13" colspan ="2"><label>Distant Vision</label></td>
                        <td class="t13" ><label>Near Vision</label></td>
                        <td class="t13"><label>Intermediate Vision</label></td>
                        <td rowspan="4" class="col-xs-2" colspan ="2"><span>Color perception</span><br>
                            <div class="col-xs-4">
                                <label class="input {{$errors->has ('colorresult') ? 'errcoll' : ''}}">PASS</label>
                                <input type="radio" name="colorresult" value="pass"  {{old('colorresult')=='pass' ? 'checked' : ''}}>
                            </div>
                            <div class="col-xs-4">
                                <label class="input {{$errors->has ('colorresult') ? 'errcoll' : ''}}">FAIL</label>
                                <input type="radio" name="colorresult" value="fail"  {{old('colorresult')=='fail' ? 'checked' : ''}}>
                            </div>
                        </td>
                  
                </tr>
                <tr id="t12" >
                    <td class="t13" colspan ="2">
                        <div class="column" >
                            
                                <span >Right = 6/</span>
                                <input type="number"  style="width : 50%; margin-left : 42px"
                                name ="rightear" class="input {{$errors->has ('rightear') ? 'errcol' : ''}}" 
                                value="{{old('rightear')}}">
                                <br>
                                <br>
                                <span >Corrected to 6/</span>
                                <input type="number"  style="width : 50%; margin-left : 10px "
                                 name ="rightcorear" class="input {{$errors->has ('rightear') ? 'errcol' : ''}}" 
                                 value="{{old('rightear')}}">
                            
                            </div>
                    </td>
                        <td class="t13">
                          <div class="col-xs-4"><label class="input {{$errors->has ('nearright') ? 'errcoll' : ''}}">PASS</label> 
                            <input type="radio" name="nearright" value="pass" {{old('nearright')=='pass' ? 'checked' : ''}}>
                        </div>
                          <div class="col-xs-4"><label class="input {{$errors->has ('nearright') ? 'errcoll' : ''}}">FAIL</label>
                          <input type="radio" name="nearright" value="fail" {{old('nearright')=='fail' ? 'checked' : ''}}>
                        </div>
                            
                          </td>
                        <td class="t13">
                          <div class="col-xs-4"><label class="input {{$errors->has ('interright') ? 'errcoll' : ''}}">PASS</label>
                            <input type="radio" name="interright" value="pass" {{old('interright')=='pass' ? 'checked' : ''}}>
                          </div>
                          <div class="col-xs-4"><label class="input {{$errors->has ('interright') ? 'errcoll' : ''}}">FAIL</label>
                            <input type="radio" name="interright" value="fail" {{old('interright')=='fail' ? 'checked' : ''}}>
                          </div>							
                  		</td>
                    </tr>
                    <tr id="t12" >
                        
                        <td class="t13" colspan ="2">
                            <div class="column">
                            
                            <span >Left = 6/</span>
                           <input type="number"  style="width : 50%; margin-left : 50px"
                                name ="leftear" class="input {{$errors->has ('leftear') ? 'errcol' : ''}}" 
                                value="{{old('leftear')}}">
                            <br>
                            <br>
                            <span>Corrected to 6/</span>
                        	 <input type="number"  style="width : 50%; margin-left : 10px "
                                name ="leftcorear" class="input {{$errors->has ('leftcorear') ? 'errcol' : ''}}" 
                                value="{{old('leftcorear')}}">
                  
                            </div>
                        </td>

                        <td class="t13">
                      	<div class="col-xs-4"><label class="input {{$errors->has ('nearleft') ? 'errcoll' : ''}}">PASS</label> <input type="radio" name="nearleft" value="pass" {{old('nearleft')=='pass' ? 'checked' : ''}}></div>
                        <div class="col-xs-4"><label class="input {{$errors->has ('nearleft') ? 'errcoll' : ''}}">FAIL</label> <input type="radio" value="fail" name="nearleft" {{old('nearleft')=='fail' ? 'checked' : ''}}></div>
                      	
                      	</td>
                        <td class="t13">
                      	<div class="col-xs-4"><label class="input {{$errors->has ('interleft') ? 'errcoll' : ''}}">PASS</label>
                         <input type="radio" value="pass" name="interleft" {{old('interleft')=='pass' ? 'checked' : ''}}>
                        </div>
                        <div class="col-xs-4"><label class="input {{$errors->has ('interleft') ? 'errcoll' : ''}}">FAIL</label> 
                            <input type="radio" name="interleft" value="fail" name="interleft" {{old('interleft')=='fail' ? 'checked' : ''}}>
                        </div>
                       	</td>
               			 </tr>
                <tr id="t12">
                    <td class="t13" colspan ="2">
                        <div class="column">
                            
                            <span class="">Both = 6/</span>
                              <input type="number" style="width : 50%; margin-left : 46px"
                                name ="bothear" class="input {{$errors->has ('bothear') ? 'errcol' : ''}}" 
                                value="{{old('bothear')}}">
                            <br>
                            <br>
                            <span>Corrected to 6/</span>
                        	 <input type="number" style="width : 50%; margin-left : 10px"
                                name ="bothcorear" class="input {{$errors->has ('bothcorear') ? 'errcol' : ''}}" 
                                value="{{old('bothcorear')}}">
                            
                            </div>
                    </td>
                    <td class="t13">
                      <div class="col-xs-4"><label class="input {{$errors->has ('nearboth') ? 'errcoll' : ''}}">PASS</label> 
                        <input type="radio" value="pass" name="nearboth" {{old('nearboth')=='pass' ? 'checked' : ''}}>
                    </div>
                      <div class="col-xs-4"><label class="input {{$errors->has ('nearboth') ? 'errcoll' : ''}}">FAIL</label> <input type="radio" value="fail" name="nearboth" {{old('nearboth')=='fail' ? 'checked' : ''}}>
                      </div>
                    </td>
                    <td class="t13">
                      <div class="col-xs-4">
                        <label class="input {{$errors->has ('interboth') ? 'errcoll' : ''}}">PASS</label> 
                        <input type="radio" name="interboth" value="pass" {{old('interboth')=='pass' ? 'checked' : ''}}>
                    </div>
                      <div class="col-xs-4">
                        <label class="input {{$errors->has ('interboth') ? 'errcoll' : ''}}">FAIL</label> 
                        <input type="radio" name="interboth" value="fail" {{old('interboth')=='fail' ? 'checked' : ''}}>
                    </div>
                    </td>
                  
                     </tr>
              
              		<tr id="t12" >
                        <td class="t13" ><label>Field of vision </label><br>
                         <div class="col-xs-4"><label class="input {{$errors->has ('fovision') ? 'errcoll' : ''}}">PASS</label> 
                            <input type="radio" name="fovision" value="pass" {{old('fovision')=='pass' ? 'checked' : ''}}>
                         </div>
                         <div class="col-xs-4"><label class="input {{$errors->has ('fovision') ? 'errcoll' : ''}}">FAIL</label> 
                            <input type="radio" name="fovision" value="fail" {{old('fovision')=='fail' ? 'checked' : ''}}>
                         </div>
                		</td>
                        <td class="t13" ><label>Heterophoria 20’<br>(in prism dioptres)</label></td>
                        	    <td class="t13" >
                                    <label>Esophoria</label><br>
                                    <input type="text" name="esoph" size="4" value ="{{old('esoph')}}" class="input {{$errors->has ('esoph') ? 'errcol' : ''}}" >
                                </td>
                        		<td class="col-xs-2">
                                    <label>Exophoria</label><br>
                                    <input type="text" name="exoph" size="4" value ="{{old('exoph')}}" class="input {{$errors->has ('exoph') ? 'errcol' : ''}}" > 
                          		<td class="col-xs-2">
                                    <label>Right Hyperphoria</label><br>
                                    <input type="text" name="rhyper" size="4" value ="{{old('rhyper')}}" class="input {{$errors->has ('rhyper') ? 'errcol' : ''}}" >
                                </td>

                            	<td class="col-xs-2">
                                    <label>Left Hyperphoria</label><br>
                                    <input type="text" name="lhyper" size="4" value ="{{old('lhyper')}}" class="input {{$errors->has ('lhyper') ? 'errcol' : ''}}" > 
                                </td>
                </tr>
                
                
                         
              
				</tbody>
        </table>
		
           </div>  
           <div id="L" class="tabcontent">
        <table class="table table-bordered table-sm table-responsive tab1 RepSubSec" >
            <tbody class="RepSubSec">
                <tr>
                    <th class="t14" colspan="4"><br></th>
                </tr>
                <tr id="t13"   >
                    <td class="t14" >
                            <label>52. Blood Pressure:</label>
                    </td>
                  <td>
                      <span>a. Systolic:</span><br> 
                      <input type="text" name="systolic" value ="{{old('systolic')}}" class="input {{$errors->has ('systolic') ? 'errcol' : ''}}">
                 </td>
                  <td>
                      <span>b. Diastolic:</span> <br> 
                      <input type="text" name="diastolic"  value ="{{old('diastolic')}}" class="input {{$errors->has ('diastolic') ? 'errcol' : ''}}"><br>(sitting, mm of mercury)
                      
                 </td>
                    <td class="t14">
                        <label>53. Pulse (resting):</label> <br><input type="text" name = "pulse" value ="{{old('pulse')}}" class="input {{$errors->has ('pulse') ? 'errcol' : ''}}">
                    </td>
                  </tr>
                  <tr id="t13" >
                  <td class="t14" >
                    <label>54. URINALYSIS:</label><br> (if abnormal, give results)<br>
                    <input type="radio" name="urinalysis" Value="normal" {{old('urinalysis')=='normal' ? 'checked' : ''}}><label class= "input {{$errors->has('urinalysis') ? 'errcoll' : ''}}">Normal</label> <br>
                    <input type="radio" name="urinalysis" Value="abnormal" {{old('urinalysis')=='abnormal' ? 'checked' : ''}}><label class= "input {{$errors->has('urinalysis') ? 'errcoll' : ''}}">Abnormal</label> 
                    </td>
                    <td class="t14">
                      a. Albumin (SPECIFY): <input type="text" size = "4" name = "albumin" value ="{{old('albumin')}}" class="input {{$errors->has ('albumin') ? 'errcol' : ''}}">
                    </td>
                    <td class="t14">
                      b. Sugar(SPECIFY): <input type="text" size = "4" name = "sugar" value ="{{old('sugar')}}" class="input {{$errors->has ('sugar') ? 'errcol' : ''}}">
                    </td>
                    <td class="t14">
                        <label>55. ECG (Date):</label><br> <input type="date" name = "ecgdate" value ="{{old('ecgdate')}}" class="input {{$errors->has ('ecgdate') ? 'errcol' : ''}}">
                    </td>
                </tr>
				<tr>
                        <td class="t15" colspan="4"><b>56. Other tests given</b><br> 
                         <textarea cols="80" style="width: 100%" name = "othertestgiv"  class="input {{$errors->has ('othertestgiv') ? 'errcol' : ''}}">{{old('othertestgiv')}}</textarea>
                  </td>
                </tr>
            </tbody>
        </table>
		
</div>


<div id="O" class="tabcontent">
        <table class="table table-bordered table-sm table-responsive tab1 RepSubSec" >
            <tbody class="RepSubSec">
                    <tr>
                         
                             </th>
                    </tr>
                    <tr id="t16" >
                           <td class="t17" colspan="2"> <label>57. Comments on history and findings: The aviation medical examiner (AME) shall comment on all “yes” answers in
the medical history section and for abnormal findings of the examination. (Attach all consultation reports, ECGs, Xrays, etc., to this report before mailing.)</label>
                        <textarea cols="80" style="width: 100%" name = "commenonhist"  class="input {{$errors->has ('commenonhist') ? 'errcol' : ''}}">{{old('commenonhist')}}</textarea>
                               </td>
                       </tr>
                    <tr id="t16" >
                        <td class="t17" >
                            <b>Significant Medical History?</b><br>
                        <input type="radio" name="sigmedhis" value ='yes' {{old('sigmedhis')=='yes' ? 'checked' : ''}}> <label style="margin-right: 20px" class= "input {{$errors->has('sigmedhis') ? 'errcoll' : ''}}">YES</label> 
                            <input type="radio" name="sigmedhis" value ='no' {{old('sigmedhis')=='no' ? 'checked' : ''}}> <label class= "input {{$errors->has('sigmedhis') ? 'errcoll' : ''}}">NO</label> 
                            </td>
                            <td class="t17" >
                                <b>Abnormal Physical Findings?</b><br> 
                                <input type="radio" name="abphyfinding" value='yes' {{old('abphyfinding')=='yes' ? 'checked' : ''}} > <label style="margin-right: 20px" class= "input {{$errors->has('abphyfinding') ? 'errcoll' : ''}}">YES</label> 
                            <input type="radio" name="abphyfinding" value='no' 
                            {{old('abphyfinding')=='no' ? 'checked' : ''}}> 
                            <label class= "input {{$errors->has('abphyfinding') ? 'errcoll' : ''}}">NO</label> 
                            
                    </tr>
					
            </tbody>
        </table>
		
  </div>
<div id="P" class="tabcontent">
        <table class="table table-bordered table-sm table-responsive tab1 RepSubSec" >
                <tbody class="RepSubSec">
                    <tr>
                        <th class="t18" colspan="2">58. Action taken</th><th class="t18" colspan="2"><b><i>59. DISQUALIFYING DEFECTS: (List by section letter and item number or enter the word "None")</i></b></th>
                    </tr>
                    <tr id="t17" >
                        <td class="t18" colspan="2"  >
                            <input type="radio" name="recommend" value="issued" {{old('recommend')=='issued' ? 'checked' : ''}}>
                          <label style="margin: 20px" class= "input {{$errors->has('recommend') ? 'errcoll' : ''}}">Medical Certificate issued</label><br>
                          <input type="radio" name="recommend" value="denied" {{old('recommend')=='denied' ? 'checked' : ''}}>
                          <label style="margin: 20px" class= "input {{$errors->has('recommend') ? 'errcoll' : ''}}">Medical certificate deferred for further evaluation</label> 
                          <br>
                          <input type="radio" name="recommend" value="defered" {{old('recommend')=='defered' ? 'checked' : ''}}>
                          <label style="margin: 20px" class= "input {{$errors->has('recommend') ? 'errcoll' : ''}}">Medical Certificate denied, issued (copy attached)</label> </td>
                   
                        <td class="t18" colspan="2">
                            <textarea rows="8" style="width: 100%" name="disquadefects" class= "input {{$errors->has('recommend') ? 'errcol' : ''}}">{{old('disquadefects')}}</textarea>
                        </td>
                    </tr>
                    <tr id="t17" >
                        <td class="t18" colspan="4">
                            <strong><i>60. AME's declaration: I hereby certify that I have personally reviewed the medical history and personally examined the applicant named on this medical examination report. This report with any attachments embodies my findings completely and correctly:</i></strong>
                        </td>
                    </tr>
                    <tr id="t17" >
                        <td class="t18" ><span>Date of Examination</span>
                            <input type="date" name="dateofexam" style="width : 100%" value="{{old('dateofexam')}}" class= "input {{$errors->has('dateofexam') ? 'errcol' : ''}}">
                        </td>
                       
                        <td class="t18" colspan="2"><span>AME's NAME</span>
                            <input type="text" name="amename" style="width : 100%" value="{{old('amename')}}" class= "input {{$errors->has('amename') ? 'errcol' : ''}}" >
                        </td>
                        <td class="t18" rowspan="2"><span>AME's Signature:</span>
                            <textarea style="width: 100%" rows="4" name="amesignature" class="input {{$errors->has('amesignature')? 'errcol': ''}}">{{old('amesignature')}}</textarea>
                        </td>
                    </tr>
                  <tr >
                         <td class="t18"><span>AME SERIAL NUMBER</span>
                            <input type="text" style="width : 100%" name="ameserialnum" class="input {{$errors->has('ameserialnum')? 'errcol': ''}}" value="{{old('ameserialnum')}}" >
                        </td>
                    <td class="t18" colspan ="2"><span>AME's Address</span>
                            <input type="text" name="ameaddre" style="width : 100%" class="input {{$errors->has('ameaddre')? 'errcol': ''}}"  value="{{old('ameaddre')}}">
                        </td>
                    </tr>
                    <tr >
                       <td class="t18"><span>State</span><br>
                        <input type="text" name="amestate" style="width : 100%" class="input {{$errors->has('amestate')? 'errcol': ''}}"  value="{{old('amestate')}}">
                        </td>  
                      <td><label>Country</label><select name="amecountry" id="amecountry" class ="select {{$errors->has('amecountry')? 'errcol': ''}}" >
                            <option value="">--- Select Country ---</option>
                            @foreach(App\pel_country::all() as $nationality)
                            <option value="{{ $nationality->name }}" {{ old('amecountry') == $nationality->name ? 'selected' : '' }}>{{ $nationality->name }}</option>
                            @endforeach
                        </select></td>
                       <td class="t18"><span>Postal Code</span>
                        <input type="text" name="amepcode" style="width : 100%" class="input {{$errors->has('amepcode')? 'errcol': ''}}"  value="{{old('amepcode')}}">
                        </td>
                      <td class="t18"><span>AME's TELEPHONE</span>
                            <input type="text" name = "tel" style="width : 100%" class="input {{$errors->has('tel')? 'errcol': ''}}"  value="{{old('tel')}}">
                        </td>
                       
                    </tr>
					
                </tbody>
        </table>
       <div align = "right">
				 <button type="submit" >Submit</button>
				 
		    </div>
    </div>
</form>

</div>
          </div>
      </div>
  </div>
</div>
 
@endsection     








