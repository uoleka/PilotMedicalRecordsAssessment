@extends ('layouts.app')

  
@section('content')
<div class="container" style="padding-top: 5px">
      
<table class="table table-bordered table-sm table-responsive tab1 " >
            <thead class="container">
        `    <tr>
              <td><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label>[BAG Generic]</label></p></td></tr>
  <tr><td> <p align="center"><label>Ophthalmological Evaluation for Glaucoma</label></p></td></tr>         
  </thead>
  				
        </table>
		<span>
          <div align ="center"style="color:red"><span>
    {{$errors ->any() ? "Please fill the Field(s) marked in red": ''}}
  </span></div>
		
		
         
<form method ='POST' Action ='/pel_ophtharep' >
  {{ csrf_field() }}
<table class="table table-bordered table-sm table-responsive tab1 appSubSec" >
                <tbody class="appSubSec">
                <tr id="t2">
                    <th  colspan ="10"  class="t3"> </th>
                </tr>
                <tr id="t2" >
                  <td  class="t3" >
                           <label>1. Date </label>
                    <input type="date" required name="dorep" value="{{old('dorep')}}"
                    class="input {{$errors->has('dorep') ? 'errcol' :''}}">
                    
                                                  
                  </td>
                    <td  colspan ="6" class="t3">
                       <label>2a.Name</label><br>
                        <input type="text" placeholder="Last Name" required name="lname" value="{{$person->lname}}"
                         class="input {{$errors->has('lname') ? 'errcol' :''}}" readonly>
                      
                        <input type="text" placeholder="First Name" required name="fname" value="{{$person->fname}}"
                         class="input {{$errors->has('lname') ? 'errcol' :''}}" readonly> 
                     
                        <input type="text" placeholder="Middle Name" required name="mname" value="{{$person->mname}}"
                         class="input {{$errors->has('lname') ? 'errcol' :''}}"readonly> 
                                              
                    </td>
                   <td  class="t3" >
                           <label>2b. Date of birth </label>
                    <input type="date" required name="dob" value="{{$person->dob}}" 
                     class="input {{$errors->has('dob') ? 'errcol' :''}}" readonly>
                       <input type="hidden" name ='appid' value="{{$person->id}}">                                           
                  </td>
                   
                   <td class="t3" colspan="2" >
                        <label>2c. GENDER</label>
                        <select required name ="gender" id ="gender" class ="select {{$errors->has('gender')? 'errcol': ''}}" disabled="">
                            <option value="">--select Gender--</option>
                            <option value="Male" {{$person->gender == 'Male' ? 'selected' : '' }} >Male</option>
                            <option value="Female" {{$person->gender == 'Female' ? 'selected' : '' }} >Female</option>
                        </select>
                    </td>
                  {{$person->mname}}
        
                  </tr>
                  <tr>
                    <td colspan="10"  class="t3">
                     <textarea placeholder="Enter your current address" style="width: 100%" rows="2" required name="paddre" class ="input {{$errors->has('paddre')? 'errcol': ''}}" readonly="">{{$person->paddre}}</textarea>
                    </td>
                   
                </tr>
        		
                  <tr>
                  <td colspan="10" class="t2">
                        <label>4. History (record pertinent history, past and present, concerting general health and visual problems)</label>
				<textarea  style="width: 100%"  required name="hist" class ="input {{$errors->has('hist')? 'errcol': ''}}" >{{old('hist')}}</textarea>
                   </td>
                  </tr>
                  
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>5. Family history of glaucoma</label> 
				<textarea style="width: 100%"  required name="fahist" class ="input {{$errors->has('fahist')? 'errcol': ''}}" >{{old('fahist')}}</textarea>
                    
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
                    {{ old('diagnosis')=="open" ? 'checked' :''}}
                     style="margin-left : 20px">
                    <label class="input {{$errors->has('diagnosis')? 'errcoll': ''}}">Simple, wide angle, open</label>
                    <input type= "radio" required name = "diagnosis" value = "closed" 
                     {{ old('diagnosis')=="closed" ? 'checked' :''}}
                     style="margin-left : 20px">
                      <label class="input {{$errors->has('diagnosis')? 'errcoll': ''}}">Closed angle, narrow angle, angle closure</label>
                    </td>
                  </tr>
                  <tr>
                     <td colspan ="10">
                      B. Discover (e.g., routine examination, FAA physical examination, acute symptoms, reduction in visual acuity, etc.)
                  <textarea style="width: 100%"  required name="discover" class ="input {{$errors->has('discover')? 'errcol': ''}}" >{{old('discover')}}</textarea>
                   </tr>
                  <tr>
                     <td colspan ="10">
                      C. Confirmation: tonometric readings, gonioscopy visual fields, tonography, or provocative test (give methods, results, and date
confirmed)
                  <textarea style="width: 100%"  required name="confirmation" class ="input {{$errors->has('confirmation')? 'errcol': ''}}" >{{old('confirmation')}}</textarea>
                   </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>7. Surgery</label> 
                  </tr>
                  <tr>
                  <td colspan = "10">
                    <span>A. If surgery has been performed, indicate which eye and type of surgery.</span>
                    <textarea style="width: 100%"  required name="surgeried" class ="input {{$errors->has('surgeried')? 'errcol': ''}}" >{{old('surgeried')}}</textarea>
                    
                   </td>
                  </tr>
                   <tr>
                    <td colspan = "10">
                  <span style = "align : left ">B. Is surgery anticipated within 24 months?</span>
                    <input type= "radio" required name = "anticsurgery" value = "open" 
                    style="margin-left : 20px" {{ old('anticsurgery')=="open" ? 'checked' :''}}>
                    <label class="input {{$errors->has('anticsurgery')? 'errcoll': ''}}">Yes, Probable
                    </label>
                    <input type= "radio" required name = "anticsurgery" value = 
                    "closed" style="margin-left : 20px" {{ old('anticsurgery')=="closed" ? 'checked' :''}}>
                      <label class="input {{$errors->has('anticsurgery')? 'errcoll': ''}}">No, Not Likely
                      </label>
                    </td>
                  </tr>
                   
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>8. Initial response to therapy (indicate exact type, strength, frequency, and required name of medication being used)</label> 
				<textarea style="width: 100%" rows = "2" required name="resthera" class ="input {{$errors->has('resthera')? 'errcol': ''}}" >{{old('resthera')}}</textarea>
                    
                    </td>
                  </tr>
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>9. Present treatment (indicate exact type, strength, frequency, and required name of medication being used)</label> 
				<textarea style="width: 100%" rows = "2"  required name="pretret" class ="input {{$errors->has('pretret')? 'errcol': ''}}" >{{old('pretret')}}</textarea>
                    
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
				  <textarea style="width: 100%" rows = "2"  required name="priocont" class ="input {{$errors->has('priocont')? 'errcol': ''}}" >{{old('priocont')}}</textarea>
                    </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <span>B. Maximum intraocular pressures in relationship to daily medication (if known)</span> 
				  <textarea style="width: 100%" rows = "3"  required name="maxintra" class ="input {{$errors->has('maxintra')? 'errcol': ''}}" >{{old('maxintra')}}</textarea>
                    </td>
                  </tr>
                  
                  <tr>
                  <td colspan="10"  class="t2">
                        <span>C. Intraocular pressure</span> 
				  <textarea style="width: 100%"   required name="intraocu" class ="input {{$errors->has('intraocu')? 'errcol': ''}}" >{{old('intraocu')}}</textarea>
                    </td>
                  </tr>
                  
                   <tr>
						<td >
                      <span>O.D.</span>
                   <input type="text" style="width: 100%"  required name="preaod" value="{{old('preaod')}}" class ="input {{$errors->has('preaod')? 'errcol': ''}}" >
                      
                   </td>
                  <td >
                      <span>O.S.</span>
                   <input type="text" style="width: 100%"  required name="preaos" value="{{old('preaos')}}" class ="input {{$errors->has('preaos')? 'errcol': ''}}" >
                   </td>
                    <td colspan = "4">
                      <span>Test method used</span>
                   <input type="text" style="width: 100%"  required name="prebod" value="{{old('prebod')}}" class ="input {{$errors->has('prebod')? 'errcol': ''}}" >
                   </td>
                  <td colspan = "4">
                      <span>Time since last medication</span>
                   <input type="text" style="width: 100%"  required name="prebos" value="{{old('prebos')}}" class ="input {{$errors->has('prebos')? 'errcol': ''}}" >
                   </td>
                  </tr>
                  <tr>
                  <td colspan = "10">
                   <i>Note: Pressure should NOT be taken within 2 hours after use of medication unless 10.B is completed.</i>
                  </td>
                  </tr>
                 <tr>
                  <td colspan = "10">
                    <label>11. Field of vision (Record physiological and any pathological peripheral or central visual field losses from a perimeter and/or tangent
screen using white test object.<i> SUBMIT OR ATTACH CHARTS.</i>)</label>
                   </td>
                   </tr>
                  <tr>
					<td colspan = "5">
                      <span>A. Did examinee wear glasses or contact lenses during test? (specify which).</span>
                   <input type="text" style="width: 100%"  required name="glass" value="{{old('glass')}}" class ="input {{$errors->has('glass')? 'errcol': ''}}" >
                   </td>
                  <td colspan = "5">
                      <span>B. Size of test object used with tangent screen</span>
                   <input type="text" style="width: 100%"  required name="size" value="{{old('size')}}" class ="input {{$errors->has('size')? 'errcol': ''}}" >
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
                           <textarea style="width: 100%" rows="3"   required name="dvtmethod" 
                           class ="input {{$errors->has('dvtmethod')? 'errcol': ''}}" >{{old('dvtmethod')}}</textarea>
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
                    
                    <td class="text-center t12"><div align="center"><input type="number" required name ="dvuncood" value="{{old('dvuncood')}}"
                    class ="input {{$errors->has('dvuncood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="dvuncoos" value="{{old('dvuncoos')}}"
                    class ="input {{$errors->has('dvuncoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="dvuncoov" value="{{old('dvuncoov')}}"
                    class ="input {{$errors->has('dvuncoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                       
                   
                   <td class="text-center t12"><div align="center"><input type="number" required name ="dvcood" value="{{old('dvcood')}}"
                    class ="input {{$errors->has('dvcood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="dvcoos" value="{{old('dvcoos')}}"
                    class ="input {{$errors->has('dvcoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="dvcoov" value="{{old('dvcoov')}}"
                    class ="input {{$errors->has('dvcoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                   </tr>


                   <tr id="t11" >
                        <td class="t11"  rowspan = "3"  ><span style ="margin-top : 40px">B. Near</span>
                    </td> 
                 		 <td  colspan = "3" rowspan = "3" class="text-center t12"><span>Test Method used</span> 
                           <textarea style="width: 100%" rows="3"   required name="nvtmethod" class ="input {{$errors->has('nvtmethod')? 'errcol': ''}}" >{{old('nvtmethod')}}
                           </textarea>
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
                    
                    <td class="text-center t12"><div align="center"><input type="number" required name ="nvuncood" value="{{old('nvuncood')}}"
                    class ="input {{$errors->has('nvuncood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="nvuncoos" value="{{old('nvuncoos')}}"
                    class ="input {{$errors->has('nvuncoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="nvuncoov" value="{{old('nvuncoov')}}"
                    class ="input {{$errors->has('nvuncoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                       
                   
                   <td class="text-center t12"><div align="center"><input type="number" required name ="nvcood" value="{{old('nvcood')}}"
                    class ="input {{$errors->has('nvcood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="nvcoos" value="{{old('nvcoos')}}"
                    class ="input {{$errors->has('nvcoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="nvcoov" value="{{old('nvcoov')}}"
                    class ="input {{$errors->has('nvcoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                   </tr>
                   
                   <tr id="t11" >
                        <td class="t11"  rowspan = "3"  ><span style ="margin-top : 40px">C. Intermediate</span>
                    </td> 
                 		 <td  colspan = "3" rowspan = "3" class="text-center t12"><span>Test Method used</span> 
                           <textarea style="width: 100%" rows="3"   required name="ivtmethod" class ="input {{$errors->has('ivtmethod')? 'errcol': ''}}" >{{old('ivtmethod')}}</textarea>
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
                    
                    <td class="text-center t12"><div align="center"><input type="number" required name ="ivuncood" value="{{old('ivuncood')}}"
                    class ="input {{$errors->has('ivuncood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="ivuncoos" value="{{old('ivuncoos')}}"
                    class ="input {{$errors->has('ivuncoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="ivuncoov" value="{{old('ivuncoov')}}"
                    class ="input {{$errors->has('ivuncoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                       
                   
                   <td class="text-center t12"><div align="center"><input type="number" required name ="ivcood" value="{{old('ivcood')}}"
                    class ="input {{$errors->has('ivcood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="ivcoos" value="{{old('ivcoos')}}"
                    class ="input {{$errors->has('ivcoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                    <td class="text-center t12"><div align="center"><input type="number" required name ="ivcoov" value="{{old('ivcoov')}}"
                    class ="input {{$errors->has('ivcoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                   </tr>


                    <tr>
                  <td colspan="10"  class="t2">
                        <span>D. Important: If correction is needed and there is inability to correct either eye to 20/20 or better, give reasons.</span>
                  				<textarea style="width: 100%"  required name="corneeded" 
                          class ="input {{$errors->has('corneeded')? 'errcol': ''}}"> {{old('corneeded')}}</textarea>
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
                    {{ old('conglass')=="glasses" ? 'checked' :''}}
                    style = "margin : 20px">
                    <label class="input {{$errors->has('conglass')? 'errcoll': ''}}">Glasses</label>
                    <input type="radio" required name= "conglass" value = "contact" 
                    {{ old('conglass')=="contact" ? 'checked' :''}}
                    style = "margin : 20px">
                    <label class="input {{$errors->has('conglass')? 'errcoll': ''}}">Contact lenses</label>
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
                     <textarea style ="width : 100%" rows = "2" required name ="odcylinaxis" class ="input {{$errors->has('odcylinaxis')? 'errcol': ''}}"> {{old('odcylinaxis')}}</textarea>
                    </td>
                     <td colspan ="3">
                     <textarea style ="width : 100%" rows = "2" required name="oscylinaxis" class ="input {{$errors->has('oscylinaxis')? 'errcol': ''}}"> {{old('oscylinaxis')}}</textarea>
                    </td>
                    
                  </tr>
                  
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>14. Pupils (Statement of relative size and reaction of the pupils to accommodation and light, with special reference to any disease process, healed or active.)</label>
              				<textarea style="width: 100%"  name="pupilsiz" required  class ="input {{$errors->has('pupilsiz')? 'errcol': ''}}"  > {{old('pupilsiz')}}</textarea>
                      </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>15. Opthalmoscopic (Describe any variations from normal in either eye on funduscopic examinations, with special reference to any
disease process, healed or active.)</label>
				<textarea style="width: 100%"     name="varnorm"  required  class ="input {{$errors->has('varnorm')? 'errcol': ''}}"> {{old('varnorm')}}
                        </textarea></td>
                  </tr>
                  
                   <tr>
                  <td colspan="10"  class="t2">
                        <label>16. Slit Lamp (Record results of slit lamp examination of each eye where indicated.)</label>
                				<textarea style="width: 100%"   name="slitlamp" required  class ="input {{$errors->has('slitlamp')? 'errcol': ''}}"> {{old('slitlamp')}}
                        </textarea>
                        </td>
                  </tr>
                  <tr>
                  <td colspan="10"  class="t2">
                        <label>17. Fusion (Estimate fusion ability and state methods used in examination.)</label>
              				<textarea style="width: 100%"   name="fusion"  required  class ="input {{$errors->has('fusion')? 'errcol': ''}}"> {{old('fusion')}}
                      </textarea>
                      </td>
                  </tr>
                  <tr>
                  <td colspan="5"  class="t2">
                        <label>18a. Typed required name and address of eye specialist</label>
                				<textarea style="width: 100%" rows = "3"  name="speaddre"class ="input {{$errors->has('speaddre')? 'errcol': ''}}"> {{old('speaddre')}}</textarea>
                        </td>
                    
                    <td colspan="5"  class="t2">
                        <label>18b. Signature of eye specialist</label>
              				<textarea style="width: 100%" rows = "3"  required  name="spesign"  required  class ="input {{$errors->has('spesign')? 'errcol': ''}}"> {{old('spesign')}}
                      </textarea>
                      </td>
                  </tr>
  			</tbody>
		
        </table>
        <div align = "right">
          <button type="submit" >Submit</button>
      </div>
  </form>
</div>
 @endsection