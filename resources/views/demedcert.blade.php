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
                  <div align="center"><strong>Notice of Denial of Medical Certificate</strong></div>
                  </section>
                </div>
              <div class="card-body">
		
    <div align ="center"style="color:red"><span>
    {{$errors ->any() ? "Please fill the Field(s) marked in red": ''}}
  </span></div>
 

<form method ='POST' Action ='/demedcert' >
  {{ csrf_field() }}
    
            <table class="table table-bordered table-sm table-responsive tab1 appSubSec">
            <tbody class="appSubSec">
              <tr>
                    <td class="t3" colspan ="3"><label>Name of Applicant</label>
                    <input type="text" style = "width:100%" placeholder="Name" required  name="aname" value="{{$person->lname}} {{$person->fname}} {{$person->mname}}" 
                     class="input {{$errors->has('aname') ? 'errcol' :''}}">      
                <input type="hidden" name ='appid' value="{{$person->id}}">
               <td >
                    <label>Date of birth </label><br>
                    <input type="date" style = "width:100%" required  name="dob" value="{{$person->dob}}" 
                     class="input {{$errors->has('dob') ? 'errcol' :''}}">
                  </td>
                       </tr>
              			<tr id="t3">
                       <td colspan="3"  class="t3">
                        <label>Address of Applicant</label>
                       <textarea placeholder="Enter your current address" style="width: 100%" rows="2" required required  required  name="paddre" class ="input {{$errors->has('paddre')? 'errcol': ''}}" >{{$person->paddre}}</textarea>
                    </td>
                  <td class="t3">
                     <label>Date of medical examination</label><br>
                    <input type="date" style = "width:100%" required  name="doexam" value="{{$personmed->dateofexam}}" 
                     class="input {{$errors->has('doexam') ? 'errcol' :''}}">
                 </td>     
              </tr>
              <tr id="t3">
                <td class="t3" colspan="4"><label>Class of medical certificate denied</label><br><br>
                    <span style="margin: 20px"><label  class="input {{$errors->has('formClass')? 'errcoll': ''}}">Class 1</label>
                   <input type="radio" required  name="formClass" 
                     class="text-right" style="margin: 10px" value="1"
                      {{ $person->formClass =="1" ? 'checked' : "disabled='disabled'"}} readonly >
                    </span>
                  <span style="margin: 20px"><label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': ''}}">Class 2</label>
                  <input type="radio" required  name="formClass" value="2"
                  {{ $person->formClass =="2" ? 'checked' : "disabled='disabled'"}} readonly}}
                  class="text-right " style="margin: 10px" >
                  </span>
                  <span style="margin: 20px">
                  <label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': ''}}">Class 3</label>
                  <input type="radio" required  name="formClass" value="3"
                  {{ $person->formClass =="3" ? 'checked' : "disabled='disabled'"}} readonly}}
                  class="text-right" style="margin: 10px" >
                  </span>
                 </td>
                </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label>MCAR Part 2 paragraph number</label>
                        <textarea style="width: 100%" rows="3" required  name="mcar" class ="input {{$errors->has('mcar')? 'errcol': ''}}" >{{old('mcar')}}</textarea>
                    </td>
              </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label>Disqualifying conditions</label>
                        <textarea style="width: 100%" rows="12" required  name="disqucond" class ="input {{$errors->has('disqucond')? 'errcol': ''}}" >{{old('disqucond')}}</textarea>
                    </td>
              </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label>Assessment of your application form and medical examination of the above date reveals that you do not meet the MCAR
medical requirements for a medical certificate (class as above) because of the condition(s) stated. Accordingly, your
application for a medical certificate (class as above) is hereby denied.
I have personally tested this applicant and deem his or her medical condition unsatisfactory for issuance of the medical
certificate sought.</label>
                       
                    </td>
              </tr>
              <tr>
                <td colspan ="3"><label>Examiner's signature</label>
                        <textarea style="width: 100%" rows="3" required  name="signaturex" class ="input {{$errors->has('signaturex')? 'errcol': ''}}" >{{old('signaturcaa')}}</textarea>
                    </td>
                <td><label>Examiner’s authorization number</label>
                        <input type="text" style="width: 100%" name="authnumb" class="input {{$errors->has('authnumb') ? 'errcol' :''}}" value ="{{old('authnumb')}}"></td>
              </tr>
              <tr>
                <td colspan ="3">
                   <label>Signature of CAA medical assessor</label>
                  <textarea  style="width: 100%" rows="3" required  name="signature" class ="input {{$errors->has('signature')? 'errcol': ''}}" >{{old('signature')}}</textarea>
                </td>
               <td>
                  <label>Date </label>
                  <input type="date" style="width: 100%" required  name="doapplication" value="{{old('doapplication')}}" 
                     class="input {{$errors->has('doapplication') ? 'errcol' :''}}">
                </td>
                </tr>
              </tbody>
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