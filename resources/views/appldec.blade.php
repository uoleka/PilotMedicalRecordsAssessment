@extends ('layouts.app')

  
@section('content')
<div class="container" style="margin-top: 5px">
   @if (count($errors) > 0)
      <div class="alert alert-danger" align="center">
      Fill in the field(s) marked in red.
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
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                  95% Complete
                </div>
              </div>
              <div class="card-body">
              <form method ='POST' Action ='appldec' enctype="multipart/form-data">
                        {{ csrf_field() }}
                <table class="table-responsive table-striped appSubSec" >
                        
                        <tbody >
                            <tr>
                    <td colspan="2"><label>21. I hereby certify that all statements and answers provided by me on
                    this application are complete and true to the best of my knowledge, and I
                    agree that they are to be considered part of the basis for issuance of any
                    CAA licence and certificate to me.</label>
                    </td>
                    </tr>
                    <tr>
                    
                    
                    <td class="t9"><label><br><strong></strong>Sign with your Login Password</label>
                      <input type = "password" style="width:100%; margin-bottom :10px" placeholder="signature" name="signature" 
                      value="{{isset($person->signature) ? $person->signature : old('signature') }}" 
                  class ="input {{$errors->has('signature')? 'errcol': 'form-control'}}">
                    </td>
                </tr>
              
                <tr>
                  <td colspan="1"><div align = "left" style="margin-top:20px">
                  <a href="applconvic" class="btn btn-success">Previous</a>
                </div><label> </label>
                </td>
                <td colspan ="1"><div align = "right">
                  <input type="submit" class="btn btn-success"  value="Submit"/>
                </div>
              </td>
              </tr>
              <tr>
                    <td colspan="2" ><span>CAA Form 548 [c]2018</span><aside class="text-right">Page 1 of 2.</aside></td>
                </tr>
            </tbody>
        </table>
        

               
                  
              </form>
              </div>
            </div>
        </div>
  </div>
</div>
@endsection
