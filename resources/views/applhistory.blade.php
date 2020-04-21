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
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                  40% Complete
                </div>
              </div>
              <div class="card-body">
              <form method ='POST' Action ='applhistory' enctype="multipart/form-data">
                        {{ csrf_field() }}
                <table class="table-responsive table-striped appSubSec" >
                        
                        <tbody >
                     <tr>
                   <td colspan="4"><label><strong>16. Regular Use: Prescription or Non-Prescription</strong>
                    <a href="instructions#sixteen">
                        <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                    </a>
                  </label><br>

                   </td>
                 </tr>
                 <tr>
                  <td colspan="3"></td>
                   <td colspan="2">
                      <input type="radio" value="yes" name="daipre" style="margin-left: 10px" 
                             {{isset($person->daipre) ? ($person->daipre == "yes" ? 'checked' : '') : (old('daipre')=="yes" ? 'checked' : '')}}> 
                             <label for ="daipre" class = "input {{$errors->has('daipre') ? 'errcoll' : ''}}">
                              Yes <i>(List Below)</i></label>
                             <input type="radio" value="no" name="daipre" style="margin-left: 10px" 
                             {{isset($person->daipre) ? ($person->daipre == "no" ? 'checked' : '') : (old('daipre')=="no" ? 'checked' : '')}}> 
                             <label for ="daipre" class = "input {{$errors->has('daipre') ? 'errcoll' : ''}}">No</label>
                   </td>
                 </tr>
                 <tr>
                  <td colspan="3">
               
               <label><strong>Previously reported</strong></label> 
              </td>
                  <td colspan="2">
                            
                    </td>
              
            </tr>
          <tr >
                     <td colspan="3">
                      <input type="radio" name="drug1" style="margin-left: 10px" value="yes" {{isset($person->drug1) ? ($person->drug1 == "yes" ? 'checked' : '') : (old('drug1')=="yes" ? 'checked' : '')}} > 
                              <label class = "input {{$errors->has('drug1') ? 'errcoll' : ''}}">Yes</label>
                      <input type="radio" name="drug1" style="margin-left: 10px" value="no"
                       {{isset($person->drug1) ? ($person->drug1 == "no" ? 'checked' : '') : (old('drug1')=="no" ? 'checked' : '')}}> <label class = "input {{$errors->has('drug1') ? 'errcoll' : ''}}">No</label>
                    </td>
                    <td  >
                          <input type="text" name ="precrip1" style="width: 100%"
                           value="{{isset($person->precrip1) ? $person->precrip1 : old('precrip1')}}" class ="input {{$errors->has('precrip1')? 'errcol': 'form-control'}}">
                         </td>
                        
                        
                    </tr>
                    <tr id="t4" >
                        <td colspan="3" >
                        <input type="radio" name="drug2" style="margin-left: 10px" value="yes"
                        {{isset($person->drug2) ? ($person->drug2 == "yes" ? 'checked' : '') : (old('drug2')=="yes" ? 'checked' : '')}}> <label class = "input {{$errors->has('drug2') ? 'errcoll' : ''}}">Yes</label>
                          <input type="radio" name="drug2" style="margin-left: 10px" value="no"
                        {{isset($person->drug2) ? ($person->drug2 == "no" ? 'checked' : '') : (old('drug2')=="no" ? 'checked' : '')}}>
                           <label class = "input {{$errors->has('drug2') ? 'errcoll' : ''}}">No</label>
                    </td>
                        <td  ><input type="text" name ="precrip2" style="width: 100%" 
                          value="{{isset($person->precrip2) ? $person->precrip2 : old('precrip2')}}" class ="input {{$errors->has('precrip2')? 'errcol': 'form-control'}}">
                        </td>
                        
                    </tr>
                  
                      <tr id="t4" >
                        <td colspan="3">
                        <input type="radio" name="drug3" style="margin-left: 10px" value="yes" {{isset($person->drug3) ? ($person->drug3 == "yes" ? 'checked' : '') : (old('drug3')=="yes" ? 'checked' : '')}}> 
                        <label class = "input {{$errors->has('drug3') ? 'errcoll' : ''}}">Yes</label>
                     
                          <input type="radio" name="drug3" style="margin-left: 10px" value="no"
                            {{isset($person->drug3) ? ($person->drug3 == "no" ? 'checked' : '') : (old('drug3')=="no" ? 'checked' : '')}}> 
                          <label class = "input {{$errors->has('drug3') ? 'errcoll' : ''}}">No</label>
                    </td>



                        <td><input type="text" name ="precrip3" style="width: 100%"
                           value="{{isset($person->precrip3) ? $person->precrip3 : old('precrip3')}}" class ="input {{$errors->has('precrip3')? 'errcol': 'form-control'}}"></td>
                        
                    </tr>   
                    <tr>
                        <td colspan="3">
                        <input type="radio" name="drug4" style="margin-left: 10px" value="yes" {{isset($person->drug4) ? ($person->drug4 == "yes" ? 'checked' : '') : (old('drug4')=="yes" ? 'checked' : '')}}> 
                        <label class = "input {{$errors->has('drug4') ? 'errcoll' : ''}}">Yes</label>
                     
                          <input type="radio" name="drug4" style="margin-left: 10px" value="no"
                            {{isset($person->drug4) ? ($person->drug4 == "no" ? 'checked' : '') : (old('drug4')=="no" ? 'checked' : '')}}> 
                          <label class = "input {{$errors->has('drug4') ? 'errcoll' : ''}}">No</label>
                    </td>



                        <td><input type="text" name ="precrip4" style="width: 100%"
                           value="{{isset($person->precrip4) ? $person->precrip4 : old('precrip4')}}" class ="input {{$errors->has('precrip4')? 'errcol': 'form-control'}}"></td>
                        
                    </tr> 
                     <tr>
                        <td colspan="3">
                        <input type="radio" name="drug5" style="margin-left: 10px" value="yes" {{isset($person->drug5) ? ($person->drug5 == "yes" ? 'checked' : '') : (old('drug5')=="yes" ? 'checked' : '')}}> 
                        <label class = "input {{$errors->has('drug5') ? 'errcoll' : ''}}">Yes</label>
                     
                          <input type="radio" name="drug5" style="margin-left: 10px" value="no"
                            {{isset($person->drug5) ? ($person->drug5 == "no" ? 'checked' : '') : (old('drug5')=="no" ? 'checked' : '')}}> 
                          <label class = "input {{$errors->has('drug5') ? 'errcoll' : ''}}">No</label>
                    </td>



                        <td><input type="text" name ="precrip5" style="width: 100%"
                           value="{{isset($person->precrip5) ? $person->precrip5 : old('precrip5')}}" class ="input {{$errors->has('precrip5')? 'errcol': 'form-control'}}"></td>
                        
                    </tr>   

             
                
              <tr id="t4" >
                    <td class="t5" colspan="4">
                        <label><strong>
                           17. Do you use near vision contact lenses when flying?</strong> 
                           <a href="instructions#seventeen">
                              <i class="fa fa-info-circle" style="font-size:12px;color:blue"></i>
                          </a>
                          </label>  
                      <input type="radio" name= "lense" value="yes" style="margin-left: 34px" 
                      {{isset($person->lense) ? (($person->lense) =="yes" ? 'checked' :'') : (old('lense')=="yes" ? 'checked' : '')}}>  
                      <label for ="lense" class = "input {{$errors->has('lense') ? 'errcoll' : ''}}">Yes </label>
                      <input type="radio" name= "lense" value="no" style="margin-left: 10px"  
                      {{isset($person->lense) ? (($person->lense) =="no" ? 'checked' : '') : (old('lense')=="no" ? 'checked' : '')}}> 
                      <label for ="lense" class = "input {{$errors->has('lense') ? 'errcoll' : ''}}">No</label>
                    </td>
                </tr>
                
                <tr>
                  <td colspan="2"><div align = "left" style="margin-top:20px">
                   <a href={{route('appllicense.index')}} class = "btn btn-success">Previous</a>
                </div><label> </label>
                </td>
                <td colspan ="2"><div align = "right">
                  <input type="submit" class="btn btn-success"  value="Next"/>
                </div>
              </td>
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