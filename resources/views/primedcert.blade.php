@extends ('layouts.app')

  
@section('content')
  
  <div class="container" style="padding-top: 5px">
      
<table class="table table-bordered table-sm table-responsive tab1 " >
            <thead class="container">
        `    <tr>
              <td ><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label> [BAG Generic]</label></p>
              <p align="right"><label>1. Medical certificate number</label></p></td>
             
              </tr>
          <tr><td colspan ="4"> <p align="center"><label>Medical Certificate</label></p></td></tr> 
  </thead>
  		</table>
		    
     <table class="table table-bordered table-sm table-responsive tab1 appSubSec">
            <tbody class="appSubSec">
    
    <tr id="t3">
                    <td class="t3" colspan ="3"><label>2. Name of holder in full</label>
                      <div class="cll">{{$person->aname}}</div>    
               
               <td  class="t3" >
                           <label>3. Date of birth of holder</label><br>
                    <div class="cll">{{$person->dob}}</div>
                                                  
                  </td>
                       </tr>
              			<tr id="t3">
                       <td colspan="3"  class="t3">
                        <label>4. Address of holder</label>
                         <div class="cll">{{$person->paddre}}</div>
                    </td>
                  
                  <td class="t3">
                     <label>5. Nationality of holder</label><br>
                    <div class="cll">{{$person->nationality}}</div>     
                 
                 </td>     
              </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label>6. Signature of holder</label>
                         <div class="cll">{{$person->signature}}</div>
                    </td>
              </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label>7. Medical certificate Class <i>[enter 1, 2, or 3 as applicable]</i></label>
                          <div class="cll">{{$person->medcertclass}}</div>
                    </td>
              </tr>
              
              <tr>
              <td colspan="2"  class="t3">
                        <label>8. Issuing Authority</label>
                          <div class="cll">{{$person->issauthority}}</div>
                    </td>
                <td colspan="2"  class="t3">
                        <label>9. Validity</label>
                          <div class="cll">{{$person->validity}}</div>
                    </td>
                
              </tr>
              
              <tr id="t3">
                       <td colspan="4"  class="t3">
                        <label>10. Limitations</label>
                         <div class="cll">{{$person->limitation}}</div>
                    </td>
                   </tr>
               <tr>
                 <td  class="t3" colspan ="2">
                           <label>11. Date of issue</label><br>
                     <div class="cll">{{$person->doissu}}</div>
                                                  
                  </td>
              <td   class="t3" colspan ="2" >
                        <label>12. Signature of Issuing Authority</label>
                        <div class="cll">{{$person->signatureauth}}</div>
                    </td>
              </tr>
              
              <tr>
                 
              <td  class="t3">
                        <label>13. Examiner/CAA staff signature</label>
                         <div class="cll">{{$person->signaturcaa}}</div>
                    </td>
                <td class="t3" colspan ="3"><label>14. Examiner/CAA staff required  name</label>
                       <div class="cll">{{$person->caastaffname}}</div>
              </tr>
               <tr>
                 
              <td  colspan = "2" class="t3">
                        <label>15. Examiner’s authorization number</label>
                         <div class="cll">{{$person->authnumb}}</div>
                    </td>
                 <td  class="t3"  >
                           <label>16a. Date of examination</label><br>
                     <div class="cll">{{$person->doexam}}</div>
                                                  
                  </td>
                
             
                <td class="t3" ><label>16b. State of examination</label>
                       <div class="cll">{{$person->country}}</div>
                  </td>
              </tr>
    
    <tbody>
      </table>
    
    <div align = "right">
      <button onclick="myFunction()" id = "myButton" class="button" >Print</button>
      </div>
    
      </div>

      <script>
        function myFunction() {
           document.getElementById('myButton').className = "printbutton";
          window.print();
           document.getElementById('myButton').className = "button";
          
        }
        </script>
    
@endsection