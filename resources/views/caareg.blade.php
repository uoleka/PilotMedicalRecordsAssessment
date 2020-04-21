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
 	 	
        <div class="col-md-4" >
            <div class="card  polaroided">
                <div class="card-header">
                	<section>
                	<img src="template/bagasoo_logo.png" height="40"/>
                	<div align="center"><strong>Fill in the details of the CAA staff</strong></div>
                	</section>
                </div>
              <div class="card-body">
					<form method ='POST' Action ='caareg' enctype="multipart/form-data">
					  {{ csrf_field() }}
     
    
    <table class="table-responsive table-striped appSubSec" >
           	
            <tbody >
			   
                <tr >
                    <td >
                       <strong><label class="col-form-label" title=" Enter your full name. If your name has changed
for any reason, enter your current name and list any
former name(s) in Item 18c, Explanations. All applicants
without a middle name or initial should enter “NMN” or
“NONE.” Nicknames and abbreviated names must not be
used. " >1. Designation</label></strong></td>
                        <td >	
                        <input type="text" placeholder="Designation" name="designation" value="{{old('designation')}}" 
						class ="input {{$errors->has('designation')? 'errcol': 'form-control'}}" style="width: 100%">
					
				
                     
                    </td>
                  </tr>
                  
                  <tr>
						<td>
								
								<strong><label class="col-form-label" title="Entry of the identification number is optional; 
however, its use as a unique identifier helps 
eliminate mistakes. ">2. Staff Identification Number:</label></strong>
                </td>
                <td >
								<input type="text" name="staffid" style="width: 100%" value="{{old('staffid')}}" 
								class ="input {{$errors->has('staffid')? 'errcol': 'form-control'}}">
							
							</td>
							
                </tr>

                 
			</tbody>
			
        </table>

    <br>
  <div align = "right">
          <input type="submit" class="btn btn-success"  value="Submit"/>
      </div>
        
      </form>
      	</div>
      </div>
  </div>
</div>
</div>
    
@endsection