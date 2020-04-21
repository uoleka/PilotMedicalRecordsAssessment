@extends ('layouts.app')

  
@section('content')
  <div class="container" style="padding-top: 5px">
      
<table class="table table-bordered table-sm table-responsive tab1 " >
            <thead class="container">
            <tr>
              <td ><img src="https://www.bagasoo.org/2017/templates/asyst_bagasoo/comp/bagasoo_logo.png"><p align="left"><label> [BAG Generic]</label></p>
              <p align="right"><label>Note: This form cannot be used in lieu<br>
of a medical certificate; it should be<br>
attached to your medical certificate.</label></p></td>
           
              </tr>
          <tr><td colspan ="4"> <p align="center"><label>Statement of Demonstrated Ability
(SODA)</label></p></td></tr> 
  </thead>
  		</table>
		
 
    <table class="table table-bordered table-sm table-responsive tab1 appSubSec">
            <tbody class="appSubSec">
    
    <tr id="t3">
                    <td class="t3" colspan ="3"><label>Airman’s name</label>
                      <div class="cll">{{$person->name}}</div>
               </td>
              
                       </tr> 
              			<tr id="t3">
                       <td colspan="3"  class="t3">
                        <label>Airman’s Address</label>
                        <div class="cll">{{$person->paddre}}</div>
                      </td>
                  
                     
              </tr>
              <tr id="t3">
                <td class="t3" colspan="4"><label>Class of medical certificate authorised</label><br><br>
                 <input type="radio" name="classsame" value="1" {{ $person->classsame =="1" ? 'checked' : "disabled='disabled'"}} readonly> 
                 <label style="margin-right: 20px" >Class 1
                 </label>
                  <input type="radio" name="classsame" value="2" {{ $person->classsame =="2" ? 'checked' :"disabled='disabled'"}} readonly> 
                  <label style="margin-right: 20px"  >Class 2
                  </label>
                  <input type="radio" name="classsame" value="3" {{ $person->classsame =="3" ? 'checked' : "disabled='disabled'"}} readonly> 
                  <label style="margin-right: 20px" >Class 3
                  </label>
                </td>
                </tr>
                         
              <tr>
              <td colspan="4"  class="t3">
                        <label>Waiver serial number</label>
                        <div class="cll">{{$person->waiversnum}}</div>
                    </td>
              </tr>
              
              <tr>
              <td colspan="4"  class="t3">
                        <label>Limitations</label>
                        <div class="cll">{{$person->limitation}}</div>
                    </td>
              </tr>
                            <tr>
              <td colspan="4"  class="t3">
                        <label>Physical defects</label>
                        <div class="cll">{{$person->defect}}</div>
                    </td>
              </tr>
               <tr id="t3">
                <td class="t3" colspan="4"><label>Basis of issue</label><br><br>
                 <input type="radio" name="bissue" value="ops"  
                 {{ $person->bissue=="ops" ? 'checked' : "disabled='disabled'"}} > 
                 <label style="margin-right: 20px" >Operational experience
                 </label>
                  <input type="radio" name="bissue" value="spetxt" 
                  {{ $person->bissue=="spetxt" ? 'checked' : "disabled='disabled'"}}> 
                  <label style="margin-right: 20px">Special practical test</label>
                  <input type="radio" name="bissue" value="spefltst"  
                  {{ $person->bissue=="spefltst" ? 'checked' : "disabled='disabled'"}}> 
                  <label style="margin-right: 20px">Special flight test
                  </label>
                </td>
                </tr>
              <tr>
              <th colspan="4"  class="t3">
                        <label>For the Issuing Authority</label>
                        
                    </th>
              </tr>
              <tr>
              
                 <td  class="t3" >
                           <label>Date</label><br>
                    <div class="cll">{{$person->doissu}}</div>
                    
                                                 
                  </td>
                <td class="t3" colspan ="3"><label>Name and title</label>
                      <div class="cll">{{$person->nametitle}}</div>       
               </td>
                
              </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label>Signature</label>
                        <div class="cll">{{$person->signature}}</div>
                    </td>
              </tr>
              
              
              </tbody>
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