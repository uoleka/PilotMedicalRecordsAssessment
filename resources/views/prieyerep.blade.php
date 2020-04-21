@extends ('layouts.app')

  
@section('content')
<div class="container" style="padding-top: 5px">
      
<table class="table table-bordered table-sm table-responsive tab1 " >
            <thead class="container">
        `    <tr>
              <td><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label>[BAG Generic]</label></p></td></tr>
  <tr><td> <p align="center"><label>Report of Eye Evaluation</label></p></td></tr>         
  </thead>
  				
        </table>
		
 </div>
 


 <div class="container" style="padding-top: 5px">
<table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="container">
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
                        <div class="cll">{{$person->lname}}</div>
                        <div class="cll">{{$person->fname}}</</div>
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
                        <label>4. History: Record pertinent history, past and present, concerting general health and visual problems.</label>
				                  <div class="cll">{{$person->hist}}</div>
                   </td>
                  </tr>
                  
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>5. Heterophoria:</label> Record phorias, in prism diopters, with and without best lens correction in place.
				
                    
                    </td>
                  </tr>
                  
                   
                  <tr id="t11" >
                        <td class="t11" colspan="4" rowspan = "3"  ><label style ="margin-top : 40px">A. Without correction</label>
                    </td> 
                 
                        <td  colspan = "3"  class="text-center t12"><label>(1) AT 20 FEET</label></td>
                        <td  colspan = "3" class="text-center t12"><label>(2) AT 18 INCHES</label></td>
                    </tr>
                 
                    <tr id="t11"  >
                       
                        <td class="text-center t12">EXO.</td>
                        <td class="text-center t12">ESO.</td>
                        <td class="text-center t12">HYPER.</td>
                        
                      	<td class="text-center t12">EXO.</td>
                        <td class="text-center t12">ESO.</td>
                        <td class="text-center t12">HYPER.</td>
                       
                    </tr>
                   <tr id="t11" >
                   

                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->cor20exo}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->cor20eso}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->cor20hyper}}</div> 
                      </div>
                    </td>
                    

                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->cor20exo}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->cor20eso}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->cor20hyper}}</div>
                      </div>
                    </td>
                    
                   </tr>
                  
                  
                  <tr id="t11" >
                        <td class="t11" colspan="4" rowspan = "3"  ><label style ="margin-top : 40px">B. With correction (If any)</label>
                    </td> 
                 
                        <td  colspan = "3"  class="text-center t12"><label>(1) AT 20 FEET</label></td>
                        <td  colspan = "3" class="text-center t12"><label>(2) AT 18 INCHES</label></td>
                    </tr>
                 
                    <tr id="t11"  >
                       
                        <td class="text-center t12">EXO.</td>
                        <td class="text-center t12">ESO.</td>
                        <td class="text-center t12">HYPER.</td>
                        
                      	<td class="text-center t12">EXO.</td>
                        <td class="text-center t12">ESO.</td>
                        <td class="text-center t12">HYPER.</td>
                       
                    </tr>
                   <tr id="t11" >
                   
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->uncor20exo}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->uncor20eso}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->uncor20hyper}}</div>
                      </div>
                    </td>
                    

                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->uncor18exo}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                       <div class="cll">{{$person->uncor18eso}}</div>
                      </div>
                    </td>
                    <td class="text-center t12">
                      <div align="center">
                        <div class="cll">{{$person->uncor18hyper}}</div>
                    </div>
                    </td>
                    
                    
                   </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>6. Fusion:</label> Estimate fusion ability and state methods used in examination (red lens, etc.).
				            <div class="cll">{{$person->fusion}}</div>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>7. Pupils:</label> Statement of relative size and reaction of the pupils to accommodation and light, direct, and con sensual.
				                <div class="cll">{{$person->pupils}}</div>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>8. Visual Fields:</label> Record results and type of test performed (attach field charts, if used).
				                  <div class="cll">{{$person->fields}}</div>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>9. Ophthalmoscopic:</label> Describe any variations from normal in either eye on funduscopic examination.
				                      <div class="cll">{{$person->fusion}}</div>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>10. Slit Lamp:</label> Record results of slit lamp examination of each eye where indicated.
				                    <div class="cll">{{$person->fusion}}</div>
                    
                    </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>11. Intraocular Pressure:</label> Record results and methods used.
				  
                    </td>
                  </tr>
                 <tr>
                  <td colspan = "6">
                    <label>A. Method Used</label>
                    <div class="cll">{{$person->mused}}</div>
                   
                   </td>
                    <td colspan = "2">
                      <label>O.D.</label>
                   <div class="cll">{{$person->od}}</div>
                    </td>
                  <td colspan = "2">
                      <label>O.S.</label>
                   <div class="cll">{{$person->os}}</div>
                    
                   </td>
                  </tr>
                  
                  <tr>
                  <td colspan = "6">
                    <label>12. Visual acuity (Use Snellen Equivalents)</label>
                    
                   </td>
                   <td colspan = "2">
                      Lenses Used
                   
                   </td>
                  <td colspan = "2">
                      Corrected Visual Acuity
                   
                   </td>
                  </tr>
                  
                   


 <tr id="t11" >
                        <td class="t11"  rowspan = "3"  ><label style ="margin-top : 40px">A. Distant vision</label>
                    </td> 
                     <td  colspan = "2"  class="text-center t12"><label>Test Method</label></td>
                      <td  colspan = "3"  class="text-center t12"><label>Uncorrected</label></td>
                      <td    class="text-center t12" rowspan ="2"><label style= "margin-top : 40px">Contact lenses</label></td>
                      <td    class="text-center t12"><label>O.D.</label></td>
                        <td    class="text-center t12"><label>O.S.</label></td>
                        <td   class="text-center t12"><label>O.V.</label></td>
                    </tr>
                 
                    <tr id="t11" >
                       <td class="text-center t12" colspan = "2" rowspan ="2">
                      <div align="center">
                        <div class="cll">{{$person->dvtsmethd}}</div>
                      </div>
                      </td>
                        <td class="text-center t12">EXO.</td>
                        <td class="text-center t12">ESO.</td>
                        <td class="text-center t12">HYPER.</td>
                        
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvexo}}</div></div></td>
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->dveso}}</div></div></td>
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvhyper}}</div></div></td>
                    </tr>
                   <tr id="t11">
                    
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvcood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvcoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvcoov}}</div></div></td>
                     <td    class="text-center t12" ><label>Glasses</label></td>
                   
                   <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvglod}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvglos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->dvglov}}</div></div></td>
                   </tr>

                    <tr id="t11" >
                        <td class="t11"  rowspan = "3"  ><label style ="margin-top : 40px">B. Near vision (16
Inches)</label>
                    </td> 
                     <td  colspan = "2"  class="text-center t12"><label>Test Method</label></td>
                      <td  colspan = "3"  class="text-center t12"><label>Uncorrected</label></td>
                      <td    class="text-center t12" rowspan ="2"><label style= "margin-top : 40px">Contact lenses</label></td>
                      <td    class="text-center t12"><label>O.D.</label></td>
                        <td    class="text-center t12"><label>O.S.</label></td>
                        <td   class="text-center t12"><label>O.V.</label></td>
                    </tr>
                 
                    <tr id="t11" >
                       <td class="text-center t12" colspan = "2" rowspan ="2">
                      <div align="center"><div class="cll">{{$person->nvtsmethd}}</div></div>
                      </td>
                        <td class="text-center t12">EXO.</td>
                        <td class="text-center t12">ESO.</td>
                        <td class="text-center t12">HYPER.</td>
                        
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvexo}}</div></div></td>
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->nveso}}</div></div></td>
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvhyper}}</div></div></td>
                    </tr>
                   <tr id="t11">
                    
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvcood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvcoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="nvcoov" value="{{$person->nvcoov}}"
                    class ="input {{$errors->has('nvcoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                     <td    class="text-center t12" ><label>Glasses</label></td>
                   
                   <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvglod}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvglos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->nvglov}}</div></div></td>
                   </tr>
                     <tr id="t11" >
                      <td class="t11"  rowspan = "3"  ><label style ="margin-top : 40px">
                      C. Intermediate vision</label>
                    </td> 
                     <td  colspan = "2"  class="text-center t12"><label>Test Method</label></td>
                      <td  colspan = "3"  class="text-center t12"><label>Uncorrected</label></td>
                      <td    class="text-center t12" rowspan ="2"><label style= "margin-top : 40px">Contact lenses</label></td>
                      <td    class="text-center t12"><label>O.D.</label></td>
                        <td    class="text-center t12"><label>O.S.</label></td>
                        <td   class="text-center t12"><label>O.V.</label></td>
                    </tr>
                 
                    <tr id="t11" >
                       <td class="text-center t12" colspan = "2" rowspan ="2">
                      <div align="center"><div class="cll">{{$person->ivtsmethd}}</div></div>
                      </td>
                        <td class="text-center t12">EXO.</td>
                        <td class="text-center t12">ESO.</td>
                        <td class="text-center t12">HYPER.</td>
                        
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivexo}}</div></div></td>
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->iveso}}</div></div></td>
                        <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivhyper}}</div></div></td>
                    </tr>
                   <tr id="t11">
                    
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->invcood}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivcoos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivcoov}}</div></div></td>
                     <td    class="text-center t12" ><label>Glasses</label></td>
                   
                   <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivglod}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivglos}}</div></div></td>
                    <td class="text-center t12"><div align="center"><div class="cll">{{$person->ivglov}}</div></div></td>
                   </tr>
                <tr>
                  <td colspan="10"  class="t2">
                        <label>13. Present prescription (sphere, cylinder, axis)</label>
				  
                    </td>
                  </tr>
                 <tr>
                  <td colspan = "5">
                    <label>A. Contact Lenses</label>
                    
                   </td>
                   <td colspan = "5">
                      <label>B. Glasses.</label>
                   </td>
                 
                  </tr>
                  <tr>
						<td colspan = "3">
                      <label>O.D.</label>
                   <div class="cll">{{$person->preaod}}</div>
                     
                   </td>
                  <td colspan = "2">
                      <label>O.S.</label>
                   <div class="cll">{{$person->preaos}}</div>
                   </td>
                    <td colspan = "3">
                      <label>O.D.</label>
                   <div class="cll">{{$person->prebod}}</div>
                   </td>
                  <td colspan = "2">
                      <label>O.S.</label>
                   <div class="cll">{{$person->prebos}}</div>
                   </td>
                  </tr>
                  <td colspan="10"  class="t2">
                        If contact lenses are not used, omit items 14-19.
                    </td>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>14. Type of lenses (corneal, scleral, lenticular, single-cut, bifocal, toric, non-rotating, special shape, etc.)</label>
				<div class="cll">{{$person->typelense}}</div>
      </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>15. Examination frequency (indicate frequency of periodic follow-up examination)</label>
				<div class="cll">{{$person->examfreq}}</div>
      </td>
                  </tr>
                  
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>16. Symptoms or abnormal conditions: Note any lacrimation, photophobia, loss of lens, or evidence of corneal injury or edema, etc., requiring
treatment and/or interruption of contact lens wearing. State results of slit lamp or biomicroscopic examination of cornea.</label>
				<div class="cll">{{$person->fusion}}</div>
      </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>17. Professional evaluation (indicate your professional opinion and any other comment or additional observations)</label>
				<div class="cll">{{$person->propinion}}</div>
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