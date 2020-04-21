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
    
        <div class="col-md-9" >
            <div class="card  polaroided">
                <div class="card-header">
                  <section>
                  <img src="/template/bagasoo_logo.png" height="40"/>
                  <div align="center"><strong>Authorised Medical Examiner Refistration</strong></div>
                  </section>
                </div>
              <div class="card-body">

<form method ='POST' Action ='amereg' >
  {{ csrf_field() }}
<table class="table table-bordered table-sm table-responsive">
            <tbody class="appSubSec">
                <tr>
                   <th colspan="3"> </th>
                </tr>
					<tr ><th colspan="3" class="t4">A. Applicant Identification</th></tr>
                     <tr >
                    <td class="t3" colspan ="3"><label>1. Name</label>
                      <input type="text" style = "width:100%" placeholder="Name"  name="name" value="{{old('name')}}" class ="input {{$errors->has('name')? 'errcol': ''}}">
                      <input type="hidden" name="userid" value="{{auth()->user()->id}}">        
                    </td>
                     </tr>
                     <tr>
                        <td >
                          <label>2. Date of birth </label>
                            <input type="date" name="dob" value="{{old('dob')}}" max="1994-05-15" class ="input {{$errors->has('dob')? 'errcol': ''}}">
                        </td>
                        <td colspan="2"  class="t3">
                            <label>3. Address where examinations will be performed</label>
                            <textarea placeholder="Enter address" style="width: 100%" rows="3" name="examaddre" class ="input {{$errors->has('examaddre')? 'errcol': ''}}">{{old('examaddre')}}</textarea> 
                        </td>
                      </tr>
              			<tr>
                       
                  
                  <td><label>4. Licenced as:</label><br>
                    <input type="radio" name="licenseas" value="md" {{old('licenseas')=='md' ? "checked" : ""}} > <label style="margin-right: 20px" class ="input {{$errors->has('licenseas')? 'errcoll': ''}}">M.D. </label><br>
                    <input type="radio" name="licenseas" value="other" {{old('licenseas')=='other' ? "checked" : ""}}> <label class ="input {{$errors->has('licenseas')? 'errcol': ''}}">Other <i>(indicate type of licence)</i></label>
                    
                    <input type="text" style = "width:100%" placeholder="License" name="typlicense" 
                    value="{{old('typlicense')}}" class ="input {{$errors->has('typlicense')? 'errcol': ''}}"> 
                 
                 </td>
                 <td colspan="2">
                    <label>Name of institution/clinic, if any</label>
                    <textarea placeholder="Enter Institution Name" style="width: 100%" rows="3" name="instname"
                    class ="select {{$errors->has('instname')? 'errcol': ''}}" >{{old('instname')}}</textarea> 
                </td>     
              </tr>              
               <tr id="t3">
                       
                  
                  <td class="t3"><label>4a. Country</label><br>
                    
                    <select name="country" id="country" class ="select {{$errors->has('country')? 'errcol': ''}}" >
                      <option value="">--- Select Country ---</option>
                      @foreach(App\pel_country::all() as $nationality)
                      <option value="{{ $nationality->name }}" {{ old('country') == $nationality->name ? 'selected' : '' }}>{{ $nationality->name }}
                      </option>
                      @endforeach
                    </select>
                 
                 </td> 
                 <td colspan="2"  class="t3">
                    <label>Street and number</label>
                    <textarea placeholder="Enter address" style="width: 100%" rows="1" name="streetaddre" class ="input {{$errors->has('streetaddre')? 'errcol': ''}}">{{old('streetaddre')}}</textarea> 
                </td>    
              </tr>
              
              <tr>
                  <td><label>4b. Physician Licence number</label><br>
                    <input type="text" style = "width:100%" placeholder="License Number" name="lnumber" value="{{old('lnumber')}}" class ="input {{$errors->has('lnumber')? 'errcol': ''}}"> 
                  </td>
                  <td>
                      <label>City</label>
                      <input type="text" style = "width:100%" placeholder="City" name="city" value="{{old('city')}}" class ="input {{$errors->has('city')? 'errcol': ''}}"> 
                  </td>
                  <td><label>Country</label><br>
                    <select name="lcountry" id="lcountry" class ="select {{$errors->has('lcountry')? 'errcol': ''}}" >
                      <option value="">--- Select Country ---</option>
                      @foreach(App\pel_country::all() as $nationality)
                      <option value="{{ $nationality->name }}" {{ old('lcountry') == $nationality->name ? 'selected' : '' }}>{{ $nationality->name }}
                      </option>
                      @endforeach
                    </select>
                  </td>     
              </tr>
               
           <tr>
                 
            </tr>   
               
              <tr>
                  <td class="t3" colspan="3"><label>5. Office telephone number (include area code)</label><br>
                  <input type="text" style = "width:100%"  name="officefone" value="{{old('officefone')}}"
                    class ="input {{$errors->has('officefone')? 'errcol': ''}}"> 
                  </td>     
              </tr> 
              <tr>
                  <td class="t3" colspan="3"><label>6. Medical speciality</label><br>
                    <input type="text" style = "width:100%"  name="medspec" value="{{old('medspec')}}"
                    class ="input {{$errors->has('medspec')? 'errcol': ''}}"> 
                 </td>     
              </tr> 
              <tr>
                       
                  
                  <td class="t3" colspan="3"><label>7. Were you ever authorised as an aviation medical examiner (AME)? (If yes, state where and
when.)</label><br>
                     <input type="radio" name="authlicense" value="yes" {{old('authlicense')=='yes' ? "checked":"" }}> <label style="margin-right: 20px" class ="input {{$errors->has('authlicense')? 'errcoll': ''}}">Yes</label><br>
                    <input type="radio" name="authlicense" value="no" {{old('authlicense')=='no' ? "checked":"" }}> <label class ="input {{$errors->has('authlicense')? 'errcoll': ''}}">No</label>
                    <input type="text" style = "width:100%"  name="ameauth" value="{{old('ameauth')}}" class ="input {{$errors->has('ameauth')? 'errcol': ''}}"> 
                 
                 </td>     
              </tr> 
              <tr ><th colspan="3" class="t4">B. Education</th></tr>
              <tr id="t3">
                       
                  
                  <td class="t3" colspan="3">
                    <label>1. Medical School/University</label><br>
                    </td>     
              </tr> 
              
              <tr>
                        <td>
                        <label>Name of school/university</label>
                        <input type="text" style = "width:100%" placeholder="University" name="schuni" value="{{old('schuni')}}" class ="input {{$errors->has('ameauth')? 'errcol': ''}}"> 
                        </td>
                  
                  <td><label>City/country</label><br>
                    
                    <input type="text" style = "width:100%"  name="unicountry" value="{{old('unicountry')}}"
                    class ="input {{$errors->has('unicountry')? 'errcol': ''}}"> 
                 
                 </td>
             <td >
             <label>Year graduated</label>
                        <input type="date" style = "width:100%"  name="yrgrad" value="{{old('yrgrad')}}"
                         class ="input {{$errors->has('yrgrad')? 'errcol': ''}}">  
                    </td>
              </tr>
              <tr>
                <td colspan = "3">
                  <label>Degree received</label>
                  <input type="text" style = "width:100%"  name="degreerecd" value="{{old('degreerecd')}}"
                  class ="input {{$errors->has('degreerecd')? 'errcol': ''}}">  
                </td>
              </tr>  
              

              <tr id="t3">
                       
                  
                  <td class="t3" colspan="3">
                    <label>2. Internship/Residency</label><br>
                    </td>     
              </tr> 
              
              <tr>
                       <td   class="t3">
                        <label>Name of hospital/institution</label>
                        <input type="text" style = "width:100%"  name="intschuni" value="{{old('intschuni')}}"
                        class ="input {{$errors->has('intschuni')? 'errcol': ''}}"> 
                    </td>
                  
                  <td class="t3"  ><label>City/country</label><br>
                    
                    <input type="text" style = "width:100%"  name="intunicountry" value="{{old('intunicountry')}}"
                    class ="input {{$errors->has('intunicountry')? 'errcol': ''}}"> 
                 
                 </td>
             <td >
             <label>inclusive dates</label>
                        <input type="date" style = "width:100%"  name="inclusivedt" value="{{old('inclusivedt')}}"
                        class ="input {{$errors->has('inclusivedt')? 'errcol': ''}}">  
                    </td>
              </tr>
              <tr>
                    <td colspan = "3" >
                        <label>Specialty/rotating</label>
                        <input type="text" style = "width:100%"  name="specialtytng" value="{{old('specialtytng')}}"
                        class ="input {{$errors->has('specialtytng')? 'errcol': ''}}">  
                    </td>
              </tr>  
              
