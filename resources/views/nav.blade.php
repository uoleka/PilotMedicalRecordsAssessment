 
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
                  <div align="center"><strong>Home Page</strong></div>
                  </section>
                </div>
              <div class="card-body">
        


	<div align ="center"style="color:blue">
		
		 				@can('create', App\pel_applicant::class)
                      		{{$nub=""}}
                        @endcan
                       	@can('create', App\pel_ame::class)
                       		{{$nub=""}}
                        @endcan
                        @can('create', App\pel_ama::class)
                        	{{$nub=""}}
                        @endcan
                         @can('create', App\pel_caa::class)
                        	{{$nub=""}}
                        @endcan
                        @if (!isset($nub))
	                        @foreach(App\pel_role::where ('userid', '=', auth()->user()->id)->get() as $requester)
		                        @if (isset($requester))
		                        {{$message="Your registration is awaiting approval and your Application number is" . "- for enquiries contact email:- phone -."}}

		                		@endif
	                        @endforeach
	                    @if (!isset($requester))
	                        {{$message="Please select a Role"}}
	                        @endif
                        @endif
		
  	</div>
  	@can('create', App\pel_ame::class)	
 	<table class="table table-bordered table-sm table-responsive " id ="sentTity"  cellspacing="0" width="100%" > 
						
		@foreach(App\pel_applicant::where('ame', '=', auth()->user()->id)->where('status', '=', 1)->get() as $person) 
		<thead class= "blue">
							<tr>
								<th width="5%">S/No</th>
								<th width="10%">Date</th>
								<th width="15%">Applicant Name</th>
								<th width="10%">Medical Report</th>
								@foreach(App\pel_medexam::where('appid', '=', $person->id)->get() as $personmed) 
								@if ($personmed->recommend == "defer")
								{
								<th width="10%">SODA</th>
								<th width="10%">Report of Eye Evaluation</th>
								<th width="10%">Ophthalmological Evaluation for Glaucoma</th>
								}
								@endif
								@endforeach
								<th width="10%">Medical Certificate</th>
								<th width="10%">Notice of Denial of Medical Certificate</th>
							</tr>
						</thead>
						
						
					<tbody>
					

		

		<tr>
		<td> {{[$id]=$person->id}}</td>
		<td> {{$person->dacknowledge}} </td>
		<td>{{$person->fname}} {{$person->lname}}</a></td>
		<td><a href= "{{route('medexam.show', [[$id]=$person->id])}}">Medical Report</a></td>
		@foreach(App\pel_medexam::where('appid', '=', $person->id)->get() as $personmed)	
		@if ($personmed->recommend == "defer")
				{
					<td><a href="{{ route('soda.show', [[$id]=$person->id]) }}">SODA</a></td>
					<td><a href="{{ route('eyerep.show', [[$id]=$person->id]) }}">Report of Eye Evaluation</a></td>
					<td><a href="{{ route('ophtharep.show', [[$id]=$person->id]) }}">Ophthalmological Evaluation for Glaucoma</a></td>
				}
			@endif
			@endforeach	
        <td><a href="{{ route('medcert.show', [[$id]=$person->id]) }}">Medical Certificate</a></td>
		<td><a href="{{ route('demedcert.show', [[$id]=$person->id]) }}">Notice of Denial of Medical Certificate</a></td>
   </tr>
   	
     		@endforeach
     		 @endcan
 @can('create', App\pel_applicant::class)

 	<table class="table table-bordered table-sm table-responsive " id ="sentTity"  cellspacing="0" width="100%" > 
						<thead class= "blue">
							<tr>
								
								<th width="10%">Date of Application</th>
								<th width="15%">Applicant Name</th>
								<th width="15%">Application Number <i>(take this to the AME).</i></th>
							
							</tr>
						</thead>
						
						
					<tbody>
					
 		
						@foreach(App\pel_applicant::where('userid','=',auth()->user()->id)->get() as $person) 
							@if (isset($person->dacknowledge))
								<tr>
									<td> {{$person->dacknowledge}} </td>
									<td><a href= "{{route('applicant.show', [[$id]=$person->id])}}">{{$person->fname}} {{$person->lname}}</a></td>
									<td>000{{$person->id}}</td>
								</tr>
							@endif
						@endforeach
     				</tbody>
	</table>

	<table class="table table-bordered table-sm table-responsive " id="ametab">
                          <thead class= "blue">
                              <tr>
                                <th width="5%">S/No</th>
                                <th width="10%">Date of Application</th>
                                <th width="15%">AME Name</th>
                                <th width="15%">Name of Institution</th>
                                <th width="10%">Country</th>
                                <th width="10%">City</th>
                                <th width="20%">Address</th>
                                <th width="10%">Telephone number</th>
                                
                              </tr>
                            </thead>
                          <tbody>
                          @foreach(App\pel_role::where('role','=','ame')->where('status','=','active')->get() as $ameperson) 
                              @foreach(App\pel_ame::where('userid','=',$ameperson->userid)->get() as $person) 
                              <tr>
                                <td> {{[$id]=$person->id}}</td>
                                <td> {{$person->doapplication}} </td>
                                <td>{{$person->name}}</td>
                                <td>{{$person->instname}}</td>
                                <td>{{$person->country}}</td>
                                <td>{{$person->city}}</td>
                                <td>{{$person->streetaddre}}</td>
                                <td>{{$person->officefone}}</td>
                                
                              </tr>
                              @endforeach
                          @endforeach
                          <tbody>
    </table>
                 

  @endcan

  @can('create', App\pel_ama::class)	
 	<table class="table table-bordered table-sm table-responsive " id ="sentTity"  cellspacing="0" width="100%" > 
						<thead class= "blue">
							<tr>
								<th width="5%">S/No</th>
								<th width="10%">Date</th>
								<th width="15%">Applicant Name</th>
								<th width="10%">Medical Report</th>
								<th width="10%">SODA</th>
								<th width="10%">Report of Eye Evaluation</th>
								<th width="10%">Ophthalmological Evaluation for Glaucoma</th>
								<th width="10%">Medical Certificate</th>
								<th width="10%">Notice of Denial of Medical Certificate</th>
							</tr>
						</thead>
						
						
					<tbody>
					
 
		@foreach(App\pel_applicant::all() as $person) 

		<tr>
			<td> {{[$id]=$person->id}}</td>
			<td> {{$person->dacknowledge}} </td>
			<td>{{$person->fname}} {{$person->lname}}</a></td>
			<td><a href= "{{route('medexam.show', [[$id]=$person->id])}}">Medical Report</a></td>
			<td><a href="{{ route('soda.show', [[$id]=$person->id]) }}">SODA</a></td>
			<td><a href="{{ route('eyerep.show', [[$id]=$person->id]) }}">Report of Eye Evaluation</a></td>
			<td><a href="{{ route('ophtharep.show', [[$id]=$person->id]) }}">Ophthalmological Evaluation for Glaucoma</a></td>
	        <td><a href="{{ route('medcert.show', [[$id]=$person->id]) }}">Medical Certificate</a></td>
			<td><a href="{{ route('demedcert.show', [[$id]=$person->id]) }}">Notice of Denial of Medical Certificate</a></td>
   		</tr>
     		@endforeach
     		 @endcan
     		 @can('create', App\pel_caa::class)	
 	<table class="table table-bordered table-sm table-responsive " id ="sentTity"  cellspacing="0" width="100%" > 
						<thead class= "blue">
							<tr>
								<th width="5%">S/No</th>
								<th width="7%">Date</th>
								<th width="25%">Applicant Name</th>
								<th width="10%">Medical Certificate</th>
								<th width="10%">Status</th> 

							</tr>
						</thead>
						
						
					<tbody>
					
 		<div hidden>{{$pid=0}}</div>
		@foreach(App\pel_medcert::where('status','=', Null)->get() as $person) 
		<div hidden>{{$pid=$pid + 1}}</div>
		<tr>
		<td>{{$pid}}</td>
		<td> {{$person->doissu}} </td>
		<td>{{$person->aname}}</a></td>
		<td><a href="{{ route('medcert.show', [[$id]=$person->appid]) }}">Medical Certificate</a></td>
		<td><a href="{{ route('medcert.edit', [[$id]=$person->id]) }}">Processed</a></td>

   </tr>
     		@endforeach
     		 @endcan


</tbody>

 </table>
				</div>
      		</div>
  		</div>
	</div>
</div>
    
<script>
  $(document).ready( function () {
      $('#ametab').DataTable();
  } );
</script>
 @endsection