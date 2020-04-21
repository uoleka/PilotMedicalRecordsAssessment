@extends ('layouts.app')

  
@section('content')
<div class="container" style="padding-top: 5px">
      
<table class="table table-bordered table-sm table-responsive tab1 " >
            <thead class="container">
            <tr>
              <td><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label> [BAG Generic]</label></p></td></tr>
  <tr><td> <p align="center"><label>APPLICATION FOR MEDICAL CERTIFICATE</label></p></td></tr>         
  </thead>
  				
        </table>
		
		
         
  <div align ="center"style="color:red"><span>
    {{$errors ->any() ? "Please fill the Field(s) marked in red": ''}}
  </span></div>
 

<form method ='POST' Action ='applicant' >
  {{ csrf_field() }}
  <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
            <tbody class="appSubSec">
			   <tr><th colspan="5" class="t3"> 
             </th>
         </tr>
                <tr id="t2"  >
                 <td colspan="5" class="">  
                 <label for="formClass" title="Check the appropriate box for the class of medical 
certificate for which you are making application. "> 
               1. Class of medical certificate applied for:</label>
                
				 <label style="margin: 20px">  </label>
		<label style="margin: 20px">  </label>
		<label style="margin: 20px">  </label>   
		<span style="margin: 20px"><label  class="input {{$errors->has('formClass')? 'errcoll': ''}}">1.</label>
                   <input type="radio" name="formClass" 
				   class="text-right" style="margin: 10px" value="1"
				    {{ old('formClass')=="1" ? 'checked' : ''}} >
					</span>
                
				<span style="margin: 20px"><label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': ''}}">2.</label>
                  
                <input type="radio" name="formClass" value="2"
				{{ old('formClass')=="2" ? 'checked' :''}}
				class="text-right " style="margin: 10px" >
				</span>

                <span style="margin: 20px">
				<label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': ''}}">3.</label>
                  
                <input type="radio" name="formClass" value="3"
				{{ old('formClass')=="3" ? 'checked' : ''}}
				class="text-right" style="margin: 10px" >
				</span>
                    </td>
                </tr>
                </tbody>
            </table>
			
			<table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                <tr id="t2">
                    <th  colspan ="6"  class="t3"> </th>
                </tr>
                <tr id="t2" >
                    <td  colspan ="4" class="t3">
                       <label title=" Enter your full name. If your name has changed
for any reason, enter your current name and list any
former name(s) in Item 18c, Explanations. All applicants
without a middle name or initial should enter “NMN” or
“NONE.” Nicknames and abbreviated names must not be
used. " >2. Name</label><br>
                        <input type="text" placeholder="Last Name" name="lname" value="{{old('lname')}}" 
						class ="input {{$errors->has('lname')? 'errcol': ''}}">
                     <input type="text" placeholder="First Name" name="fname" value="{{old('fname')}}" 
					 class ="input {{$errors->has('fname')? 'errcol': ''}}"> 
                      
                        <input type="text" placeholder="Middle Name" name="mname" value="{{old('mname')}}" 
						class ="input {{$errors->has('mname')? 'errcol': ''}}"> 
                         <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                    </td>
                  
							<td   class="t3">
								<label title="Entry of the identification number is optional; 
however, its use as a unique identifier helps 
eliminate mistakes. ">3. Identification Number:</label>
								<input type="text" name="pid" value="{{old('pid')}}" 
								class ="input {{$errors->has('pid')? 'errcol': ''}}">
							</td>
                  <td  class="t3">
                        <label for ='ccname' title="Enter the name of the country of 
which you are a citizen. ">4. Citizenship:</label>
                            
						<select name="country" id="country" class ="select {{$errors->has('country')? 'errcol': ''}}" >
							<option value="">--- Select Country ---</option>
							@foreach(App\pel_country::all() as $nationality)
							<option value="{{ $nationality->name }}" {{ old('country') == $nationality->name ? 'selected' : '' }}>{{ $nationality->name }}</option>
							@endforeach
						</select>
				  </td>
                </tr>
                 <tr>
                    <td colspan="2" rowspan="3" class="t3">
                        <label title="Enter your permanent mailing address,
