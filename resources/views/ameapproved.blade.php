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
          
              <div class="col-md-12" >
                  <div class="card  polaroided">
                      <div class="card-header">
                        <section>
                        <img src="template/bagasoo_logo.png" height="40"/>
                        <div align="center"><strong>AME Registration Approval</strong></div>
                        </section>
                      </div>
                    <div class="card-body">
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