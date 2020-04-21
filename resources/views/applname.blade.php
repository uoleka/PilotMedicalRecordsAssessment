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
              <div class="card-body">
					<form method ='POST' Action ='applname' enctype="multipart/form-data">
					  {{ csrf_field() }}
     
    
    <table class="table-responsive table-striped appSubSec" >
           	
            <tbody >
			   
                <tr>
                 <td colspan="2">
                 
                   <label class="col-form-label" for="formClass">
                      <strong> 
                     1. Class of medical certificate applied for:
                    </strong>  
                    </label>
                  <a href="instructions#one">
                    <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                  </a>
                   
    <span style="margin-left: 40px">
      
			<label class="input {{$errors->has('formClass')? 'errcoll': 'col-form-label'}}">1.
			</label>
                   <input type="radio" name="formClass"  value="1" {{ isset($person->formClass) ? ($person->formClass =="1" ? 'checked' :"") : (old('formClass')=="1" ? 'checked' : '')}}>
		</span>
                
				<span style="margin-left: 20px"><label  for="formClass" class="input {{$errors->has('formClass')? 'errcoll': 'col-form-label'}}">2.</label>
                  
                <input type="radio" name="formClass" value="2" {{ isset($person->formClass) ? ($person->formClass =="2" ? 'checked' :"") : (old('formClass')=="2" ? 'checked' :'')}}
				class="text-right "  >
				</span>

                <span style="margin-left: 20px">
				<label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': 'col-form-label'}}">3.</label>
                  
                <input type="radio" name="formClass" value="3" {{ isset($person->formClass) ? ($person->formClass =="3" ? 'checked' :"") : (old('formClass')=="3" ? 'checked' : '')}}
				class="text-right" >
				</span>
                   </td> 
                </tr>
     
	   
               
                <tr >
                    <td colspan="2">
                       <strong>
                         <label class="col-form-label" >
                           2. Name</label>
                          </strong>
                          <a href="instructions#two">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                          </a>
                          <br>
                        </td>
                </tr>
                        <tr>
                        <td colspan="2">	
                        <input type="text" placeholder="Last Name" name="lname" value="{{isset($person->formClass) ? $person->lname : old('lname')}}" 
						class ="input {{$errors->has('lname')? 'errcol': 'form-control'}}" style="width: 100%">
					
				
                     <input type="text" placeholder="First Name" name="fname" value="{{ isset($person->formClass) ? $person->fname : old('fname')}}" 
					 class ="input {{$errors->has('fname')? 'errcol': 'form-control'}}" style="width: 100%"> 
                      
                        <input type="text" placeholder="Middle Name" name="mname" value="{{isset($person->formClass) ? $person->mname : old('mname')}}" 
						class ="input {{$errors->has('mname')? 'errcol': 'form-control'}}" style="width: 100%"> 
                         <input type="hidden" name="userid" value="{{auth()->user()->id}}" >
                    </td>
                  </tr>
                  <tr></tr>
                  <tr>
						<td>
								
								<strong>
                  
                    3. Identification Number:
                  
                </strong>
                <a href="instructions#three">
                    <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                </a>
                

								<input type="text" name="pid" value="{{isset($person->formClass) ? $person->pid : old('pid')}}" 
								class ="input {{$errors->has('pid')? 'errcol': 'form-control'}}">
							
							</td>
							<td>
                        <strong>
                          4. Citizenship:
                        </strong>
                        <a href="instructions#four">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                        </a>
						<select name="country" id="country" class ="select {{$errors->has('country')? 'errcol': 'form-control'}}" >
							<option value="">--- Select Country ---</option>
							@foreach(App\pel_country::all() as $nationality)
							<option value="{{ $nationality->name }}" {{ isset($person->formClass) ? ($person->country == $nationality->name ? 'selected' : (old('country') == $nationality->name ? 'selected' : '')) : '' }}>{{ $nationality->name }}</option>
							@endforeach
						</select>
				  </td>
                </tr>

                 <tr>
                    <td  >
                        <strong>
                          5a. Address (Number and Street)
                        </strong>
                        <a href="instructions#five">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                        </a>
                        <textarea placeholder="Enter your current address" style="width: 100%" rows="5" name="paddre" class ="textarea {{$errors->has('paddre')? 'errcol': 'form-control'}}" >{{isset($person->formClass) ? $person->paddre : old('paddre')}}</textarea>
                    </td>
                    <td  >
                        <strong>
                          5b. City and State / province
                          <a href="instructions#five">
                              <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                          </a>
                        <textarea placeholder="Enter your state or province" style="width: 100%" rows="5" name="bstate" 
                        class ="textarea {{$errors->has('bstate')? 'errcol': 'form-control'}}" >
                        {{isset($person->formClass) ? $person->bstate : old('bstate')}}
                      </textarea>
                                    
                    </td>
                </tr>
                <tr id="t2" >
                    
                    <td  width = "5%" class="t3" >
                      <strong><label class="col-form-label">5c. Country and postal code</label></strong>
                      <a href="instructions#five">
                          <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                      </a>
                      <br>
        							<input type="text" name="pcode" style="width: 100%" value="{{isset($person->formClass) ? $person->pcode : old('pcode')}}" class ="input {{$errors->has('pcode')? 'errcol': 'form-control'}}" >
                    </td>
                    <td  class="t3" width = "5%">
                        <strong><label class="col-form-label" title="Enter your complete telephone number. ">5d. Telephone:</label></strong>
                        <input type="text" name="tfone" style="width: 100%" value="{{ isset($person->formClass) ? $person->tfone : old('tfone')}}" class ="input {{$errors->has('tfone')? 'errcol': 'form-control'}}">
                    </td>
                </tr>
                <tr >
                    
                  <td  class="t3" width = "5%" >
                          <strong> <label class="col-form-label">6. Date of birth </label></strong>
                          <a href="instructions#six">
                              <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                          </a>
                    <input type="date" name="dob" style="width: 100%" max ="1999-12-31" value="{{ isset($person->formClass) ? $person->dob : old('dob')}}" class ="input {{$errors->has('dob')? 'errcol': 'form-control'}}" >
                                                                    
                  </td>
                  
                    <td  class="t3"  width = "5%">
                      <strong><label class="col-form-label">7. Hair</label></strong>
                      <a href="instructions#seven">
                          <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                      </a>
                      <br>
        						  <select name="hair" id="hair" style="width: 100%"class ="select {{$errors->has('hair')? 'errcol': 'form-control'}}" >
            							<option value="">--- Select Hair Color ---</option>
            							@foreach(App\hair::all() as $hname)
            							<option value="{{ $hname->name }}" {{ isset($person->formClass) ? ($person->hair == $hname->name ? 'selected' : (old('hair') == $hname->name ? 'selected' : '')) : '' }}>{{ $hname->name }}</option>
            							@endforeach
        						  </select>
        						</td>

                  
                </tr>
                  <tr>
                  	<td  class="t3" width = "5%" >
                        <strong><label class="col-form-label">8. EYES</label></strong>
                        <a href="instructions#eight">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                        </a>
                        <br>
						<select name="eyes" id="eyes" style="width: 100%" class ="select {{$errors->has('eyes')? 'errcol': 'form-control'}}" >
							<option value="">--- Select Eye Color ---</option>
							@foreach(App\pel_eyes::all() as $hname)
							<option value= "{{ $hname->name }}" {{ isset($person->formClass) ? ($person->eyes == $hname->name ? 'selected' : '') : (old('eyes') == $hname->name ? 'selected' : '') }} >{{ $hname->name }}</option>
							@endforeach
						</select>
									
						
						
                       
                    </td>
                   <td >
                        <strong>9. GENDER
                        </strong>
                        <a href="instructions#nine">
                            <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                        </a>
                        <br>
                        
						            <select name ="gender" style="width: 100%; margin-top:8px" id ="gender" class ="select {{$errors->has('gender')? 'errcol': 'form-control'}}">
                            <option value="">--select Gender--</option>
                            <option value="Male" {{ isset($person->formClass) ? ($person->gender == 'Male' ? 'selected' : '') : (old('gender') == 'Male' ? 'selected' : '')}}>Male</option>
                            <option value="Female" {{ isset($person->formClass) ? ($person->gender == 'Female' ? 'selected' : '') : (old('gender') == 'Female' ? 'selected' : '') }} >Female</option>
                        </select>
						
						
                    </td>
                  </tr>
			</tbody>
			
        </table>

    <br>
  <div align = "right">
          <input type="submit" class="btn btn-success"  value="Next"/>
      </div>
        
      </form>
      	</div>
      </div>
  </div>
</div>
</div>
    
@endsection