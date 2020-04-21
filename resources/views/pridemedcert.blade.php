@extends ('layouts.app')

  
@section('content')
  <div class="container" style="padding-top: 5px">
      
<table class="table table-bordered table-sm table-responsive tab1 " >
            <thead class="container">
        `    <tr>
              <td ><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label> [BAG Generic]</label></p>
              <p align="right"><label>Note: Present this form upon application for reexamination</label></p></td>
             
              </tr>
          <tr><td colspan ="4"> <p align="center"><label>Notice of Denial of Medical Certificate</label></p></td></tr> 
  </thead>
  		</table>
		
    
 

<form method ='POST' Action ='/demedcert' >
  {{ csrf_field() }}
    
    <table class="table table-bordered table-sm table-responsive tab1 appSubSec">
            <tbody class="appSubSec">
    
    <tr id="t3">
                    <td class="t3" colspan ="3"><label>Name of Applicant</label>
                   <div class="cll"> {{$person->aname}}</div>
                     
               
               <td  class="t3" >
                           <label>Date of birth </label><br>
                    <div class="cll">{{$person->dob}}</div>
                                                  
                  </td>
                       </tr>
              			<tr id="t3">
                       <td colspan="3"  class="t3">
                        <label>Address of Applicant</label>
                         <div class="cll">{{$person->paddre}}</div>
                    </td>
                  
                  <td class="t3">
                     <label>Date of medical examination</label><br>
                      <div class="cll">{{$person->doexam}}</div>
                                                                      
                 
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
                 
                  </span>

                          <span style="margin: 20px">
                  <label for="formClass" class="input {{$errors->has('formClass')? 'errcoll': ''}}">Class 3</label>
                            
                          <input type="radio" required  name="formClass" value="3"
                  {{ $person->formClass =="3" ? 'checked' : "disabled='disabled'"}} readonly}}
                 
                  </span>
                </td>
                </tr>
                         
            <tr>
              <td colspan="4"  class="t3">
                        <label>MCAR Part 2 paragraph number</label>
                          <div class="cll">{{$person->mcar}}</div>
                    </td>
              </tr>
              
              <tr>
                <td colspan="4"  class="t3">
                    <label>Disqualifying conditions</label>
                    <div class="cll">{{$person->disqucond}}</div>
                </td>
              </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label>Assessment of your application form and medical examination of the above date reveals that you do not meet the MCAR medical requirements for a medical certificate (class as above) because of the condition(s) stated. Accordingly, your application for a medical certificate (class as above) is hereby denied. I have personally tested this applicant and deem his or her medical condition unsatisfactory for issuance of the medical
certificate sought.</label>
                       
                    </td>
              </tr>
              
              
              <tr>
                
                
                <td colspan ="3">
                   <label>Signature of CAA medical assessor</label>
                    <div class="cll">{{$person->signature}}</div>
                </td>
                
               <td>
                  <label>Date </label>
                    <div class="cll">{{$person->doapplication}}</div>
                     
                </td>
                
                </tr>
              
              
              
        </tbody>
    </table>
    <div align = "right">
      <button onclick="myFunction()" id = "myButton" class="button" >Print</button>
      </div>
    
     </div>
</form>

      <script>
        function myFunction() {
           document.getElementById('myButton').className = "printbutton";
          window.print();
           document.getElementById('myButton').className = "button";
          
        }
        </script>
@endsection