<tr id="t3">
                       
                  
                  <td class="t3" colspan="3">
                    <label>3. Post-Graduate</label><br>
                    </td>     

              </tr> 
              
              <tr id="t3">
                       <td   class="t3">
                        <label>Name of institution</label>
                        <input type="text" style = "width:100%"  name="naminsti" value="{{old('naminsti')}}"
                        class ="input {{$errors->has('naminsti')? 'errcol': ''}}"> 
                    </td>
                  
                  <td class="t3"  ><label>City/country</label><br>
                    
                    <input type="text" style = "width:100%"  name="pgcity" value="{{old('pgcity')}}" 
                    class ="input {{$errors->has('pgcity')? 'errcol': ''}}"> 
                 
                 </td>
             <td >
             <label>inclusive dates</label>
                        <input type="date" style = "width:100%"  name="inclusivedt2" value="{{old('inclusivedt2')}}"
                        class ="input {{$errors->has('inclusivedt2')? 'errcol': ''}}">  
                    </td>
              </tr>
              <tr>
                <td colspan = "3">
                  <label>Degree/certificate</label>
                    <input type="text" style = "width:100%"  name="degrecert" value="{{old('degrecert')}}"
                    class ="input {{$errors->has('degrecert')? 'errcol': ''}}">  
                </td>
              </tr>  
              
	 <tr ><th colspan="3" class="t4">C. Experience</th></tr>
              <tr id="t3">
                <td class="t3" colspan="3"><label>1. Medical</label><br>
                </td>     
              </tr> 
              
              <tr id="t3">
                    <td class="t3" colspan ="2"><label>1a. Type of practice</label>
                      <input type="text" style = "width:100%" placeholder="Practice" name="typeprac" value="{{old('typeprac')}}" class ="input {{$errors->has('typeprac')? 'errcol': ''}}"> 
                      </td>
               
               <td  class="t3" >
                           <label>1b. Years </label><br>
                    <input type="text" name="yearsofprac" value="{{old('yearsofprac')}}"
                    class ="input {{$errors->has('yearsofprac')? 'errcol': ''}}">
                     
                                                  
                  </td>
                       </tr>
              			<tr id="t3">
                       <td colspan="2"  class="t3">
                        <label>1c. Institution(s) (name and location)</label>
                        <textarea placeholder="Institution(s)" style="width: 100%" rows="3" name="medinsti" 
                        class ="input {{$errors->has('medinsti')? 'errcol': ''}}">{{old('medinsti')}}</textarea>
                    </td>
                  
                  <td class="t3"><label>1d. Hospital privileges</label><br>
                    <input type="radio" name="hprivi" value="yes" {{old('hprivi')=='yes' ? "checked" :""}}> <label style="margin-right: 20px"
                    class ="input {{$errors->has('hprivi')? 'errcoll': ''}}">Yes </label><br>
                    <input type="radio" name="hprivi" value="no" {{old('hprivi')=='no' ? "checked" :""}}> 
                    <label
                    class ="input {{$errors->has('hprivi')? 'errcoll': ''}}">No
                  </label>
                                                
                 </td>     
              </tr>  
              	 <tr id="t3">
                   <td class="t3" colspan="3"><label>2. Aviation</label><br>
                   </td>     
              </tr> 
              <tr id="t3">
                  <td class="t3" colspan="3">
                    <input type="radio" name="pilot" value="md" {{old('pilot')=='md' ? "checked" :""}}> 
                    <label style="margin-right: 20px" class ="input {{$errors->has('hprivi')? 'errcoll': ''}}">M.D. 
                    </label>
                    <input type="radio" name="pilot" value="other" {{old('pilot')=='other' ? "checked" :""}}> 
                    <label class ="input {{$errors->has('hprivi')? 'errcoll': ''}}">Other <i>(specify)</i>
                    </label>
                     <input type="text" style = "width:100%"  name="aviationpilot" value="{{old('aviationpilot')}}"
                     class ="input {{$errors->has('aviationpilot')? 'errcol': ''}}">  
                     </td>     
              </tr> 
              
               <tr id="t3">
                   <td class="t3" colspan="3"><label>3. Military</label><br>
                   </td>     
              </tr> 
              <tr>
                  <td >
                     <label>3a. Currently on duty</label><br>
                    <input type="radio" name="onduty" value="yes" {{old('onduty')=='yes' ? "checked" :""}}> 
                    <label style="margin-right: 20px"  class ="input {{$errors->has('onduty')? 'errcoll': ''}}">Yes </label>
                    <input type="radio" name="onduty" value="no" {{old('onduty')=='no' ? "checked" :""}}> 
                    <label  class ="input {{$errors->has('onduty')? 'errcoll': ''}}">No</label>
                  </td> 
                <td  class="t3" >
                           <label>3b. Reserve </label>
                    <input type="text" name="reserve" style = "width:100%" value="{{old('reserve')}}"
                    class ="input {{$errors->has('reserve')? 'errcol': ''}}">
                    
                                                  
                  </td>
                <td  class="t3" >
                           <label>3c. Current/past service </label>
                    <input type="text" name="service" style = "width:100%" value="{{old('service')}}"
                    class ="input {{$errors->has('service')? 'errcol': ''}}">
                    
                                                  
                  </td>
              </tr>
              <tr>
                <td colspan ="3">
                     <label>3d. Flight surgeon</label><br>
                    <input type="radio" name="flightsurgeon" value="yes" {{old('flightsurgeon')=='yes' ? "checked" :""}}> 
                    <label style="margin-right: 20px" class ="input {{$errors->has('flightsurgeon')? 'errcoll': ''}}">Yes </label>
                    <input type="radio" name="flightsurgeon" value="no" {{old('flightsurgeon')=='no' ? "checked" :""}}> 
                    <label class ="input {{$errors->has('flightsurgeon')? 'errcoll': ''}}">No</label>
                    
                     </td> 
              </tr> 
              <tr id="t3">
                   <td class="t3" colspan="3"><label>D. Medical Specialty Information</label><br>
                   </td> 
                </tr> 
               <tr id="t3">
                  <td >
                      <label>1. Specialty societies</label>
                      <input type="text" style = "width:100%" name="specialsocie" value="{{old('specialsocie')}}"
                      class ="input {{$errors->has('specialsocie')? 'errcol': ''}}">
                     </td> 
                  <td>
                      <label>2. Boards</label><br>
                      <input type="text" style = "width:100%" name="boards" value="{{old('boards')}}"
                       class ="input {{$errors->has('boards')? 'errcol': ''}}">
                          
                   </td>
                <td>
                           <label>3. Aviation medical societies </label>
                    <input type="text"style = "width:100%"  name="aviationmedsocie" value="{{old('aviationmedsocie')}}"
                    class ="input {{$errors->has('aviationmedsocie')? 'errcol': ''}}">
                     
                                                  
                  </td>
               
              </tr> 
              <tr ><th colspan="3" class="t4">E. Licence Information</th></tr>
              <tr id="t3">
                <td ><label>Questions (If you check Yes, explain in detail under remarks.)</label>
                </td>
                <td colspan ="2"><div align="center"><label style="margin-right:50px">Yes</label><label style="margin-left:50px">No</label></div>
                </td>
              </tr> 
              
              <tr id="t3">
                <td><label class ="input {{$errors->has('limitedlicen')? 'errcoll': ''}}">1. Is your licence to practice medicine/surgery limited or restricted in any way?</label>
                </td>
                <td colspan="2">
                 <div align="center">
                   <input type="radio" name="limitedlicen" value="yes"{{old('limitedlicen')=='yes' ? "checked" :""}} style="margin-right:50px"> 
                    <input type="radio" name="limitedlicen" value="no" {{old('limitedlicen')=='no' ? "checked" :""}} style="margin-left:50px"> 
                  </div>
                </td>
                </tr>
              
              <tr>
                <td>
                  <label class ="input {{$errors->has('suspendlicen')? 'errcoll': ''}}">2. Has your licence to practice medicine/surgery ever been suspended or revoked?</label>
                </td>
                <td colspan = "2">
                 <div align="center">
                   <input type="radio" name="suspendlicen" value="yes" {{old('suspendlicen')=='yes' ? "checked" :""}} style="margin-right:50px">
                    <input type="radio" name="suspendlicen" value="no" {{old('suspendlicen')=='no' ? "checked" :""}} style="margin-left:50px"> 
                </div>
                </td>
                </tr>
              
              <tr id="t3">
                <td><label class ="input {{$errors->has('refusedlicen')? 'errcoll': ''}}">3. Has the application for renewal of your licence or medical registration to practice
