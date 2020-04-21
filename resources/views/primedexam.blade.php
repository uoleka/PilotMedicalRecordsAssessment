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
 
  <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
            <tbody class="appSubSec">
         <tr><th colspan="10" class="t3"> </th></tr>
                <tr id="t2"  >
                 <td colspan="6" class="">  
                 <label for="formClass" class=""> 1. Class of medical certificate applied for:</label><label style="margin: 20px">  </label>
         <label style="margin: 20px">  </label>
    <label style="margin: 20px">  </label>
    <label style="margin: 20px">  </label>   
    <span style="margin: 20px"><label  >1.</label>
                   <input type="radio" name="formClass" 
           class="text-right" style="margin: 10px" value="1"
            {{ $person->formClass =="1" ? 'checked' : "disabled='disabled'"}} >
          </span>
                
        <span style="margin: 20px"><label for="formClass" >2.</label>
                  
                <input type="radio" name="formClass" value="2"
        {{ $person->formClass =="2" ? 'checked' :"disabled='disabled'"}}
        class="text-right " style="margin: 10px" >
        </span>

                <span style="margin: 20px">
        <label for="formClass" >3.</label>
                  
                <input type="radio" name="formClass" value="3"
        {{ $person->formClass =="3" ? 'checked' : "disabled='disabled'"}}
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
                        <div class="cll">{{$person->lname}}</div>
            
                    <div class="cll">{{$person->fname}}</div>
          
                      
                       <div class="cll">{{$person->mname}}</div>
                                            
                    </td>
                  
              <td   class="t3">
                <label>3. Identification Number:</label>
                <div class="cll">{{$person->pid}}</div>
              </td>
                  <td  class="t3">
                        <label for ='ccname'>4. Citizenship:</label>
                        
                        <div class="cll">{{$person->country}}</div> 
            
            </td>
                </tr>
                 <tr>
                    <td colspan="2" rowspan="3" class="t3">
                        <label>5a. Address (Number and Street)</label>
                        <div class="cll">{{$person->paddre}}</div>
                    </td>
                    <td colspan="2" rowspan="3" class="t2">
                        <label>5b. City and State / province</label>
        <div class="cll">{{$person->bstate}}</div>
                    
                    </td>
                </tr>
            <tr id="t2" >
                    
                  <td  class="t3" >
                            <label>5c. Country and postal code</label><br>
              <div class="cll">{{$person->pcode}}</div>
                    </td>
                  <td  class="t3" >
                           <label>6. Date of birth </label>
                    <div class="cll">{{$person->dob}}</div>
                                                                    
                  </td>
                  
                    <td  class="t3" >
                           <label>7. Hair</label>
                           <div class="cll">{{$person->hair}}</div>
               
            </td>
                </tr>
                <tr id="t2" >
                    <td  class="t3">
                        <label>5d. Telephone:</label>
                        <div class="cll">{{$person->tfone}}</div>
                    </td>
                  <td  class="t3" >
                        <label>8. EYES</label><br>
                        <div class="cll">{{$person->eyes}}</div>
              
                    </td>
                   <td class="t3" colspan="4" >
                        <label>9. GENDER</label>
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
                <tr ><th colspan="4" class="t4">10. Types of Licenses you currently hold</th></tr>
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
                  <td class="t3"><label>11. Occupation</label><div class="cll">{{$person->occupation}}</div>
                    </td>
                    <td class="t3"> <label>12. Aviation employer (name and telephone number)</label>
                      <div class="cll">{{$person->avemployer}}</div></td>
                 <td colspan="2" class="t4"><label>13. Has your CAA Airman medical certificate ever been denied, suspended, or revoked?</label>
                         <label>(a)</label><b> 
                   <input type="radio" name="certrev" value="yes" style="margin-left: 20px" 
                         {{ $person->certrev =="yes" ? 'checked' : "disabled='disabled'"}}>
                         <label for="certrev"> Yes </label>  <br>
                   
                   
                   if yes, give date
                   <div class="cll">{{$person->certd}}</div><br>(Provide explanation)
                   <div class="cll">{{$person->explanation}}</div></b><br>
                       <label>(b)</label>  <input type="radio" name="certrev" value="no" style="margin-left: 20px" {{ $person->certrev =="no" ? 'checked'  : "disabled='disabled'"}}> 
                       <label for="certrev" >No</label> <br>
                        </td>
                 
                </tr>
               
              
               
                <tr id="t3" >
                    <td class="t3"><label>14a. Total pilot time (Civil only)</label>
                      <div class="cll">{{$person->tpilot}}</div>
                    </td>
                 <td class="t3"><label>14b. Total pilot time since the last 6 MONTHS</label>
                   <div class="cll">{{$person->tpilotsm}}</div>
                  </td>
                <td class="t4"><label>15a. Date of last CAA medical application</label><div class="cll">{{$person->dlma}}</div>
                     </td>
                    <td class="t4" colspan="2"><label>15b. No prior application</label> <input type ="checkbox" name ="nprioraap" {{ $person->nprioraap =="lnprioraap" ? 'checked': "Disabled='disabled'"}}  value ="lnprioraap">
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
                             {{ $person->daipre =="yes" ? 'checked' : "disabled='disabled'"}}> 
                             <label for ="daipre" >
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
                        <label>
                           17. Do you use near vision contact lenses when flying? </label>  
                      <input type="radio" name= "lense" value="yes" style="margin-left: 20px" {{ $person->lense =="yes" ? 'checked' : "disabled='disabled'"}}>  
                      <label for ="lense" >Yes </label>
                      <input type="radio" name= "lense" value="no" style="margin-left: 20px"  {{ $person->lense =="no" ? 'checked' : "disabled='disabled'"}}> 
                      <label for ="lense" >No</label>
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
                        {{$person->headache =='yes' ? 'checked' : "disabled='disabled'"}}>
                    </td>
                    <td class="t5" align="center">
                        <input type="radio" name="headache" value="no"
                        {{$person->headache =='no' ? 'checked' : "disabled='disabled'"}}> 
                    </td>
                    <td class="t5" colspan="">
                        <span >Frequent or severe headaches?</span>
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
                        <span >Admission to hospital?</span>
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
                        <span >Kidney stone or blood in the urine?</span>
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
                        <div class="cll">{{$person->convicexpl }}</div>
                    </td>
                    <td class="t8"><b>FOR CAA USE</b>
                        <div class="cll">{{$person->fcaause }} </div>
                    </td>
                </tr>
        
                </tbody>
            </table>


            <table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                    
                    <tr id="t5" ><td class="t6" colspan="3">
                      <label>20. Visit to health professional within the last 3 years?</label>
                            <input type="radio" name ="vhealth" value="Yes"
                            {{$person->vhealth =="yes" ? 'checked' : "disabled='disabled'"}}> 
                            <label style="margin-right: 20px" >Yes <i>(Explain Below)</i>
                            </label>
                            <input type="radio" name ="vhealth" value="no"
                            {{$person->vhealth =="no" ? 'checked' : "disabled='disabled'"}}> 
                            <label >No</label>
                        </td>
                        </tr>
                    <tr id="t5" >
                        <td class="t6 col-xs-2" ><label>Date</label></td>
                        <td class="t6 col-xs-4"><label>Name, Address & Type of Health Professional Consulted</label></td>
                        <td class="t6"><label>Reason</label></td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><div class="cll">{{$person->dvprofesional1 }}</div></td>
                        <td class="t6">
                          <div class="cll">{{$person->vhealth1 }}</div>
                        <td class="t6">
                        <div class="cll">{{$person->vrhealth1 }}</div>
                      </td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><div class="cll">{{$person->dvprofesional2 }}</div></td>
                        <td class="t6"><div class="cll">{{$person->vhealth2 }}</div>
                        <td class="t6"><div class="cll">{{$person->vrhealth2 }}</div></td>
                    </tr>
                    <tr id="t5" >
                        <td class="t6"><div class="cll">{{$person->dvprofesional3 }}</div></td>
                       <td class="t6"><div class="cll">{{$person->vhealth3 }}</div>
                        <td class="t6"><div class="cll">{{$person->vrhealth3 }}</div>
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
                    <td class="t9"><label>1. Date<br> <div class="cll">{{$person->dacknowledge }}</div></label>
                    </td>
                    
                    <td class="t9"><label>2. Signature of applicant</label>
                      <div class="cll">{{$person->signature }}</div>
                    </td>
                </tr>
                <tr id="t8" >
                    <td  class="t9" colspan="2"><span>Select AME</span>
                      <div class="cll">{{$person->ame}}</div>
                      
                    </td>
                   <td  class="t9" colspan="2"><span>Book an Appointment</span>
                    <div class="cll">{{$person->ame}}</div>
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
              <td><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label> [BAG Generic]</label></p></td></tr>
                <tr>
                    <th class="t10 text-center"><span>REPORT OF MEDICAL EXAMINATION</span></th>
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
                        <div class="cll">{{$personmed->height}}   
                       </div>
                    </td>
             				<td class="t11" >
                       <label> 23. Weight(kg)</label>
                        <div class="cll">{{$personmed->weight}}</div>
                        
                    </td>
                    <td class="t11" colspan="3"><label>24. Statement of Demonstrated Ability (SODA)</label><br>
                        <input type="radio" value="yes" name="soda" {{ $personmed->soda =="yes" ? "checked" : "disabled='disabled'"}}> 
                        <label >YES</label>
                        <input type="radio" value="no" name="soda" {{ $personmed->soda =="no" ? "checked" : "disabled='disabled'"}}> 
                        <label >NO</label>
                        <span>DEFECT NOTED</span>
                       <div class="cll">{{$personmed->dnoted}}</div>  
                        
                    </td>
             <td>
               <label> 25. SODA Serial Number</label> 
               <div class="cll">{{$personmed->sodasn}} </div>
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
                        <td class="t11"><input type="radio" name="head" value="yes" style="margin: 10px 20px" {{ $personmed->head =="yes" ? "checked" : "disabled='disabled'"}}></td>
                        <td class="t11">
                             <input type="radio" name="head" value="no" style="margin: 10px 20px" {{ $personmed->head =="no" ? "checked" : "disabled='disabled'"}}></td>
                        <td class="t11" colspan="">
                            <span >Head, face, neck and scalp</span>   
                        </td><td class="t11">38</td>
                        <td class="t11"><input type="radio" name="vascularsys" value="yes" style="margin: 10px 20px" {{ $personmed->vascularsys =="yes" ? "checked" : "disabled='disabled'"}}></td>
                        <td class="t11">
                             <input type="radio" name="vascularsys" value="no" style="margin: 10px 20px" {{ $personmed->vascularsys =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11" colspan=""><span c>Vascular system (Pulse, amplitude & character, arms, legs, other</span>
                        </td>
                    </tr>
                        <tr id="t10" >
                            <td class="t11">27</td>
                            <td class="t11"><input type="radio" name="nose" value="yes" style="margin: 10px 20px" {{ $personmed->nose =="yes" ? "checked" : "disabled='disabled'"}}></td>
                            <td class="t11">
                             <input type="radio" name="nose" value="no" style="margin: 10px 20px" {{ $personmed->nose =="no" ? "checked" : "disabled='disabled'"}}> </td>
                       <td class="t11">
                            <span >Nose</span>
                             
                        </td><td class="t11">39</td>
                            <td class="t11"><input type="radio" name="abdomen" value="yes" style="margin: 10px 20px" {{ $personmed->abdomen =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                             <input type="radio" name="abdomen" value="no" style="margin: 10px 20px" {{ $personmed->abdomen =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >Abdomen and viscera (including hernia)</span>
                        </td>
                    </tr>
                     <tr id="t10" ><td class="t11">28</td>
                         <td class="t11"><input type="radio" name="sinuses" value="yes" style="margin: 10px 20px" {{ $personmed->sinuses =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                         <td class="t11">
                             <input type="radio" name="sinuses" value="no" style="margin: 10px 20px" {{ $personmed->sinuses =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11">
                            <span  >Sinuses</span>
                        </td><td class="t11">40</td>
                         <td class="t11"><input type="radio" name="anus" value="yes" style="margin: 10px 20px" {{ $personmed->anus =="yes" ? "checked" : "disabled='disabled'"}}></td>
                         <td class="t11">
                             <input type="radio" name="anus" value="no" style="margin: 10px 20px" {{ $personmed->anus =="no" ? "checked" : "disabled='disabled'"}}></td>
                        <td class="t11"><span >Anus (not including digital examination)</span>
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">29</td>
                            <td class="t11"><input type="radio" name="mouth" value="yes" style="margin: 10px 20px" {{ $personmed->mouth =="yes" ? "checked" : "disabled='disabled'"}}></td>
                            <td class="t11">
                             <input type="radio" name="mouth" value="no" style="margin: 10px 20px" {{ $personmed->mouth =="no" ? "checked" : "disabled='disabled'"}}> </td>
                       <td class="t11">
                            <span  > Mouth and throat</span>
                                                     </td>
                                                     <td class="t11">41</td>
                            <td class="t11"><input type="radio" name="skin" value="yes" style="margin: 10px 20px"{{ $personmed->skin =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                             <input type="radio" name="skin" value="no" style="margin: 10px 20px"{{ $personmed->skin =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >Skin</span>
                        </td>
                    </tr>
                     <tr id="t10" ><td class="t11">30</td>
                         <td class="t11"><input type="radio" name="ear" value="yes" style="margin: 10px 20px" {{ $personmed->ear =="yes" ? "checked" : "disabled='disabled'"}}></td>
                         <td class="t11">
                             <input type="radio" name="ear" value="no" style="margin: 10px 20px" {{ $personmed->ear =="no" ? "checked" : "disabled='disabled'"}}></td>
                        <td class="t11">
                            <span >Ears, general (internal and external canals, hearing under item 50)</span>    
                        </td><td class="t11">42</td>
                         <td class="t11"><input type="radio" name="gusys" value="yes" style="margin: 10px 20px" {{ $personmed->gusys =="yes" ? "checked" : "disabled='disabled'"}}></td>
                         <td class="t11">
                            <input type="radio" name="gusys" value="no" style="margin: 10px 20px" {{ $personmed->gusys =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >G-U system (not including pelvic examination)</span>
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">31</td>
                            <td class="t11"><input type="radio" name="eardrum" value="yes" style="margin: 10px 20px" {{ $personmed->eardrum =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                             <input type="radio" name="eardrum" value="no" style="margin: 10px 20px" {{ $personmed->eardrum =="no" ? "checked" : " "}}> </td>
                       <td class="t11">
                            <span >Ear Drums (perforation)</span>
                             
                        </td><td class="t11">43</td>
                            <td class="t11"><input type="radio" name="extremities" value="yes" style="margin: 10px 20px" {{ $personmed->extremities =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                             <input type="radio" name="extremities" value="no" style="margin: 10px 20px" {{ $personmed->extremities =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >Upper and lower extremities (strength and range of motion)</span>
                             </td>
                    </tr>
                     <tr id="t10" ><td class="t11">32</td>
                         <td class="t11"><input type="radio" name="eyes" value="yes" style="margin: 10px 20px" {{ $personmed->eyes =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                         <td class="t11">
                             <input type="radio" name="eyes" value="no" style="margin: 10px 20px" {{ $personmed->eyes =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11">
                            <span >Eyes, general (vision under item 51)</span>
                             
                        </td><td class="t11">44</td>
                         <td class="t11"><input type="radio" name="spine" value="yes" style="margin: 10px 20px" {{ $personmed->spine =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                         <td class="t11">
                             <input type="radio" name="spine" value="no" style="margin: 10px 20px" {{ $personmed->spine =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >Spine, other musculoskeletal</span>
                             
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">33</td>
                            <td class="t11"><input type="radio" name="opthal" value="yes" style="margin: 10px 20px" {{ $personmed->opthal =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                             <input type="radio" name="opthal" value="no" style="margin: 10px 20px" {{ $personmed->opthal =="no" ? "checked" : "disabled='disabled'"}}> </td>
                       <td class="t11">
                            <span >Ophthalmoscopic</span>
                             
                        </td><td class="t11">45</td>
                        <td class="t11">  <input type="radio" name="bodymarks" value="yes" style="margin: 10px 20px" {{ $personmed->bodymarks =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                            <input type="radio" name="bodymarks" value="no" style="margin: 10px 20px" {{ $personmed->bodymarks =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >Identifying body marks, scars, tattoos (size and location)</span>
                            
                        </td>
                    </tr>
                     <tr id="t10" ><td class="t11">34</td>
                         <td class="t11"><input type="radio" name="pupils" value="yes" style="margin: 10px 20px" {{ $personmed->pupils =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                         <td class="t11">
                             <input type="radio" name="pupils" value="no" style="margin: 10px 20px" {{ $personmed->pupils =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11">
                            <span >Pupils (Equality and Reaction)</span>
                        </td><td class="t11">46</td>
                         <td class="t11"><input type="radio" name="lymphatics" value="yes" style="margin: 10px 20px" {{ $personmed->lymphatics =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                         <td class="t11">
                             <input type="radio" name="lymphatics" value="no" style="margin: 10px 20px" {{ $personmed->lymphatics =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >	Lymphatics	</span>
                             
                        </td>
                    </tr>
                        <tr id="t10" ><td class="t11">35</td>
                            <td class="t11"> <input type="radio" name="ocularotility" value="yes" style="margin: 10px 20px" {{ $personmed->ocularotility =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                             <input type="radio" name="ocularotility" value="no" style="margin: 10px 20px" {{ $personmed->ocularotility =="no" ? "checked" : "disabled='disabled'"}}> </td>
                       <td class="t11">
                            <span > Ocular motility (associated parallel movement) </span>
                            
                        </td><td class="t11">47</td>
                            <td class="t11">
                                <input type="radio" name="neurologic" value="yes" style="margin: 10px 20px" 
                                {{ $personmed->neurologic =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            <td class="t11">
                             <input type="radio" name="neurologic" value="no" style="margin: 10px 20px"
                             {{ $personmed->neurologic =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span >Neurologic (tendon reflexes, equilibrium, cranial nerves, coordination, etc.)</span>
                             
                        </td>
                    </tr>
                    <tr id="t10" ><td class="t11" >36</td>
                        <td class="t11">
                            <input type="radio" name="lungsschest" value="yes" style="margin: 10px 20px"
                            {{ $personmed->lungsschest =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            
                        <td class="t11">
                             <input type="radio" name="lungsschest" value="no" style="margin: 10px 20px"
                             {{ $personmed->lungsschest =="no" ? "checked" : "disabled='disabled'"}}> </td>
                       <td class="t11">
                            <span >
                            Lungs and Chest (not including breast exam)</span>
                             
                        </td><td class="t11">48</td>
                        <td class="t11">
                            <input type="radio" name="psychiatric" value="yes" style="margin: 10px 20px"
                            {{ $personmed->psychiatric =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            
                        <td class="t11">
                             <input type="radio" name="psychiatric" value="no" style="margin: 10px 20px"
                             {{ $personmed->psychiatric =="no" ? "checked" : "disabled='disabled'"}}> </td>
                        <td class="t11"><span>Psychiatric (appearance, behavior, mood, communication & memory)</span>
                             
                        </td>
                    </tr>
                    <tr id="t10" ><td class="t11">37</td>
                        <td class="t11">
                            <input type="radio" name="hear" value="yes" style="margin: 10px 20px"
                            {{ $personmed->hear =="yes" ? "checked" : "disabled='disabled'"}}> </td>
                            
                        <td class="t11">
                            <input type="radio" name="hear" value="no" style="margin: 10px 20px"
                            {{ $personmed->hear =="no" ? "checked" : "disabled='disabled'"}}>
                        </td>
                       <td class="t11">
                            <span >Heart (precordial activity, rhythm, sounds &amp; murmurs))</span>
                             
                        </td><td>49</td>
                        <td class="t11"> <input type="radio" name="gensys" value="yes" style="margin: 10px 20px" 
                            {{ $personmed->gensys =="yes" ? "checked" : "disabled='disabled'"}}> 
                        </td>
                            
                        <td class="t11">
                             <input type="radio" name="gensys" value="no" style="margin: 10px 20px"
                             {{ $personmed->gensys =="no" ? "checked" : "disabled='disabled'"}}> 
                         </td>
                        <td class="t11">
                            <span >General Systemic	
                            </span>
                            
                        </td>
                    </tr>
                    <tr id="t10" >
                        <td class="t11" colspan="8"><label><i> NOTES:	(Describe every abnormality in detail. Enter applicable item number before each comment. Use additional sheets if necessary and attach to this form.</i></label>
                            <div class="cll">{{$personmed->abdescription}} </div>
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
                            <label >Conversational Voice Test (2m)</label>
                        </td>
                        <td class="t12" colspan="6">
                            <label class="text-center">Record Audiometric Speech Discrimination score below</label>
                        </td>
                    </tr>
                    <tr id="t11">
                        <td class="t12" rowspan="1" colspan="6">
                            <label class="col-xs-">PASS</label> 
                            <input type="radio" value="pass" name="hrresult" style="margin: 10px" 
                             {{ $personmed->hrresult =="pass" ? "checked" : "disabled='disabled'"}}>
                            <br>
                            <label class="col-xs-">FAIL</label> 
                            <input type="radio" value="fail" name="hrresult" style="margin: 15px"
                             {{ $personmed->hrresult =="fail" ? "checked" : "disabled='disabled'"}}>
                        </td>
                        <td class="t12" rowspan="1" colspan="6">
                            <div class="cll">{{$personmed->audiospeechdis}}</div>
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
                            <label >500</label></td>
                        <td class="text-center t12">
                            <label >1000</label>
                        </td>
                        <td class="text-center t12">
                            <label >2000</label>
                        </td>
                        <td class="text-center t12">
                            <label >3000</label>
                        </td>
                        <td class="text-center t12">
                            <label>4000</label>
                        </td>
                      	<td class="text-center t12">
                            <label>500</label>
                        </td>
                        <td class="text-center t12">
                            <label>1000</label>
                        </td>
                        <td class="text-center t12">
                            <label>2000</label>
                        </td>
                        <td class="text-center t12">
                            <label>3000</label>
                        </td>
                        <td class="text-center t12">
                            <label>4000</label>
                        </td>
                    </tr>
                   <tr id="t11" >
                   <td class="t12" colspan="2">Threshold in decibels</td>
                    <td class="text-center t12">
                        <div align="right">
                            <div class="cll">{{$personmed->fivehuna}}</div>
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <div class="cll">{{$personmed->onethoua}}</div>
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <div class="cll">{{$personmed->twothoua}}</div>
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <div class="cll">{{$personmed->threethoua}}</div>
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <div class="cll">{{$personmed->fourthoua}}</div>
                        </div>
                    </td>
                   
                    <td class="text-center t12">
                        <div align="center">
                            <div class="cll">{{$personmed->fivehunb}}</div>
                        </div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <div class="cll">{{$personmed->onethoub}}</div>
                        </div>
                    </td>
                    <td align="center" class="text-center t12">
                        <div class="cll">{{$personmed->twothoub}}</div>
                    </td>
                    <td class="text-center t12">
                        <div align="center">
                            <div class="cll">{{$personmed->threethoub}}</div>
                        </div>
                    </td>
                     <td class="text-center t12">
                        <div align="center">
                           <div class="cll">{{$personmed->fourthoub}}</div>
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
                                <label >PASS</label>
                                <input type="radio" name="colorresult" value="pass"  {{$personmed->colorresult =='pass' ? 'checked' : "disabled='disabled'"}}>
                            </div>
                            <div class="col-xs-4">
                                <label >FAIL</label>
                                <input type="radio" name="colorresult" value="fail"  {{$personmed->colorresult =='fail' ? 'checked' : "disabled='disabled'"}}>
                            </div>
                        </td>
                  
                </tr>
                <tr id="t12" >
                    <td class="t13" colspan ="2">
                        <div class="column" >
                            
                                <span >Right = 6/</span>
                                <div class="cll">{{$personmed->rightear}}</div>
                                <br>
                                <br>
                                <span >Corrected to 6/</span>
                                <div class="cll">{{$personmed->rightear}}</div>
                            
                            </div>
                    </td>
                        <td class="t13">
                          <div class="col-xs-4"><label >PASS</label> 
                            <input type="radio" name="nearright" value="pass" {{$personmed->nearright =='pass' ? 'checked' : "disabled='disabled'"}}>
                        </div>
                          <div class="col-xs-4"><label >FAIL</label>
                          <input type="radio" name="nearright" value="fail" {{$personmed->nearright =='fail' ? 'checked' : "disabled='disabled'"}}>
                        </div>
                            
                          </td>
                        <td class="t13">
                          <div class="col-xs-4"><label >PASS</label>
                            <input type="radio" name="interright" value="pass" {{$personmed->interright =='pass' ? 'checked' : "disabled='disabled'"}}>
                          </div>
                          <div class="col-xs-4"><label>FAIL</label>
                            <input type="radio" name="interright" value="fail" {{$personmed->interright =='fail' ? 'checked' : "disabled='disabled'"}}>
                          </div>							
                  		</td>
                    </tr>
                    <tr id="t12" >
                        
                        <td class="t13" colspan ="2">
                            <div class="column">
                            
                            <span >Left = 6/</span>
                           <div class="cll">{{$personmed->leftear}}</div>
                            <br>
                            <br>
                            <span>Corrected to 6/</span>
                        	 <div class="cll">{{$personmed->leftcorear}}</div>
                  
                            </div>
                        </td>

                        <td class="t13">
                      	<div class="col-xs-4"><label>PASS</label> <input type="radio" name="nearleft" value="pass" {{$personmed->nearleft=='pass' ? 'checked' : "disabled='disabled'"}}></div>
                        <div class="col-xs-4"><label>FAIL</label> <input type="radio" value="fail" name="nearleft" {{$personmed->nearleft=='fail' ? 'checked' : "disabled='disabled'"}}></div>
                      	
                      	</td>
                        <td class="t13">
                      	<div class="col-xs-4"><label>PASS</label>
                         <input type="radio" value="pass" name="interleft" {{$personmed->interleft=='pass' ? 'checked' : "disabled='disabled'"}}>
                        </div>
                        <div class="col-xs-4"><label >FAIL</label> 
                            <input type="radio" name="interleft" value="fail" name="interleft" {{$personmed->interleft=='fail' ? 'checked' : "disabled='disabled'"}}>
                        </div>
                       	</td>
               			 </tr>
                <tr id="t12">
                    <td class="t13" colspan ="2">
                        <div class="column">
                            
                            <span class="">Both = 6/</span>
                              <div class="cll">{{$personmed->bothear}}</div>
                            <br>
                            <br>
                            <span>Corrected to 6/</span>
                        	 <div class="cll">{{$personmed->bothcorear}}</div>
                            
                            </div>
                    </td>
                    <td class="t13">
                      <div class="col-xs-4"><label >PASS</label> 
                        <input type="radio" value="pass" name="nearboth" {{$personmed->nearboth =='pass' ? 'checked' : "disabled='disabled'"}}>
                    </div>
                      <div class="col-xs-4"><label >FAIL</label> <input type="radio" value="fail" name="nearboth" {{$personmed->nearboth =='fail' ? 'checked' : "disabled='disabled'"}}>
                      </div>
                    </td>
                    <td class="t13">
                      <div class="col-xs-4">
                        <label >PASS</label> 
                        <input type="radio" name="interboth" value="pass" {{$personmed->interboth =='pass' ? 'checked' : "disabled='disabled'"}}>
                    </div>
                      <div class="col-xs-4">
                        <label >FAIL</label> 
                        <input type="radio" name="interboth" value="fail" {{$personmed->interboth =='fail' ? 'checked' : "disabled='disabled'"}}>
                    </div>
                    </td>
                  
                     </tr>
              
              		<tr id="t12" >
                        <td class="t13" ><label>Field of vision </label><br>
                         <div class="col-xs-4"><label>PASS</label> 
                            <input type="radio" name="fovision" value="pass" {{$personmed->fovision =='pass' ? 'checked' : "disabled='disabled'"}}>
                         </div>
                         <div class="col-xs-4"><label>FAIL</label> 
                            <input type="radio" name="fovision" value="fail" {{$personmed->fovision =='fail' ? 'checked' : "disabled='disabled'"}}>
                         </div>
                		</td>
                        <td class="t13" ><label>Heterophoria 20’<br>(in prism dioptres)</label></td>
                        	    <td class="t13" >
                                    <label>Esophoria</label><br>
                                    <div class="cll">{{$personmed->esoph}}</div>
                                </td>
                        		<td class="col-xs-2">
                                    <label>Exophoria</label><br>
                                    <div class="cll">{{$personmed->exoph}}</div>
                          		<td class="col-xs-2">
                                    <label>Right Hyperphoria</label><br>
                                    <div class="cll">{{$personmed->rhyper}}</div>
                                </td>

                            	<td class="col-xs-2">
                                    <label>Left Hyperphoria</label><br>
                                    <div class="cll">{{$personmed->lhyper}}</div>
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
                      <div class="cll">{{$personmed->systolic}}</div>
                 </td>
                  <td>
                      <span>b. Diastolic:</span> <br> 
                      <div class="cll">{{$personmed->diastolic}}</div>
                      
                 </td>
                    <td class="t14">
                        <label>53. Pulse (resting):</label> <br><div class="cll">{{$personmed->pulse}}</div>
                    </td>
                  </tr>
                  <tr id="t13" >
                  <td class="t14" >
                    <label>54. URINALYSIS:</label><br> (if abnormal, give results)<br>
                    <input type="radio" name="urinalysis" Value="normal" {{$personmed->urinalysis =='normal' ? 'checked' : "disabled='disabled'"}}><label >Normal</label> <br>
                    <input type="radio" name="urinalysis" Value="abnormal" {{$personmed->urinalysis =='abnormal' ? 'checked' : "disabled='disabled'"}}><label >Abnormal</label> 
                    </td>
                    <td class="t14">
                      a. Albumin (SPECIFY): <div class="cll">{{$personmed->albumin}}</div>
                    </td>
                    <td class="t14">
                      b. Sugar(SPECIFY): <div class="cll">{{$personmed->sugar}}</div>
                    </td>
                    <td class="t14">
                        <label>55. ECG (Date):</label><br> <div class="cll">{{$personmed->ecgdate}}</div>
                    </td>
                </tr>
				<tr>
                        <td class="t15" colspan="4"><b>56. Other tests given</b><br> 
                         <div class="cll">{{$personmed->othertestgiv}}</div>
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
                        <div class="cll">{{$personmed->commenonhist}}</div>
                               </td>
                       </tr>
                    <tr id="t16" >
                        <td class="t17" >
                            <b>Significant Medical History?</b><br>
                        <input type="radio" name="sigmedhis" value ='yes' {{$personmed->sigmedhis =='yes' ? 'checked' : "disabled='disabled'"}}> <label style="margin-right: 20px" >YES</label> 
                            <input type="radio" name="sigmedhis" value ='no' {{$personmed->sigmedhis =='no' ? 'checked' : "disabled='disabled'"}}> <label >NO</label> 
                            </td>
                            <td class="t17" >
                                <b>Abnormal Physical Findings?</b><br> 
                                <input type="radio" name="abphyfinding" value='yes' {{$personmed->abphyfinding =='yes' ? 'checked' : "disabled='disabled'"}} > <label style="margin-right: 20px" >YES</label> 
                            <input type="radio" name="abphyfinding" value='no' 
                            {{$personmed->abphyfinding =='no' ? 'checked' : "disabled='disabled'"}}> 
                            <label >NO</label> 
                            
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
                            <input type="radio" name="recommend" value="issued" {{$personmed->recommend =='issued' ? 'checked' : "disabled='disabled'"}}>
                          <label style="margin: 20px" >Medical Certificate issued</label><br>
                          <input type="radio" name="recommend" value="denied" {{$personmed->recommend =='denied' ? 'checked' : "disabled='disabled'"}}>
                          <label style="margin: 20px">Medical certificate deferred for further evaluation</label> 
                          <br>
                          <input type="radio" name="recommend" value="defered" {{$personmed->recommend =='defered' ? 'checked' : "disabled='disabled'"}}>
                          <label style="margin: 20px">Medical Certificate denied, issued (copy attached)</label> </td>
                   
                        <td class="t18" colspan="2">
                            <div class="cll">{{$personmed->disquadefects}}</div>
                        </td>
                    </tr>
                    <tr id="t17" >
                        <td class="t18" colspan="4">
                            <strong><i>60. AME's declaration: I hereby certify that I have personally reviewed the medical history and personally examined the applicant named on this medical examination report. This report with any attachments embodies my findings completely and correctly:</i></strong>
                        </td>
                    </tr>
                    <tr id="t17" >
                        <td class="t18" ><span>Date of Examination</span>
                             <div class="cll">{{$personmed->dateofexam}}</div>
                        </td>
                       
                        <td class="t18" colspan="2"><span>AME's NAME</span>
                             <div class="cll">{{$personmed->amename}}</div>
                        </td>
                        <td class="t18" rowspan="2"><span>AME's Signature:</span>
                             <div class="cll">{{$personmed->amesignature}}</div>
                        </td>
                    </tr>
                  <tr >
                         <td class="t18"><span>AME SERIAL NUMBER</span>
                             <div class="cll">{{$personmed->ameserialnum}}</div>
                        </td>
                    <td class="t18" colspan ="2"><span>AME's Address</span>
                             <div class="cll">{{$personmed->ameaddre}}</div>
                        </td>
                    </tr>
                    <tr >
                       <td class="t18"><span>State</span><br>
                         <div class="cll">{{$personmed->amestate}}</div>
                        </td>  
                      <td><label>Country</label> <div class="cll">{{$personmed->amecountry}}</div></td>
                       <td class="t18"><span>Postal Code</span>
                        <div class="cll">{{$personmed->amepcode}}</div>
                        </td>
                      <td class="t18"><span>AME's TELEPHONE</span>
                            <div class="cll">{{$personmed->tel}}</div>
                        </td>
                       
                    </tr>
					
                </tbody>
        </table>
       
   <div align = "right">
      <button onclick="myFunction()" id = "myButton" class="button" >Print</button>
      </div>
    
     </div>
</form>

      <script>
        function myFunction() {
           document.getElementById('myButton').className = "printbutton";
          window.print();
           document.getElementById('myButton').className = "button";
          
        }
        </script>

@endsection     








