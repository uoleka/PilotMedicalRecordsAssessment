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
                  <img src="/template/bagasoo_logo.png" height="40"/>
                  <div align="center"><strong>AME Registration Approval</strong></div>
                  </section>
                </div>
              <div class="card-body">
        

<form method ='POST' Action ='/ameapproval' >
  {{ csrf_field() }}
    
     <table class="table-responsive table-striped appSubSec">
            <tbody>
    



              
              <tr id="t3">
                <td class="t3" colspan="4"><label><strong>1. This application has been reviewed, references have been investigated and/or it has otherwise been determined that the applicant</strong></label><br>
                 <input type="radio" name="certstatus" value="yes" {{isset($person->certstatus) ? ($person->certstatus =="yes" ? 'checked' :"") :(old('certstatus')=="yes" ?  "checked": " ")}}> 
                 <label style="margin-right: 20px" class ="input {{$errors->has('certstatus')? 'errcoll': ''}}">Meets </label><br>
                  <div><input type="radio" name="certstatus" value="no" {{isset($person->certstatus) ? ($person->certstatus =="no" ? 'checked' :"") :(old('certstatus')=="no" ?  "checked": " ")}}><label class ="input {{$errors->has('certstatus')? 'errcoll': ''}}">Does not meet the required professional standards.</label></div>
                  
                  <label style="margin-right: 20px"><strong>Authorisation as AME not made for the following reasons:</strong> </label>
                <textarea  style="width: 100%" rows="4" name="denialreason" class ="input {{$errors->has('denialreason')? 'errcol': 'form-control'}}">{{isset($person->denialreason) ? $person->denialreason : old('denialreason')}}</textarea>
                <input type ="text" name="ameid" value ="{{$userameid}}" hidden>
                </td>
                
              </tr>
              
              <tr>
                <td class="t3" colspan="3"><label><strong>2. Applicant authorized as</strong></label><br>
                 <input type="radio" name="classsame" value="class1" {{isset($person->classsame) ? ($person->classsame =="class1" ? 'checked' :"") :(old('classsame')=="class1" ?  "checked": " ")}}> 
                 <label style="margin-right: 20px" class ="input {{$errors->has('classsame')? 'errcoll': ''}}">Class 1 AME </label><br>
                  <input type="radio" name="classsame" value="class2" {{isset($person->classsame) ? ($person->classsame =="class2" ? 'checked' :"") :(old('classsame')=="class2" ?  "checked": " ")}}> 
                  <label style="margin-right: 20px" class ="input {{$errors->has('classsame')? 'errcoll': ''}}">Class 2 AME </label><br>
                  <input type="radio" name="classsame" value="class3" {{isset($person->classsame) ? ($person->classsame =="class3" ? 'checked' :"") :(old('classsame')=="class3" ?  "checked": " ")}}> 
                  <label style="margin-right: 20px" class ="input {{$errors->has('classsame')? 'errcoll': ''}}">Class 3 AME </label>
                </td>
                <td>
                  <div style="margin-bottom:60px">
                <label><strong>3. Serial number</strong> </label>
                    <input type="text"style = "width:100%"  name="serialnumb" value="{{isset($person->serialnumb) ? $person->serialnumb : old('serialnumb')}}" 
                    class ="input {{$errors->has('serialnumb')? 'errcol': 'form-control'}}">
                    </div>
                       
                </td>
              </tr>
              
              <tr>
              <td class="t3" colspan="4"><label><strong>4. Designation as AME</strong></label><br>
                 <input type="radio" name="desigstatus" value="yes" {{isset($person->desigstatus) ? ($person->desigstatus =="yes" ? 'checked' :"") :(old('desigstatus')=="yes" ?  "checked": " ")}}> 
                 <label style="margin-right: 20px" class ="input {{$errors->has('desigstatus')? 'errcoll': ''}}">Yes</label>
                  
                  <input type="radio" style="margin-right: 5px" name="desigstatus" value="no" {{isset($person->desigstatus) ? ($person->desigstatus =="no" ? 'checked' :"") :(old('desigstatus')=="no" ?  "checked": " ")}}> 
                  <label class ="input {{$errors->has('desigstatus')? 'errcoll': ''}}">No</label><br>
                  <label >Designation not made for the following reason(s): </label>
                <textarea  style="width: 100%" rows="6" name="desigdenialreason" class ="input {{$errors->has('desigdenialreason')? 'errcol': 'form-control'}}">{{isset($person->desigdenialreason) ? $person->desigdenialreason : old('desigdenialreason')}}</textarea>
                </td>
                </tr>
                <tr>
                <td colspan="2">
                <label><strong>5. Applicant's acceptance received</strong></label>
                   <input type="text" style = "width:100%"  name="applacceptance" value="{{isset($person->applacceptance) ? $person->applacceptance : old('applacceptance')}}" class ="input {{$errors->has('applacceptance')? 'errcol': 'form-control'}}">
                    
                </td>
                <td colspan="2">
                <label><strong>6. Supplies/instructions issued</strong></label>
                   <input type="text" style = "width:100%"  name="intissued" value="{{isset($person->intissued) ? $person->intissued : old('intissued')}}" class ="input {{$errors->has('intissued')? 'errcol': 'form-control'}}">
                   
                </td>
              </tr>
              
               <tr>
              <td class="t3" colspan="3"><label><strong>7. Region/city</strong></label><br>
                 <textarea  style="width: 100%" rows="3" name="amecity" class ="input {{$errors->has('amecity')? 'errcol': 'form-control'}}">{{isset($person->amecity) ? $person->amecity :old('amecity')}}</textarea>
                </td>
                <td>
                  <div style="margin-bottom:50px">
                <label><strong>8. Date </strong></label>
                  <input type="date" style="width: 100%" name="dostatus" value="{{isset($person->dostatus) ? $person->dostatus : old('dostatus')}}" class ="input {{$errors->has('dostatus')? 'errcol': 'form-control'}}">
                  </div> 
                </td>
              </tr>
               <tbody>
      </table>
      <br>
    <div align = "right">
          <button type="submit" class="btn btn-success" >Submit</button>
      </div>
        
      </form>
        </div>
      </div>
  </div>
</div>
</div>
@endsection