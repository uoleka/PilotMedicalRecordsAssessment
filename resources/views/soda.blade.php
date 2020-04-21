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
                  <div align="center"><strong>Statement of Demonstrated Ability
(SODA)</strong></div>
                  </section>
                </div>
              <div class="card-body">   
    
 
<form method ='POST' Action ='/soda'>
  {{ csrf_field() }}
  
    <table class="table-responsive table-striped">
            <tbody>
              <tr>
              <td colspan="4">
              <p align="right"><label>Note: This form cannot be used in lieu<br>
of a medical certificate; it should be<br>
attached to your medical certificate.</label></p></td>
             
              </tr>
          
    
    <tr id="t3">
                    <td class="t3" colspan ="3"><label><strong>Airman’s name</strong></label>
                      <input type="text" style = "width:100%" placeholder="Name" name="name" value="{{$person->lname}} {{$person->fname}} {{$person->mname}}" 
            class ="input {{$errors->has('name')? 'errcol': 'form-control'}}" readonly>        
               </td>
              
                       </tr> 
              			<tr id="t3">
                       <td colspan="3"  class="t3">
                        <label><strong>Airman’s Address</strong></label>
                        <textarea placeholder="Enter address" style="width: 100%" rows="3" name="paddre" class ="input {{$errors->has('paddre')? 'errcol': 'form-control'}}" readonly>{{$person->paddre}}</textarea>
                          <input type="hidden" name ='appid' value="{{$person->id}}">
                    </td>
                  
                     
              </tr>
              <tr id="t3">
                <td class="t3" colspan="4"><label><strong>Class of medical certificate authorised</strong></label><br>
                 <input type="radio" name="classsame" value="1" {{ $person->formClass =="1" ? 'checked' : "disabled='disabled'"}} readonly> 
                 <label style="margin-right: 20px" class="input {{$errors->has('classsame')? 'errcoll': ''}}">Class 1
                 </label>
                  <input type="radio" name="classsame" value="2" {{ $person->formClass =="2" ? 'checked' :"disabled='disabled'"}} readonly> 
                  <label style="margin-right: 20px" class ="input {{$errors->has('classsame')? 'errcoll': ''}}" >Class 2
                  </label>
                  <input type="radio" name="classsame" value="3" {{ $person->formClass =="3" ? 'checked' : "disabled='disabled'"}} readonly> 
                  <label style="margin-right: 20px" class ="input {{$errors->has('classsame')? 'errcoll': ''}}">Class 3
                  </label>
                </td>
                </tr>
                         
              <tr>
              <td colspan="4"  class="t3">
                        <label><strong>Waiver serial number</strong></label>
                        <textarea style="width: 100%"  name="waiversnum" 
                        class ="input {{$errors->has('waiversnum')? 'errcol': 'form-control'}}">{{old('waiversnum')}}</textarea>
                    </td>
              </tr>
              
              <tr>
              <td colspan="4"  class="t3">
                        <label><strong>Limitations</strong></label>
                        <textarea style="width: 100%" rows="6" name="limitation" 
                        class ="input {{$errors->has('limitation')? 'errcol': 'form-control'}}" >{{old('limitation')}}</textarea>
                    </td>
              </tr>
                            <tr>
              <td colspan="4"  class="t3">
                        <label><strong>Physical defects</strong></label>
                        <textarea style="width: 100%" rows="3" name="defect" class ="input {{$errors->has('defect')? 'errcoll': 'form-control'}}" >{{old('defect')}}</textarea>
                    </td>
              </tr>
               <tr id="t3">
                <td class="t3" colspan="4"><label><strong>Basis of issue</strong></label><br>
                 <input type="radio" name="bissue" value="ops" 
                 {{ old('bissue')=="ops" ? 'checked' : ''}}> 
                 <label style="margin-right: 20px" class ="input {{$errors->has('bissue')? 'errcoll': ''}}" >Operational experience
                 </label>
                  <input type="radio" name="bissue" value="spetxt"
                  {{ old('bissue')=="spetxt" ? 'checked' : ''}}> 
                  <label style="margin-right: 20px"
                  class ="input {{$errors->has('bissue')? 'errcoll': ''}}">Special practical test
                </label>
                  <input type="radio" name="bissue" value="spefltst"
                  {{ old('bissue')=="spefltst" ? 'checked' : ''}}>
                  <label style="margin-right: 5px" class ="input {{$errors->has('bissue')? 'errcoll': ''}}">Special flight test
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
                           <label><strong>Date</strong></label><br>
                    <input type="date" style = "width:100%" name="doissu" 
                    value="{{old('doissu')}}" 
                    class="input {{$errors->has('doissu') ? 'errcol': 'form-contol'}}" >
                    
                                                 
                  </td>
                <td class="t3" colspan ="3"><label><strong>Name and title</strong></label>
                      <input type="text" style = "width:100%"  name="nametitle" value="{{old('nametitle')}}" 
            class ="input {{$errors->has('nametitle')? 'errcol': 'form-control'}}">        
               </td>
                
              </tr>
              <tr>
              <td colspan="4"  class="t3">
                        <label><strong>Signature</strong></label>
                        <textarea style="width: 100%" rows="3" name="signature" class ="input {{$errors->has('signature')? 'errcol': 'form-control'}}">{{old('signature')}}</textarea>
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