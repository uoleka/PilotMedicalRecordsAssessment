@extends ('layouts.app')

  
@section('content')
  <div class="container" style="margin-top: 5px">
 	 @if (count($errors) > 0)
      <div class="alert alert-danger" align="center">
      The Application Number is required to proceed.
      </div>
    @endif
    @if (isset($message))
      <div class="alert alert-info">
      {{$message}}
      </div>
    @endif
    
   <div class="row justify-content-center">
 	 	    <div class="col-md-4">
            <div class="card  polaroided">
                <div class="card-header"><h3>Enter the Application Number</h3></div>
                <div class="card-body">


<form method ='POST' Action ='ameaddappl' >
  {{ csrf_field() }}
    
     <input type="text" name ="appnum" value="{{old('appnum')}}" class="input {{$errors->has('appnum') ? 'errcol':'form-control'}}"><br><br>
    <div align = "left">
          <button type="submit" class="button" >Submit</button>
      </div>
        
      </form>

    </div>
      </div>
  </div>
</div>
</div>
    
@endsection