medicine/surgery ever been refused?</label>
                </td>
                <td colspan="2">
                 <div align="center">
                    <input type="radio" name="refusedlicen" value="yes" {{old('refusedlicen')=='yes' ? "checked" :""}} style="margin-right:50px">
                    <input type="radio" name="refusedlicen" value="no" {{old('refusedlicen')=='no' ? "checked" :""}} style="margin-left:50px"> 
                </div>
                </td>
                </tr>
              
              <tr id="t3">
                <td><label class ="input {{$errors->has('controlledhabit')? 'errcoll': ''}}">4. Have you ever been charged and convicted of a violation of any State law pertaining to
controlled or habit-forming drugs or narcotics?</label>
                </td>
                <td colspan="2">
                 <div align="center">
                    <input type="radio" name="controlledhabit" value="yes" {{old('controlledhabit')=='yes' ? "checked" :""}} style="margin-right:50px">
                    <input type="radio" name="controlledhabit" value="no" {{old('controlledhabit')=='no' ? "checked" :""}} style="margin-left:50px"> 
                </div>
                </td>
                </tr>
               <tr ><th colspan="3">F. Remarks</th></tr>
              <tr id="t3">
                <td class="t3" colspan="3"><label>Reference item numbers when explaining previous entries and attaching information.</label>
                 <textarea  style="width: 100%" rows="8" name="remarks" class ="input {{$errors->has('remarks')? 'errcol': ''}}">{{old('remarks')}}</textarea>
                </td>
                
              </tr>
              <tr ><th colspan="3" class="t4">G. Upload Your Curriculum Vitae (pdf file format only (max 2mb))</th></tr>
              <tr id="t3">
                <td class="t3" colspan="3"><input type ="file" name="fileupload" required></td>
              </tr> 
              <tr ><th colspan="3" class="t4"></th></tr>
              <tr id="t3">
                <td class="t3" colspan="3"><label>I certify that the information provided hereon and in attachments is correct to the best of my knowledge and belief, and I agree to the conditions of acceptance which accompanied this application. I further agree that I will acquire all the necessary equipment upon
acceptance and prior to my conduct of CAA medical examinations.</label>
                 
                </td>
                
              </tr>
              <tr>
                  <td>
                      <label>1. Date </label>
                      <input type="date" style="width: 100%" name="doapplication" value="{{old('doapplication')}}" class ="input {{$errors->has('doapplication')? 'errcol': ''}}">
                         
                    </td>
                <td colspan="2">
                  <label>2. Signature (sign with login password)</label>
                  <input type="password"  style="width: 100%" name="dsignature" class ="input {{$errors->has('dsignature')? 'errcol': ''}}" value="{{old('dsignature')}}"> 
                </td>
                
                
                
                </tr>
              
            </tbody>
        </table>
      <div align = "right">
          <button type="submit">Submit</button>
        </div>
        
  </form>
  </div>
      </div>
  </div>
</div>
</div>
@endsection