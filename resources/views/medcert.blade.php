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
    
        <div class="col-md-7" >
            <div class="card  polaroided">
                <div class="card-header">
                  <section>
                  <img src="/template/bagasoo_logo.png" height="40"/>
                  <div align="center"><strong>Medical Certificate</strong></div>
                  </section>
                </div>
              <div class="card-body">
 

        <form method ='POST' Action ='/medcert' >
          {{ csrf_field() }}
            
             <table class="table table-bordered table-sm table-responsive">
                    <tbody class="appSubSec">
                          <tr>
                            <td>
                              <div align="right"><label><strong>1. Medical certificate number</strong></label></div>
                            </td>
                          </tr>
                        <tr>
                                  <td class="t3" colspan ="3"><label><strong>2. Name of holder in full</strong></label>
                                    <input type="text" style = "width:100%" placeholder="Name" required  name="aname" value="{{$person->lname}} {{$person->fname}} {{$person->mname}}" 
                          class ="input {{$errors->has('aname')? 'errcol': 'form-control'}}" readonly="">
                           <input type="hidden" name ='appid' value="{{$person->id}}">      
                             </td>
                             <td  class="t3" >
                                         <label><strong>3. Date of birth of holder</strong></label><br>
                                  <input type="date" required required  name="dob" value="{{$person->dob}}"
                                   class="input {{$errors->has('dob') ? 'errcol' :'form-control'}}" readonly="">
                                                                
                                </td>
                               </tr>
                      			<tr id="t3">
                               <td colspan="3"  class="t3">
                                <label><strong>4. Address of holder</strong></label>
                                <textarea placeholder="Enter your current address" style="width: 100%" rows="2" required required  name="paddre" class ="input {{$errors->has('paddre')? 'errcol': 'form-control'}}" readonly="">{{$person->paddre}}</textarea>
                            </td>
                          
                          <td>
                             <label><strong>5. Nationality of holder</strong></label><br>
                            <input type="text" style = "width:100%" required  name="nationality" 
                            value="{{$person->country}}" 
                    class ="input {{$errors->has('nationality')? 'errcol': 'form-control'}}" readonly="">        
                         
                         </td>     
                      </tr>
                      <tr>
                      <td colspan="4"  class="t3">
                                <label><strong>6. Signature of holder</strong></label>
                                <textarea style="width: 100%" rows="3" required  name="sinatureohold" class ="input {{$errors->has('sinatureohold')? 'errcol': 'form-control'}}" readonly="">{{$person->signature}}</textarea>
                            </td>
                      </tr>
                      <tr>
                      <td colspan="4"  class="t3">
                                <label><strong>7. Medical certificate Class <i>[enter 1, 2, or 3 as applicable]</i></strong></label>
                                 <input type="text"  required  name="medcertclass" value="{{$person->formClass}}" class ="input {{$errors->has('medcertclass')? 'errcol': 'form-control'}}" readonly="">      
                            </td>
                      </tr>
                      
                      <tr>
                      <td colspan="2"  class="t3">
                                <label><strong>8. Issuing Authority</strong></label>
                                 <input type="text" style="width: 100%" required  name="issauthority" value="{{old('issauthority')}}" class ="input {{$errors->has('issauthority')? 'errcol': 'form-control'}}"> 
                            </td>
                        <td colspan="2"  class="t3">
                                <label><strong>9. Validity</strong></label>
                                 <input type="text" style="width: 100%" required  name="validity" value="{{old('validity')}}" class ="input {{$errors->has('validity')? 'errcol': 'form-control'}}">
                            </td>
                        
                      </tr>
                      
                      <tr id="t3">
                               <td colspan="4"  class="t3">
                                <label><strong>10. Limitations</strong></label>
                                <textarea style="width: 100%" rows="3" required  name="limitation" class ="input {{$errors->has('limitation')? 'errcol': 'form-control'}}" >{{old('limitation')}}</textarea>
                            </td>
                           </tr>
                       <tr>
                         <td colspan ="2">
                                   <label><strong>11. Date of issue</strong></label><br>
                            <input type="date" style = "width:100%" required  name="doissu" value="{{old('doissu')}}" 
                             class="input {{$errors->has('doissu') ? 'errcol' :''}}">
                                                          
                          </td>
                          <td colspan="2">
                                <label><strong>12. Examiner's signature</strong></label>
                                <textarea style="width: 100%" rows="3" required  name="signaturcaa" class ="input {{$errors->has('signaturcaa')? 'errcol': 'form-control'}}" >{{old('signaturcaa')}}</textarea>
                            </td>
                      
                      </tr>
                      
                      <tr>
                        <td colspan ="2"><label><strong>13. CAA staff required name</strong></label>
                          </td>      
                        <td colspan ="2"><label><strong>14. AMA Signature / Issuing Authority</strong></label>
                                
                        </td>     
                      </tr>
                      <tr>
                        @can('create', App\pel_ama::class)
                          
                        <td colspan ="2">
                          <input type="text" style = "width:100%"  required  name="caastaffname" value="{{old('caastaffname')}}" 
                    class ="input {{$errors->has('caastaffname')? 'errcol': 'form-control'}}"></td>
                     <td colspan ="2" >
                      <textarea style="width: 100%" rows="3" required  name="signatureauth"class ="input {{$errors->has('signatureauth')? 'errcol': 'form-control'}}">{{old('signatureauth')}}</textarea>
                        </td>
                     
                        @endcan
                      </tr>
                       <tr>
                         
                          <td  colspan = "2" class="t3">
                                <label><strong>15. Examiner’s authorization number</strong></label>
                                <textarea style="width: 100%" rows="3" required  name="authnumb" class ="input {{$errors->has('authnumb')? 'errcol': 'form-control'}}" >{{old('authnumb')}}</textarea>
                            </td>
                         <td  class="t3"  >
                                   <label><strong>16a. Date of examination</strong></label><br>
                            <input type="date" style = "width:100%" required  name="doexam" value="{{$personmed->dateofexam}}" 
                             class="input {{$errors->has('doexam') ? 'errcol' :'form-control'}}">
                                                         
                          </td>
                                    
                        <td class="t3" ><label><strong>16b. State of examination</strong></label><br>
                              <input type='text' required  name="country" 
                              value="{{ $personmed->amecountry}}">
                        </td>
                      </tr>
            
            <tbody>
              </table>
            <div align = "right">
                  <button type="submit" >Submit</button>
              </div>
                
              </form>

              </div>
          </div>
      </div>
  </div>
</div>
    
    
@endsection