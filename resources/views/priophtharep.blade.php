@extends ('layouts.app')

  
@section('content')
<div class="container" style="padding-top: 5px">
      
<table class="table table-bordered table-sm table-responsive tab1 " >
            <thead class="container">
            <tr>
              <td><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label>[BAG Generic]</label></p></td></tr>
  <tr><td> <p align="center"><label>Ophthalmological Evaluation for Glaucoma</label></p></td></tr>         
  </thead>
  				
        </table>
		<table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                <tr id="t2">
                    <th  colspan ="10"  class="t3"> </th>
                </tr>
                <tr id="t2" >
                  <td  class="t3" >
                           <label>1. Date </label>
                    <div class="cll">{{$person->dorep}}</div>                    
                                                  
                  </td>
                    <td  colspan ="6" class="t3">
                       <label>2a.Name</label><br>
                        <div class="cll">{{$person->{{$person->lname}}</div>
                      
                        <div class="cll">{{$person->{{$person->fname}}</div>
                     
                        <div class="cll">{{$person->{{$person->mname}}</div>
                                              
                    </td>
                   <td  class="t3" >
                           <label>2b. Date of birth </label>
                    <div class="cll">{{$person->dob}}</div>
                                                                 
                  </td>
                   
                   <td class="t3" colspan="2" >
                        <label>2c. GENDER</label>
                        <div class="cll">{{$person->gender}}</div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td colspan="10"  class="t3">
                     <div class="cll">{{$person->paddre}}</div>
                    </td>
                   
                </tr>
        		
                  <tr>
                  <td colspan="10" class="t2">
                        <label>4. History (record pertinent history, past and present, concerting general health and visual problems)</label>
				              <div class="cll">{{$person->hist}}</div>
                   </td>
                  </tr>
                  
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>5. Family history of glaucoma</label> 
				              <div class="cll">{{$person->fahist}}</div>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>6. Diagnosis</label> 
				</td>
                  </tr>
                  <tr>
                    <td colspan = "10">
                  <span style = "align : left ">A. Type (Check One)</span>
                    <input type= "radio" required name = "diagnosis" value = "open"
                    {{ $person->diagnosis=="open" ? 'checked' :''}}
                     style="margin-left : 20px" disabled="">
                    <label class="input {{$errors->has('diagnosis')? 'errcoll': ''}}">Simple, wide angle, open</label>
                    <input type= "radio" required name = "diagnosis" value = "closed" 
                     {{ $person->diagnosis=="closed" ? 'checked' :''}}
                     style="margin-left : 20px" disabled="">
                      <label >Closed angle, narrow angle, angle closure</label>
                    </td>
                  </tr>
                  <tr>
                     <td colspan ="10">
                      B. Discover (e.g., routine examination, FAA physical examination, acute symptoms, reduction in visual acuity, etc.)
                  <div class="cll">{{$person->discover}}</div>.
                   </tr>
                  <tr>
                     <td colspan ="10">
                      C. Confirmation: tonometric readings, gonioscopy visual fields, tonography, or provocative test (give methods, results, and date confirmed)
                  <div class="cll">{{$person->confirmation}}</div>
                   </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>7. Surgery</label> 
                  </tr>
                  <tr>
                  <td colspan = "10">
                    <span>A. If surgery has been performed, indicate which eye and type of surgery.</span>
                    <div class="cll">{{$person->surgeried}}</div>
                    
                   </td>
                  </tr>
                   <tr>
                    <td colspan = "10">
                  <span style = "align : left ">B. Is surgery anticipated within 24 months?</span>
                    <input type= "radio" required name = "anticsurgery" value = "open" disabled="" 
                    style="margin-left : 20px" {{ $person->anticsurgery=="open" ? 'checked' :''}} >
                    <label class="input {{$errors->has('anticsurgery')? 'errcoll': ''}}">Yes, Probable
                    </label>
                    <input type= "radio" required name = "anticsurgery" disabled="" value = 
                    "closed" style="margin-left : 20px" {{ $person->anticsurgery=="closed" ? 'checked' :''}}>
                      <label >No, Not Likely
                      </label>
                    </td>
                  </tr>
                   
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>8. Initial response to therapy (indicate exact type, strength, frequency, and required name of medication being used)</label> 
				              <div class="cll">{{$person->resthera}}</div>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>9. Present treatment (indicate exact type, strength, frequency, and required name of medication being used)</label> 
				                    <div class="cll">{{$person->pretret}}</div>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>10. Adequacy of control</label> 
                    </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <span>A. Describe prior control, including serial tonometric findings, changes in visual fields, etc.</span> 
				                  <div class="cll">{{$person->priocont}}</div>
                    </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <span>B. Maximum intraocular pressures in relationship to daily medication (if known)</span> 
				                        <div class="cll">{{$person->maxintra}}</div>
                    </td>
                  </tr>
                  
                  <tr>
                  <td colspan="10"  class="t2">
                        <span>C. Intraocular pressure</span> 
				              <div class="cll">{{$person->intraocu}}</div>
                    </td>
                  </tr>
                  
                   <tr>
						<td >
                      <span>O.D.</span>
                   <div class="cll">{{$person->preaod}}</div>
                      
                   </td>
                  <td >
                      <span>O.S.</span>
                   <div class="cll">{{$person->preaos}}</div>
                   </td>
                    <td colspan = "4">
                      <span>Test method used</span>
                   <div class="cll">{{$person->prebod}}</div>
                   </td>
                  <td colspan = "4">
                      <span>Time since last medication</span>
                   <div class="cll">{{$person->prebos}}</div>
                   </td>
                  </tr>
                  <tr>
                  <td colspan = "10">
                   <i>Note: Pressure should NOT be taken within 2 hours after use of medication unless 10.B is completed.</i>
                  </td>
                  </tr>
                 <tr>
                  <td colspan = "10">
                    <label>11. Field of vision (Record physiological and any pathological peripheral or central visual field losses from a perimeter and/or tangent screen using white test object.<i> SUBMIT OR ATTACH CHARTS.</i>)</label>
                   </td>
                   </tr>
                  <tr>
					<td colspan = "5">
                      <span>A. Did examinee wear glasses or contact lenses during test? (specify which).</span>
                   <div class="cll">{{$person->glass}}</div>
                   </td>
                  <td colspan = "5">
                      <span>B. Size of test object used with tangent screen</span>
                   <div class="cll">{{$person->size}}</div>
                   </td>
                  </tr>
                  
                  <tr>
                  <td colspan = "10">
                    <label>12. Visual acuity <i>(Use Snellen Equivalents)</i></label>
                    
                   </td>
                   
                  </tr>
                  
                   <tr id="t11" >
                        <td class="t11"  rowspan = "3" ><span style ="margin-top : 40px">A. Distant vision</span>
                    </td> 
                 		 <td  colspan = "3" rowspan = "3" class="text-center t12"><span>Test Method used</span> 
                           <div class="cll">{{$person->dvtmethod}}</div>
                     </td>
                      <td  colspan = "3"  >
                        <div align="center">
                        <span >Uncorrected</span>
                      </div>
                      </td>
                      
                     <td  colspan = "3"  >
                        <div align="center">
                        <span >Corrected</span>
                      </div>
                      </td>
                      
                      
                    </tr>
                  <tr>
                  <td class="text-center t12"><label>O.D.</label></td>
                        <td class="text-center t12"><label>O.S.</label></td>
                        <td class="text-center t12"><label>O.V.</label></td>
                     <td class="text-center t12"><label>O.D.</label></td>
                        <td class="text-center t12"><label>O.S.</label></td>
                        <td class="text-center t12"><label>O.V.</label></td>
                  </tr>
                 
                   <tr id="t11">
                    
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvuncood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvuncoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvuncoov}}</div></div></td>
                                       
                   
                   <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvcood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvcoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvcoov</div></div></td>
                   </tr>


                   <tr id="t11" >
                        <td class="t11"  rowspan = "3"  ><span style ="margin-top : 40px">B. Near</span>
                    </td> 
                 		 <td  colspan = "3" rowspan = "3" class="text-center t12"><span>Test Method used</span> 
                           <div class="cll">{{$person->nvtmethod}}</div>
                     </td>
                       <td  colspan = "3"  >
                        
                      </td>
                      
                     <td  colspan = "3"  >
                        
                      </td>
                      
                      
                    </tr>
                  <tr>
                  <td class="text-center t12"><label>O.D.</label></td>
                        <td class="text-center t12"><label>O.S.</label></td>
                        <td class="text-center t12"><label>O.V.</label></td>
                     <td class="text-center t12"><label>O.D.</label></td>
                        <td class="text-center t12"><label>O.S.</label></td>
                        <td class="text-center t12"><label>O.V.</label></td>
                  </tr>
                 
                    <tr id="t11">
                    
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvuncood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvuncoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvuncoov}}</div></div></td>
                                       
                   
                   <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvcood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvcoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvcoov}}</div></div></td>
                   </tr>
                   
                   <tr id="t11" >
                        <td class="t11"  rowspan = "3"  ><span style ="margin-top : 40px">C. Intermediate</span>
                    </td> 
                 		 <td  colspan = "3" rowspan = "3" class="text-center t12"><span>Test Method used</span> 
                           <div class="cll">{{$person->ivtmethod}}</div>
                     </td>
                      <td  colspan = "3"  >
                        
                      </td>
                      
                     <td  colspan = "3"  >
                        
                      </td>
                      
                      
                    </tr>
                  <tr>
                  <td class="text-center t12"><label>O.D.</label></td>
                        <td class="text-center t12"><label>O.S.</label></td>
                        <td class="text-center t12"><label>O.V.</label></td>
                     <td class="text-center t12"><label>O.D.</label></td>
                        <td class="text-center t12"><label>O.S.</label></td>
                        <td class="text-center t12"><label>O.V.</label></td>
                  </tr>
                 
                    <tr id="t11">
                    
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivuncood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivuncoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivuncoov}}</div></div></td>
                                       
                   
                   <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivcood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivcoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivcoov}}</div></div></td>
                   </tr>


                    <tr>
                  <td colspan="10"  class="t2">
                        <span>D. Important: If correction is needed and there is inability to correct either eye to 20/20 or better, give reasons.</span>
                  				<div class="cll">{{$person->corneeded}}</div>
                    </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>13. Present condition</label>
				
                  </tr>
                  <tr>
                  <td colspan ="4" rowspan ="3">
                    <span>Does airman wear?</span><br>
                    <input type="radio" required name= "conglass" value = "glasses" 
                    {{ $person->conglass=="glasses" ? 'checked' :''}}
                    style = "margin : 20px" disabled="">
                    <label class="input {{$errors->has('conglass')? 'errcoll': ''}}">Glasses</label>
                    <input type="radio" required name= "conglass" value = "contact" 
                    {{ $person->conglass=="contact" ? 'checked' :''}}
                    style = "margin : 20px" disabled="">
                    <label >Contact lenses</label>
                  </td>
                    <td colspan ="3" style="text-align :center">
                      <span>O.D.</span>
                    </td>
                    <td colspan ="3" style="text-align :center">
                       <span>O.S.</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan ="3">
                     <span> Sphere-Cylinder Axis</span>
                    </td>
                    <td colspan ="3">
                     <span> Sphere-Cylinder Axis</span>
                    </td>
                    
                  </tr>
                  <tr>
                    <td colspan ="3">
                     <div class="cll">{{$person->odcylinaxis}}</div>
                    </td>
                     <td colspan ="3">
                     <div class="cll">{{$person->oscylinaxis}}</div>
                    </td>
                    
                  </tr>
                  
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>14. Pupils (Statement of relative size and reaction of the pupils to accommodation and light, with special reference to any disease process, healed or active.)</label>
              				<div class="cll">{{$person->pupilsiz}}</div>
                      </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>15. Opthalmoscopic (Describe any variations from normal in either eye on funduscopic examinations, with special reference to any
disease process, healed or active.)</label>
				<div class="cll">{{$person->varnorm}}</div></td>
                  </tr>
                  
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>16. Slit Lamp (Record results of slit lamp examination of each eye where indicated.)</label>
                				<div class="cll">{{$person->slitlamp}}</div>
                        </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>17. Fusion (Estimate fusion ability and state methods used in examination.)</label>
              				<div class="cll">{{$person->fusion}}</div>
                      </td>
                  </tr>
                  <tr>
                  <td colspan="5"  class="t2">
                        <label>18a. Typed required name and address of eye specialist</label>
                				<div class="cll">{{$person->speaddre}}</div>
                        </td>
                    
                    <td colspan="5"  class="t2">
                        <label>18b. Signature of eye specialist</label>
              				<div class="cll">{{$person->spesign}}</div>
                      </td>
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
 @endsection