country, and complete postal code. ">5a. Address (Number and Street)</label>
                        <textarea placeholder="Enter your current address" style="width: 100%" rows="5" name="paddre" class ="textarea {{$errors->has('paddre')? 'errcol': ''}}" >{{old('paddre')}}</textarea>
                    </td>
                    <td  rowspan="3" class="t2">
                        <label>5b. City and State / province</label>
				<textarea placeholder="Enter your state or province" style="width: 100%" rows="5" name="bstate" class ="textarea {{$errors->has('bstate')? 'errcol': ''}}" > {{old('bstate')}}</textarea>
                    
                    </td>
                </tr>
        		<tr id="t2" >
                    
                  <td  width = "5%" class="t3" >
                            <label>5c. Country and postal code</label><br>
							<input type="text" name="pcode" value="{{old('pcode')}}" class ="input {{$errors->has('pcode')? 'errcol': ''}}" >
                    </td>
                  <td  class="t3" width = "5%" >
                           <label>6. Date of birth </label>
                    <input type="date" name="dob" value="{{old('dob')}}" class ="input {{$errors->has('dob')? 'errcol': ''}}" >
                                                                    
                  </td>
                  
                    <td  class="t3"  width = "5%">
                           <label>7. Hair</label>
						   <select name="hair" id="hair" class ="select {{$errors->has('hair')? 'errcol': ''}}" >
							<option value="">--- Select Hair Color ---</option>
							@foreach(App\hair::all() as $hname)
							<option value="{{ $hname->name }}" {{ old('hair') == $hname->name ? 'selected' : '' }}>{{ $hname->name }}</option>
							@endforeach
						</select>
						</td>
                </tr>
                <tr id="t2" >
                    <td  class="t3" width = "5%">
                        <label title="Enter your complete telephone number. ">5d. Telephone:</label>
                        <input type="text" name="tfone" value="{{old('tfone')}}" class ="input {{$errors->has('tfone')? 'errcol': ''}}">
                    </td>
                  <td  class="t3" width = "5%" >
                        <label>8. EYES</label><br>
						<select name="eyes" id="eyes" class ="select {{$errors->has('eyes')? 'errcol': ''}}" >
							<option value="">--- Select Eye Color ---</option>
							@foreach(App\pel_eyes::all() as $hname)
							<option value= "{{ $hname->name }}" {{ old('eyes') == $hname->name ? 'selected' : '' }}>{{ $hname->name }}</option>
							@endforeach
						</select>
									
						
						
                       
                    </td>
                   <td class="t3" colspan="4" width = "5%">
                        <label>9. GENDER</label>
						<select name ="gender" id ="gender" class ="select {{$errors->has('gender')? 'errcol': ''}}">
                            <option value="">--select Gender--</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }} >Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }} >Female</option>
                        </select>
						
						
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
                    <input type="checkbox" name="linone"  value="yes" {{ old('linone')=="yes" ? 'checked': '' }}> None<br>
                   <input type="checkbox" name="liairline" value="yes" {{ old('liairline')=="yes" ? 'checked' : ''}} > Airline transport<br>
                   <input type="checkbox" name="licommercial" 
                          {{ old('licommercial')=="yes" ? 'checked' : ''}} value="yes"> Commercial<br>
                   <input type="checkbox" name="limulticrew"
                          {{ old('limulticrew')=="yes" ? 'checked' : ''}} value="yes"> Multi-crew<br>
                  </td >
                  <td class="t4" >
                   <input type="checkbox" name="liatcspecialist" 
                          {{ old('liatcspecialist')=="yes" ? 'checked' : ''}} value="yes"> ATC specialist<br>
                   <input type="checkbox" name="liflightengineer"
                          {{ old('liflightengineer')=="yes" ? 'checked' : ''}} value="yes"> Flight engineer<br>
                   <input type="checkbox" name="liflightnav" 
                          {{ old('liflightnav')=="yes" ? 'checked' : '' }}  value="yes"> Flight navigator<br>
                   </td>
                  <td class="t4" >
                    <input type="checkbox" name="liflightinstruc" 
                           {{ old('liflightinstruc')=="yes" ? 'checked' : '' }} value="yes"> Flight instructor<br> 
                  <input type="checkbox" name="liprivate" 
                         {{ old('liprivate')=="yes" ? 'checked' : ''}} value="yes"> Private<br>
                   <input type="checkbox" name="listudent"
                           {{ old('listudent')=="yes" ? 'checked' : ''}} value="yes"> Student<br>
                   </td>
                  <td class="t4" >
                    <input type="checkbox" name="liballon"
                             {{ old('liballon')=="yes" ? 'checked' : ''}} value="yes"> Balloon<br>
                   <input type="checkbox" name="liglider"
                          {{ old('liglider')=="yes" ? 'checked' : '' }} value="yes"> Glider<br>
                   <input type="checkbox" name="liother" 
                          {{ old('liother')=="yes" ? 'checked' : ''}} value="yes"> Other
                    <input type="text" name="tliother" style="width: 100%" value="{{old('tliother')}}" class ="input {{$errors->has('tliother')? 'errcol': ''}}"> 
                      <br>
                    PEL LICENSE # <input type="text" name ="lipellicense" style="width: 100%" value="{{old('lipellicense')}}" class ="input {{$errors->has('lipellicense')? 'errcol': ''}}"> 
                     
                    </td>                
                </tr>              
               <tr  >
                  <td class="t3"><label>11. Occupation</label><input type="text"name = "occupation" value="{{old('occupation')}}" class ="input {{$errors->has('occupation')? 'errcol': ''}}"> 
                    </td>
                    <td class="t3"> <label>12. Aviation employer (name and telephone number)</label>
                      <textarea  style="width: 100%" rows="5" name="avemployer" class ="textarea {{$errors->has('avemployer')? 'errcol': ''}}" > {{old('avemployer')}}</textarea></td>
                 <td colspan="2" class="t4"><label>13. Has your CAA Airman medical certificate ever been denied, suspended, or revoked?</label>
                         <label>(a)</label><b> 
                   <input type="radio" name="certrev" value="yes" style="margin-left: 20px" 
                         {{ old('certrev')=="yes" ? 'checked' : ''}}>
                         <label for="certrev" class="input {{$errors->has('certrev')? 'errcoll': ''}}"> Yes </label>  
                         <br>
                   
                   
                   if yes, give date
                   <input type="date" name = "certd" value="{{old('certd')}}" class ="input {{$errors->has('certd')? 'errcol': ''}}">
                   <br>(Provide explanation)
                   <textarea style="width: 100%" name ="explanation" class ="textarea {{$errors->has('explanation')? 'errcol': ''}}" > {{old('explanation')}}</textarea></b>
                   <br>
                       <label>(b)</label>  <input type="radio" name="certrev" value="no" style="margin-left: 20px" {{ old('certrev')=="no" ? 'checked'  : ''}}> 
                       <label for="certrev" class="input {{$errors->has('certrev')? 'errcoll': ''}}">No</label> <br>
                        </td>
                 
                </tr>
               
              
               
                <tr id="t3" >
                    <td class="t3"><label>14a. Total pilot time (Civil only)</label>
                      <input type="text" name="tpilot" style="width: 100%" value ="{{old('tpilot')}}" class ="input {{$errors->has('tpilot')? 'errcol': ''}}">
                    </td>
                 <td class="t3"><label>14b. Total pilot time since the last 6 MONTHS</label>
                   <input type="text" name = "tpilotsm" style="width: 100%" value="{{old('tpilotsm')}}" class ="input {{$errors->has('tpilotsm')? 'errcol': ''}}">
                  </td>
                <td class="t4"><label>15a. Date of last CAA medical application</label><input type="date" name="dlma" value="{{old('dlma')}}" class ="input {{$errors->has('dlma')? 'errcol': ''}}">
                     </td>
                    <td class="t4" colspan="2"><label>15b. No prior application</label> <input type ="checkbox" name ="nprioraap" {{ old('nprioraap')=="lnprioraap" ? 'checked': ''}}  value ="lnprioraap">
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
                             {{ old('daipre')=="yes" ? 'checked' : ''}}> 
                             <label for ="daipre" class = "input {{$errors->has('daipre') ? 'errcoll' : ''}}">
                              Yes <i>(List Below)</i></label>
                             <input type="radio" value="no" name="daipre" style="margin-left: 20px" 
                             {{ old('daipre')=="no" ? 'checked' : ''}}> 
                             <label for ="daipre" class = "input {{$errors->has('daipre') ? 'errcoll' : ''}}">No</label>
                    </td>
              <td class="t5" colspan="2" align="center">
                <br>
               <label>Previously reported</label> 
              </td>
          <tr id="t4" >
                        <td class="t5" colspan ="6"><input type="text" name ="precrip1" style="width: 100%"
                           value="{{old('precrip1')}}" class ="input {{$errors->has('precrip1')? 'errcol': ''}}"></td>

                      <td class="t5" colspan="2" align="center">
                      <input type="radio" name="drug1" style="margin-left: 20px" value="yes" 
                      {{ old('drug1')=="yes" ? 'checked' : ''}}> <label class = "input {{$errors->has('drug1') ? 'errcoll' : ''}}">Yes</label>
                      <input type="radio" name="drug1" style="margin-left: 20px" value="no"
                       {{ old('drug1')=="no" ? 'checked' : ''}}> <label class = "input {{$errors->has('drug1') ? 'errcoll' : ''}}">No</label>
                    </td>
                        
                    </tr>
                    <tr id="t4" >
                        <td class="t5" colspan ="6"><input type="text" name ="precrip2" style="width: 100%" 
                          value="{{old('precrip2')}}" class ="input {{$errors->has('precrip2')? 'errcol': ''}}">
                        </td>
                        <td class="t5" colspan="2" align="center">
                        <input type="radio" name="drug2" style="margin-left: 20px" value="yes"
                        {{ old('drug2')=="yes" ? 'checked' : ''}}> <label class = "input {{$errors->has('drug2') ? 'errcoll' : ''}}">Yes</label>
                          <input type="radio" name="drug2" style="margin-left: 20px" value="no"
                          {{ old('drug2')=="no" ? 'checked' : ''}}>
                           <label class = "input {{$errors->has('drug2') ? 'errcoll' : ''}}">No</label>
                    </td>
                    </tr>
                  
                      <tr id="t4" >
                        <td class="t5"  colspan="6" ><input type="text" name ="precrip3" style="width: 100%"
                           value="{{old('precrip3')}}" class ="input {{$errors->has('precrip3')? 'errcol': ''}}"></td>
                        <td class="t5" colspan="2" align="center">
                        <input type="radio" name="drug3" style="margin-left: 20px" value="yes"
                        {{ old('drug3')=="yes" ? 'checked' : ''}}> <label class = "input {{$errors->has('drug3') ? 'errcoll' : ''}}">Yes</label>
                          <input type="radio" name="drug3" style="margin-left: 20px" value="no"
                          {{ old('drug3')=="no" ? 'checked' : ''}}> <labeln class = "input {{$errors->has('drug3') ? 'errcoll' : ''}}">No</label>
                    </td>
                    </tr>              
              
              <tr id="t4" >
                    <td class="t5" colspan="8">
                        <label>
                           17. Do you use near vision contact lenses when flying? </label>  
                      <input type="radio" name= "lense" value="yes" style="margin-left: 20px" 
                      {{ old('lense')=="yes" ? 'checked' : ''}}>  
                      <label for ="lense" class = "input {{$errors->has('lense') ? 'errcoll' : ''}}">Yes </label>
                      <input type="radio" name= "lense" value="no" style="margin-left: 20px"  
                      {{ old('lense')=="no" ? 'checked' : ''}}> 
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
              no change in your condition. <a href= "instructions">(See instructions for completion)</a>:</i>
                        
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
                        {{old('headache')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="headache" value="no"
                        {{old('headache')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('headache') ? 'errcoll' : ''}}">Frequent or severe headaches?</span>
                    </td>
                    <td class="t5" align="center">l</td>
                    <td class="t5" align="center">
                        <input type="radio" name="epilepsy" value="yes"
                        {{old('epilepsy')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="epilepsy" value="no"
                        {{old('epilepsy')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('epilepsy') ? 'errcoll' : ''}}">Neurological disorders, epilepsy, seizures, stroke, paralysis, etc</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">b</td>
                    <td class="t5" align="center">
                        <input type="radio" name="dizziness" value="yes"
                        {{old('dizziness')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="dizziness" value="no"
                        {{old('dizziness')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('dizziness') ? 'errcoll' : ''}}">Dizziness or fainting spell?</span>
                    </td>
                    <td class="t5" align="center">m</td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="yes"
                        {{old('depreession')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="depreession" value="no"
                        {{old('depreession')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('depreession') ? 'errcoll' : ''}}">Mental disorders of any sort, depression, anxiety, etc</span>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" align="center">c</td>
                    <td class="t5" align="center">
                        <input type="radio" name="unconsciousness" value="yes"
                        {{old('unconsciousness')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="unconsciousness" value="no"
                        {{old('unconsciousness')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('unconsciousness') ? 'errcoll' : ''}}">Unconsciousness for any reason?</span>
                    </td>
                    <td class="t5" align="center">n</td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="yes"
                         {{old('motionSickness')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="motionSickness" value="no"
                         {{old('motionSickness')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('motionSickness') ? 'errcoll' : ''}}">Motion sickness requiring medication?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">d</td>
                    <td class="t5" align="center">
                        <input type="radio" name="glasses" value="yes"
                        {{old('glasses')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="glasses" value="no"
                         {{old('glasses')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('glasses') ? 'errcoll' : ''}}">Eye or vision trouble except for glasses?</span>         
                    </td>
                    <td class="t5" align="center">o</td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="yes"
                        {{old('discharge')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="discharge" value="no"
                        {{old('discharge')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('discharge') ? 'errcoll' : ''}}">Medical discharge from any organization?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">e</td>
                    <td class="t5" align="center">
                        <input type="radio" name="allergy" value="yes"
                        {{old('allergy')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="allergy" value="no"
                        {{old('allergy')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('allergy') ? 'errcoll' : ''}}">Hay fever or allergy?</span>
                    </td>
                    <td class="t5" align="center">p</td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="yes"
                        {{old('rejection')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="rejection" value="no"
                        {{old('rejection')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('rejection') ? 'errcoll' : ''}}">Medical rejection by any organization?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">f</td>
                    <td class="t5" align="center">
                        <input type="radio" name="asthma" value="yes"
                        {{old('asthma')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="asthma" value="no"
                        {{old('asthma')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('asthma') ? 'errcoll' : ''}}">Asthma or lung disease?</span>
                    </td>
                    <td class="t5" align="center">q</td>
                    <td class="t5" align="center">
                        <input type="radio" name="insurance" value="yes"
                        {{old('insurance')=='yes' ? 'checked' : ''}} >
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="insurance" value="no"
                         {{old('insurance')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('insurance') ? 'errcoll' : ''}}">Rejection for life or medical insurance?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">g</td>
                    <td class="t5" align="center">
                         <input type="radio" name="vascular" value="yes"
                         {{old('vascular')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="vascular" value="no"
                         {{old('vascular')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('vascular') ? 'errcoll' : ''}}">Heart or vascular trouble?</span>
                    </td>
                    <td class="t5" align="center">r</td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="yes"
                         {{old('admission')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="admission" value="no"
                         {{old('admission')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('admission') ? 'errcoll' : ''}}">Admission to hospital?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">h</td>
                    <td class="t5" align="center">
                        <input type="radio" name="bloodPressure" value="yes"
                        {{old('bloodPressure')=='yes' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="bloodPressure" value="no"
                        {{old('bloodPressure')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('bloodPressure') ? 'errcoll' : ''}}">High or low blood pressure?</span>
                    </td>
                    <td class="t5" align="center">s</td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="yes"
                        {{old('alcohol')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="alcohol" value="no"
                        {{old('alcohol')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('alcohol') ? 'errcoll' : ''}}">Alcohol dependence or abuse; failed an alcohol test?</span></td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">i</td>
                    <td class="t5" align="center">
                         <input type="radio" name="stomach" value="yes"
                         {{old('stomach')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="stomach" value="no"
                         {{old('stomach')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('stomach') ? 'errcoll' : ''}}">Stomach, liver, or intestinal trouble?</span>
                    </td>
                    <td class="t5" align="center">t</td>
                    <td class="t5" align="center">
                         <input type="radio" name="failedTest" value="yes"
                         {{old('failedTest')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="failedTest" value="no"
                        {{old('failedTest')=='no' ? 'checked' : ''}}>
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
                         {{old('kidney')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="kidney" value="no"
                         {{old('kidney')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('kidney') ? 'errcoll' : ''}}">Kidney stone or blood in the urine?</span>
                    </td>
                    <td class="t5" align="center">u</td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="yes"
                        {{old('surgery')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="surgery" value="no"
                        {{old('surgery')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('surgery') ? 'errcoll' : ''}}">Other illness disability or surgery?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">k</td>
                    <td class="t5" align="center">
                        <input type="radio" name="suicide" value="yes"
                         {{old('suicide')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="suicide" value="no"
                         {{old('suicide')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('suicide') ? 'errcoll' : ''}}">Suicide attempt?</span>
                    </td>
                    <td class="t5" align="center">v</td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="yes"
                        {{old('diabetes')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="diabetes" value="no"
                        {{old('diabetes')=='no' ? 'checked' : ''}}>
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
                        {{old('fdisorder')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdisorder" value="no"
                        {{old('fdisorder')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('fdisorder') ? 'errcoll' : ''}}">Inherited disorders?</span>
                    </td>
                    <td class="t5" align="center">b</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="yes"
                        {{old('fglaucoma')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fglaucoma" value="no"
                        {{old('fglaucoma')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" colspan="">
                        <span class= "input {{$errors->has('fglaucoma') ? 'errcoll' : ''}}">Glaucoma?</span>
                    </td>
                </tr>
                <tr id="t4">
                    <td class="t5" align="center">c</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="yes"
                        {{old('fmental')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fmental" value="no"
                        {{old('fmental')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fmental') ? 'errcoll' : ''}}">Mental illness?</span>
                    </td>
                    <td class="t5" align="center">d</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="yes"
                        {{old('fcholesterol')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fcholesterol" value="no"
                        {{old('fcholesterol')=='no' ? 'checked' : ''}}> 
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fcholesterol') ? 'errcoll' : ''}}">High Cholesterol levels?</span>
                    </td>
                </tr>
                <tr id="t4" >
                    <td class="t5" align="center">e</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="yes"
                        {{old('fepilepsy')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fepilepsy" value="no"
                        {{old('fepilepsy')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fepilepsy') ? 'errcoll' : ''}}">Epilepsy?</span>
                    </td>
                    <td class="t5" align="center">f</td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="yes"
                         {{old('fallergies')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="fallergies" value="no"
                         {{old('fallergies')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('fallergies') ? 'errcoll' : ''}}">Allergies/asthma/eczema?</span></td>
                </tr>
                   <tr id="t4" >
                    <td class="t5" align="center">g</td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="yes"
                        {{old('fdiabetes')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="fdiabetes" value="no"
                        {{old('fdiabetes')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5">
                        <span class= "input {{$errors->has('fdiabetes') ? 'errcoll' : ''}}">Diabetes?</span>
                    </td>
                    <td class="t5" align="center">h</td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="yes"
                         {{old('ftuberculosis')=='yes' ? 'checked' : ''}}>
                    </td>
                    <td class="t5" align="center">
                         <input type="radio" name="ftuberculosis" value="no"
                         {{old('ftuberculosis')=='no' ? 'checked' : ''}}>
                    </td>
                    <td class="t5"><span class= "input {{$errors->has('ftuberculosis') ? 'errcoll' : ''}}">Tuberculosis?</span></td>
                </tr>
                <tr id="t4">
                  <td class="t5" colspan="8">
                    <b>18c. Explanations <a href= "instructions">(see instructions)</a></b>
                    <textarea style="width: 100%" name ="medexplanation" class= "textarea {{$errors->has('medexplanation') ? 'errcol' : ''}}">{{old('medexplanation')}}</textarea>
                   </td>
                    
                </tr>
        
            </tbody>
        </table>


        <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                    <tr>
                        <th class="t8" colspan="3">
                            <label>19. Conviction and/or administrative action history <a href= "instructions">(see instructions)</a></label>
                            </th>
                    </tr><tr id="t7" >
                    
                        </tr>

                    <tr >
                        <td class="t8 col-xs-7" ><label>19a.</label> <label>Have you ever had (1) 
            any convictions involving driving while intoxicated by, while impaired by, or while under
the influence of alcohol or a drug; or (2) any convictions or administrative actions involving an offense(s) which
resulted in the denial, suspension, cancellation, or revocation of driving privileges or which resulted in attendance at
an educational or rehabilitation program?</label><br>
                                <input type="radio" name ="alcho" value= "yes" 
                                {{ old('alcho')=="yes" ? 'checked' : '' }}>  <label style="margin-right: 20px" class="input {{$errors->has('alcho')? 'errcoll': ''}}">Yes</label>
                                <input type="radio" name ="alcho" value="no" {{ old('alcho')=="no" ? 'checked' : '' }}> <label 
                                class="input {{$errors->has('alcho')? 'errcoll': ''}}">No</label>
                            </td>
                        
                        <td class="t8 " colspan="2"><label>19b.</label><label>Have you ever had any non-traffic convictions 
            (misdemeanours or felonies)?</label><br>
                        <input type="radio" name = "nontraf" value="yes"
                        {{old('nontraf')=="yes" ? 'checked' : ''}}>  <label style="margin-right: 20px" class="input {{$errors->has('nontraf')? 'errcoll': ''}}">Yes</label>
                        <input type="radio" name = "nontraf" value="no"
                        {{old('nontraf')=="no" ? 'checked' : ''}}> <label class="input {{$errors->has('nontraf')? 'errcoll': ''}}">No</label>

                        </td>
                    </tr>
                <tr id="t7" >
                    <td class="t8" colspan="2"><label>19c. Explanations <a href= "instructions">(see instructions)</a></label>
                        <textarea style="width: 100%" rows="3" name="convicexpl" class="input {{$errors->has('convicexpl')? 'errcol': ''}}">{{old('convicexpl')}}</textarea>
                    </td>
                    <td class="t8"><b>FOR CAA USE</b>
                        <textarea style="width: 100%" name="fcaause" rows ="3">{{old('fcaause')}} </textarea>
                    </td>
                </tr>
        
                </tbody>
            </table>

              <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                    
                    <tr id="t5" ><td class="t6" colspan="3">
                      <label>20. Visit to health professional within the last 3 years?</label>
                            <input type="radio" name ="vhealth" value="yes"
                            {{old('vhealth')=="yes" ? 'checked' : ''}}> 
                            <label style="margin-right: 20px" class="input {{$errors->has('vhealth')? 'errcoll': ''}}">Yes <i>(Explain Below)</i>
                            </label>
                            <input type="radio" name ="vhealth" value="no"
                            {{old('vhealth')=="no" ? 'checked' : ''}}> 
                            <label class="input {{$errors->has('vhealth')? 'errcoll': ''}}">No</label>
                        </td>
                        </tr>
                    <tr id="t5" >
                        <td class="t6 col-xs-2" ><label>Date</label></td>
                        <td class="t6 col-xs-4"><label>Name, Address & Type of Health Professional Consulted</label></td>
                        <td class="t6"><label>Reason</label></td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><input type="date" name ="dvprofesional1" value="{{old('dvprofesional1')}}" class="input {{$errors->has('dvprofesional1')? 'errcol': ''}}"></td>
                        <td class="t6">
                          <textarea rows="2" style="width: 100%" name="vhealth1"  class="input {{$errors->has('vhealth1')? 'errcol': ''}}">{{old('vhealth1')}}</textarea>
                        <td class="t6">
                        <textarea rows="2" style="width: 100%" name = "vrhealth1"class="input {{$errors->has('vrhealth1')? 'errcol': ''}}">{{old('vrhealth1')}}</textarea>
                      </td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><input type="date" name ="dvprofesional2" value="{{old('dvprofesional2')}}" class="input {{$errors->has('dvprofesional2')? 'errcol': ''}}"></td>
                        <td class="t6"><textarea rows="2" style="width: 100%" name ="vhealth2" class="input {{$errors->has('vhealth2')? 'errcol': ''}}" >{{old('vhealth2')}}</textarea>
                        <td class="t6"><textarea rows="2" style="width: 100%" name ="vrhealth2" class="input {{$errors->has('vrhealth2')? 'errcol': ''}}">{{old('vrhealth2')}}</textarea></td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><input type="date" name ="dvprofesional3" value="{{old('dvprofesional3')}}" class="input {{$errors->has('dvprofesional3')? 'errcol': ''}}"></td>
                       <td class="t6"><textarea rows="2" style="width: 100%" name="vhealth3" class="input {{$errors->has('vhealth3')? 'errcol': ''}}">{{old('vhealth3')}}</textarea>
                        <td class="t6"><textarea rows="2" style="width: 100%"name = "vrhealth3" class="input {{$errors->has('vrhealth3')? 'errcol': ''}}">{{old('vrhealth3')}}</textarea>
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
                    <td class="t9"><label>1. Date<br> <input type="date" name="dacknowledge" value="{{old('dacknowledge')}}" class="input {{$errors->has('dacknowledge')? 'errcol': ''}}"></label>
                    </td>
                    
                    <td class="t9"><label>2. Signature of applicant</label>
                      <textarea rows="" cols="48" placeholder="signature" name="signature" class="input {{$errors->has('signature')? 'errcol': ''}}">{{old('signature')}}</textarea>
                    </td>
                </tr>
                <tr id="t8" >
                    <td  class="t9" colspan="2"><span>Select AME</span>
                      <select name="ame" id="ame" class ="select {{$errors->has('ame')? 'errcol': ''}}" >
                        <option value="">--- Select AME ---</option>
                        @foreach(App\pel_ame::all() as $doctor)
                        <option value="{{ $doctor->name }}" {{ old('ame') == $doctor->name ? 'selected' : '' }}>{{ $doctor->name }}</option>
                        @endforeach
                      </select> 
                    </td>
                   <td  class="t9" colspan="2"><span>Book an Appointment</span><select name="ameappoint" id="ame" class ="select {{$errors->has('ame')? 'errcol': ''}}" >
                        <option value="">--- Select AME ---</option>
                        @foreach(App\pel_ame::all() as $doctor)
                        <option value="{{ $doctor->name }}" {{ old('ame') == $doctor->name ? 'selected' : '' }}>{{ $doctor->name }}</option>
                        @endforeach
                      </select> 
                   </td>
                </tr>
                  <tr id="t8" >
                    <td  class="t9" colspan="3"><span>CAA Form 548 [c]2018</span><aside class="text-right">Page 1 of 2.</aside></td>
                </tr>
        
            </tbody>
        </table>




         <div align = "right">
          <button type="submit" >Submit</button>
        </div>
        
  </form>
  </div>
@endsection
  
 

     
