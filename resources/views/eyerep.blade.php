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
    
        <div class="col-md-10" >
            <div class="card  polaroided">
                <div class="card-header">
                  <section>
                  <img src="/template/bagasoo_logo.png" height="40"/>
                  <div align="center"><strong>Report of Eye Evaluation
(SODA)</strong></div>
                  </section>
                </div>
              <div class="card-body">   
 
<form method ='POST' Action ='/pel_eyerep' >
  {{ csrf_field() }}
 <div class="container" style="padding-top: 5px">
<table class="table-responsive table-striped" >
                <tbody class="container">
               
                <tr>
                  <td>
                    <label><strong>1. Date</strong></label><br>
                    <input type="date" required name="dorep" value="{{old('dorep')}}" style="width:100%"
                    class="input {{$errors->has('dorep') ? 'errcol' :'form-control'}}">
                     <input type="hidden" name ='appid' value="{{$person->id}}">
                  </td>
                     <td>
                        <label><strong>2a. Name</strong></label><br>
                         <input type="text" placeholder="Last Name" required name="lname" value="{{$person->lname}}"
                          class="input {{$errors->has('lname') ? 'errcol' :'form-control'}}" style="width:100%" readonly>
                       </td>
                       <td>
                         <label>First Name</label><br>
                         <input type="text" placeholder="First Name" required name="fname" value="{{$person->fname}}"
                          class="input {{$errors->has('lname') ? 'errcol' :'form-control'}}" style="width:100%" readonly> 
                      </td>
                      <td>
                       <label>Last Name</label><br>
                         <input type="text" placeholder="Middle Name" required name="mname" value="{{$person->mname}}"
                          class="input {{$errors->has('lname') ? 'errcol' :'form-control'}}" style="width:100%" readonly> 
                                               
                     </td>
                  </tr>
                  
                 <tr>
                   
                 
                  <td>
                          <label><strong>2b. Date of birth</strong></label><br>
                   <input type="date" required name="dob" value="{{$person->dob}}" style="width:100%" 
                    class="input {{$errors->has('dob') ? 'errcol' :'form-control'}}" readonly>
                                                                
                 </td>
                 <td>
                    <label><strong>2c. GENDER</strong></label><br>
                    <select required name ="gender" id ="gender" style="width:100%" class ="select {{$errors->has('gender')? 'errcol': 'form-control'}}" disabled="">
                        <option value="">--select Gender--</option>
                        <option value="Male" {{$person->gender == 'Male' ? 'selected' : '' }} >Male</option>
                        <option value="Female" {{$person->gender == 'Female' ? 'selected' : '' }} >Female</option>
                    </select>
                </td>   
                  
                   <td colspan="2">
                      <label><strong>3. Address</strong></label>
                     <textarea placeholder="Enter your current address" style="width: 100%" rows="1" required name="paddre" class ="input {{$errors->has('paddre')? 'errcol': ''}}" readonly="">{{$person->paddre}}</textarea>
                    </td>
                  </tr>
              <tr>
                  
                   
                </tr>

                <tr>
                  <td colspan="4">
                        <label><strong>4. History: Record pertinent history, past and present, concerting general health and visual problems.</strong></label>
                        <textarea placeholder="History" style="width: 100%"  required name="hist" 
                        class ="input {{$errors->has('hist')? 'errcol': ''}}" >{{old('hist')}}
                        </textarea>
                   </td>
                  </tr>
                  <tr>
                  <td colspan="4"  class="t2">
                        <label><strong>5. Heterophoria:</strong></label> Record phorias, in prism diopters, with and without best lens correction in place.
        
                    
                    </td>
                    </tr>
                    <tr>
                     
                    </tr> 
                   <tr>
                          <td rowspan = "6">
                          <strong><label >A. Without correction</label></strong>
                          </td>
                          <td   colspan="3" class="text-center">
                            <strong><label>(1) AT 20 FEET</label></strong>
                          </td>
                   </tr>
                  

                      <tr>
                          
                          <td class="text-center t12">EXO.</td>
                          <td class="text-center t12">ESO.</td>
                          <td class="text-center t12">HYPER.</td>
                      </tr>
                      <tr>
                   

                          <td class="text-center">
                            <div align="center">
                              <input type="number" required name="cor20exo" value="{{old('cor20exo')}}" 
                           class="input {{$errors->has('cor20exo') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                            </div>
                          </td>
                          <td class="text-center">
                            <div align="center">
                              <input type="number"  required name="cor20eso" value="{{old('cor20eso')}}" 
                           class="input {{$errors->has('cor20eso') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                            </div>
                          </td>
                          <td class="text-center">
                            <div align="center">
                              <input type="number" required name="cor20hyper" value="{{old('cor20hyper')}}" 
                           class="input {{$errors->has('cor20hyper') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                            </div>
                          </td>
                      </tr>

                      <tr>
                          <td   colspan="3" class="text-center">
                            <strong><label>(2) AT 18 INCHES</label></strong>
                          </td>
                    </tr>
                   <tr>
                      <td class="text-center">EXO.</td>
                      <td class="text-center">ESO.</td>
                      <td class="text-center">HYPER.</td>
                     
                  </tr>
                  <tr>
                  <td class="text-center">
                      <div align="center">
                        <input type="number"   required name="cor18exo" value="{{old('cor20exo')}}" 
                     class="input {{$errors->has('cor20exo') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                      </div>
                    </td>
                    <td class="text-center">
                      <div align="center">
                        <input type="number"  required name="cor18eso" value="{{old('cor20eso')}}" 
                     class="input {{$errors->has('cor20eso') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                      </div>
                    </td>
                    <td class="text-center">
                      <div align="center">
                        <input type="number"  required name="cor18hyper" value="{{old('cor20hyper')}}" 
                     class="input {{$errors->has('cor20hyper') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                      </div>
                    </td>
                    
                   </tr>
                   <tr>
                      
                   
                   </tr>
                   <tr>
                      <td rowspan="6"><strong><label>B. With correction (If any)</label></strong>
                      <td  colspan = "3"  class="text-center"><strong><label>(1) AT 20 FEET</label></td></strong>
                   </tr>

                   <tr>
                      <td class="text-center">EXO.</td>
                      <td class="text-center">ESO.</td>
                      <td class="text-center">HYPER.</td>
                     
                  </tr>
                  <tr>
                      <td class="text-center">
                          <div align="center">
                            <input type="number"   required name="uncor20exo" value="{{old('uncor20exo')}}" 
                         class="input {{$errors->has('uncor20exo') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                          </div>
                        </td>
                        <td class="text-center">
                          <div align="center">
                            <input type="number" cl required name="uncor20eso" value="{{old('uncor20eso')}}" 
                         class="input {{$errors->has('uncor20eso') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                          </div>
                        </td>
                        <td class="text-center">
                          <div align="center">
                            <input type="number"  required name="uncor20hyper" value="{{old('uncor20hyper')}}" 
                         class="input {{$errors->has('uncor20hyper') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                          </div>
                        </td>
                  </tr>
                  <tr>
                      <td   colspan="3" class="text-center">
                        <strong><label>(2) AT 18 INCHES</label></strong>
                      </td>
                </tr>
               <tr>
                  <td class="text-center">EXO.</td>
                  <td class="text-center">ESO.</td>
                  <td class="text-center">HYPER.</td>
                 
              </tr>
              <tr>
                  <td class="text-center">
                      <div align="center">
                        <input type="number"  required name="uncor18exo" value="{{old('uncor18exo')}}" 
                     class="input {{$errors->has('uncor18exo') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                      </div>
                    </td>
                    <td class="text-center">
                      <div align="center">
                        <input type="number"  required name="uncor18eso" value="{{old('uncor18eso')}}" 
                     class="input {{$errors->has('uncor18eso') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                      </div>
                    </td>
                    <td class="text-center">
                      <div align="center">
                        <input type="number"  required name="uncor18hyper" value="{{old('uncor18hyper')}}" 
                     class="input {{$errors->has('uncor18hyper') ? 'errcolt col-xs-10' :'col-xs-10'}}" />
                      </div>
                    </td>
              </tr>
              <tr>
                  <td colspan="4">
                        <strong><label>6. Fusion:</label></strong> Estimate fusion ability and state methods used in examination (red lens, etc.).
				                  <textarea style="width: 100%"  required name="fusion"  class ="textarea {{$errors->has('fusion')? 'errcol': ''}}" >{{old('fusion')}}
                          </textarea>
                    
                  </td>
                  </tr>
                  <tr>
                  <td colspan="4">
                      <strong><label>7. Pupils:
                        </label></strong> Statement of relative size and reaction of the pupils to accommodation and light, direct, and con sensual.
				                <textarea style="width: 100%"  required name="pupils" class ="textarea {{$errors->has('pupils')? 'errcol': ''}}" >{{old('pupils')}}
                        </textarea>
                    
                  </td>
                  </tr>
                  <tr>
                    <td colspan="4">
                        <strong><label>8. Visual Fields:</label></strong> Record results and type of test performed (attach field charts, if used).
				                  <textarea style="width: 100%"  required name="fields" class ="textarea {{$errors->has('fields')? 'errcol': ''}}" >{{old('fields')}}
                          </textarea>
                    
                    </td>
                  </tr>
                  <tr>
                    <td colspan="4">
                        <strong><label>9. Ophthalmoscopic:
                        </label></strong> Describe any variations from normal in either eye on funduscopic examination.
				                  <textarea style="width: 100%"  required name="ophthalmoscopic" class ="textarea {{$errors->has('ophthalmoscopic')? 'errcol': ''}}" >{{old('fusion')}}
                          </textarea>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="4">
                        <strong><label>10. Slit Lamp:
                        </label></strong> Record results of slit lamp examination of each eye where indicated.
				                  <textarea style="width: 100%"  required name="slit" class ="textarea {{$errors->has('slit')? 'errcol': ''}}" >{{old('fusion')}}
                          </textarea>
                    </td>
                  </tr>
                  <tr>
                      <td colspan="4">
                            <strong><label>11. Intraocular Pressure:
                            </label></strong> Record results and methods used.
                      </td>
                  </tr>
                  <tr>
                      <td colspan= "2">
                        <label>A. Method Used</label>
                        <input type="text" style="width: 100%"  required name="mused" value="{{old('mused')}}"
                        class ="input {{$errors->has('mused')? 'errcol': ''}}">
                         
                       </td>
                       <td>
                          <label>O.D.</label>
                       <input type="text" style="width: 100%"  required name="od" value="{{old('od')}}"
                        class ="input {{$errors->has('od')? 'errcol': ''}}">
                       </td>
                      <td>
                          <label>O.S.</label>
                       <input type="text" style="width: 100%"  required name="os" value="{{old('os')}}"
                        class ="input {{$errors->has('os')? 'errcol': ''}}">
                       </td>
                      </tr>
                      
                      <tr>
                        <td colspan = "4">
                          <strong><label>12. Visual acuity (Use Snellen Equivalents)</label></strong>
                          
                         </td>
                      </tr>
                      <tr>
                        <td colspan = "4" class = "text-center">
                          <strong><label >A. Distant vision</label></strong>
                        </td>  
                      </tr>
                      <tr>
                          
                      </tr>
                      <tr>
                          <td class="text-center">
                              <label >Test Method</label>
                          </td>
                          <td  colspan = "3"  class="text-center t12">
                              <label>Uncorrected</label>
                            </td>
                          
                      </tr>
                      <tr>
                          <td rowspan="2">
                              
                                  <textarea style="width: 100%" required name="dvtsmethd" 
                                    class ="textarea {{$errors->has('dvtsmethd')? 'errcol': ''}}">
                                    {{old('dvtsmethd')}}
                                  </textarea>
                              
                          </td>
                         
                          <td class="text-center"><label>O.D.</label></td>
                          <td class="text-center"><label>O.S.</label></td>
                          <td class="text-center"><label>O.U.</label></td>
                      </tr>
                      <tr>
                          
                          <td class="text-center">
                              <div align="center">
                                <input type="number" required name ="dvexo" value="{{old('dvexo')}}"
                                  class ="input {{$errors->has('dvexo')? 'errcolt col-xs-10': 'col-xs-10'}}" />
                                </div>
                            </td>
                            <td class="text-center"><div align="center"><input type="number" required name ="dveso" value="{{old('dveso')}}"
                              class ="input {{$errors->has('dveso')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                            <td class="text-center">
                              <div align="center">
                                <input type="number" required name ="dvhyper" value="{{old('dvhyper')}}"
                                class ="input {{$errors->has('dvhyper')? 'errcolt col-xs-10': 'col-xs-10'}}" />
                              </div>
                            </td>
                      </tr>
                     
                      <tr>
                          <td class="text-center">
                              Lenses Used
                          </td>
                          <td  colspan = "3"  class="text-center">
                              <label> Corrected Visual Acuity</label>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center t12" rowspan ="3">
                              <label style= "margin-top : 40px">Contact lenses</label>
                          </td>
                      </tr>

                      <tr id="t11" >
                           <td    class="text-center t12">
                            <label>O.D.</label>
                          </td>
                          <td    class="text-center t12">
                            <label>O.S.</label>
                          </td>
                          <td   class="text-center t12">
                            <label>O.U.</label>
                          </td>
                      </tr>
                      <td class="text-center t12">
                          <div align="center">
                            <input type="number" required name ="dvcood" value="{{old('dvcood')}}"
                            class ="input {{$errors->has('dvcood')? 'errcolt col-xs-10': 'col-xs-10'}}" />
                          </div>
                        </td>
                        <td class="text-center t12">
                          <div align="center">
                            <input type="number" required name ="dvcoos" value="{{old('dvcoos')}}"
                              class ="input {{$errors->has('dvcoos')? 'errcolt col-xs-10': 'col-xs-10'}}" />
                            </div>
                        </td>
                        <td class="text-center t12">
                          <div align="center">
                            <input type="number" required name ="dvcoov" value="{{old('dvcoov')}}"
                            class ="input {{$errors->has('dvcoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                        <tr>
                            <td class="text-center">
                                <label>Glasses</label>
                            </td>
                            <td class="text-center t12">
                                <div align="center">
                                  <input type="number" required name ="dvglod" value="{{old('dvglod')}}"
                                    class ="input {{$errors->has('dvglod')? 'errcolt col-xs-10': 'col-xs-10'}}" />
                                </div>
                            </td>
                                <td class="text-center t12">
                                  <div align="center">
                                    <input type="number" required name ="dvglos" value="{{old('dvglos')}}"
                                    class ="input {{$errors->has('dvglos')? 'errcolt col-xs-10': 'col-xs-10'}}" />
                                  </div>
                                </td>
                                <td class="text-center t12">
                                  <div align="center">
                                    <input type="number" required name ="dvglov" value="{{old('dvglov')}}"
                                    class ="input {{$errors->has('dvglov')? 'errcolt col-xs-10': 'col-xs-10'}}" />
                                  </div>
                                </td>
                        </tr>

                        <tr>
                            <td colspan = "4" class = "text-center">
                              <strong><label >B. Near vision (16
                                  Inches)</label></strong>
                            </td>  
                          </tr>
                          <tr>
                              
                          </tr>
                          <tr>
                              <td class="text-center">
                                  <label >Test Method</label>
                              </td>
                              <td  colspan = "3"  class="text-center t12">
                                  <label>Uncorrected</label>
                                </td>
                              
                          </tr>
                          <tr>
                              <td rowspan="2">
                                  
                                      <textarea style="width: 100%" required name="nvtsmethd" 
                                        class ="textarea {{$errors->has('nvtsmethd')? 'errcol': ''}}">
                                        {{old('nvtsmethd')}}
                                      </textarea>
                                  
                              </td>
                             
                              <td class="text-center"><label>O.D.</label></td>
                              <td class="text-center"><label>O.S.</label></td>
                              <td class="text-center"><label>O.U.</label></td>
                          </tr>
                          <tr>
                              
                              <td class="text-center t12"><div align="center"><input type="number" required name ="nvexo" value="{{old('nvexo')}}"
                                class ="input {{$errors->has('nvexo')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                    <td class="text-center t12"><div align="center"><input type="number" required name ="nveso" value="{{old('nveso')}}"
                                class ="input {{$errors->has('nvtsmethd')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                    <td class="text-center t12"><div align="center"><input type="number" required name ="nvhyper" value="{{old('nvhyper')}}"
                                class ="input {{$errors->has('nvhyper')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                          </tr>
                         
                          <tr>
                              <td class="text-center">
                                  Lenses Used
                              </td>
                              <td  colspan = "3"  class="text-center">
                                  <label> Corrected Visual Acuity</label>
                              </td>
                          </tr>
                          <tr>
                              <td class="text-center t12" rowspan ="3">
                                  <label style= "margin-top : 40px">Contact lenses</label>
                              </td>
                          </tr>
    
                          <tr id="t11" >
                               <td    class="text-center t12">
                                <label>O.D.</label>
                              </td>
                              <td    class="text-center t12">
                                <label>O.S.</label>
                              </td>
                              <td   class="text-center t12">
                                <label>O.U.</label>
                              </td>
                          </tr>
                          <td class="text-center t12"><div align="center"><input type="number" required name ="nvcood" value="{{old('nvcood')}}"
                            class ="input {{$errors->has('nvcood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                            <td class="text-center t12"><div align="center"><input type="number" required name ="nvcoos" value="{{old('nvcoos')}}"
                            class ="input {{$errors->has('nvcoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                            <td class="text-center t12"><div align="center"><input type="number" required name ="nvcoov" value="{{old('nvcoov')}}"
                            class ="input {{$errors->has('nvcoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                            <tr>
                                <td class="text-center">
                                    <label>Glasses</label>
                                </td>
                                <td class="text-center t12"><div align="center"><input type="number" required name ="nvglod" value="{{old('nvglod')}}"
                                  class ="input {{$errors->has('nvglod')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                  <td class="text-center t12"><div align="center"><input type="number" required name ="nvglos" value="{{old('nvglos')}}"
                                  class ="input {{$errors->has('nvglos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                  <td class="text-center t12"><div align="center"><input type="number" required name ="nvglov" value="{{old('nvglov')}}"
                                  class ="input {{$errors->has('nvglov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                            </tr>

                             <tr>
                                <td colspan = "4" class = "text-center">
                                  <strong><label >C. Intermediate vision</label></strong>
                                </td>  
                              </tr>
                              <tr>
                                  
                              </tr>
                              <tr>
                                  <td class="text-center">
                                      <label >Test Method</label>
                                  </td>
                                  <td  colspan = "3"  class="text-center t12">
                                      <label>Uncorrected</label>
                                    </td>
                                  
                              </tr>
                              <tr>
                                  <td rowspan="2">
                                      
                                          <textarea style="width: 100%" required name="ivtsmethd" 
                                            class ="textarea {{$errors->has('ivtsmethd')? 'errcol': ''}}">
                                            {{old('ivtsmethd')}}
                                          </textarea>
                                      
                                  </td>
                                 
                                  <td class="text-center"><label>O.D.</label></td>
                                  <td class="text-center"><label>O.S.</label></td>
                                  <td class="text-center"><label>O.U.</label></td>
                              </tr>
                              <tr>
                                  
                                  <td class="text-center t12"><div align="center"><input type="number" required name ="ivexo" value="{{old('ivexo')}}"
                                    class ="input {{$errors->has('ivexo')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                  <td class="text-center t12"><div align="center"><input type="number" required name ="iveso" value="{{old('iveso')}}"
                              class ="input {{$errors->has('ivtsmethd')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                  <td class="text-center t12"><div align="center"><input type="number" required name ="ivhyper" value="{{old('ivhyper')}}"
                              class ="input {{$errors->has('ivhyper')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                              </tr>
                             
                              <tr>
                                  <td class="text-center">
                                      Lenses Used
                                  </td>
                                  <td  colspan = "3"  class="text-center">
                                      <label> Corrected Visual Acuity</label>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="text-center t12" rowspan ="3">
                                      <label style= "margin-top : 40px">Contact lenses</label>
                                  </td>
                              </tr>
        
                              <tr >
                                   <td    class="text-center t12">
                                    <label>O.D.</label>
                                  </td>
                                  <td    class="text-center t12">
                                    <label>O.S.</label>
                                  </td>
                                  <td   class="text-center t12">
                                    <label>O.U.</label>
                                  </td>
                              </tr>
                              <tr>
                              <td class="text-center t12"><div align="center"><input type="number" required name ="ivcood" value="{{old('invcood')}}"
                                class ="input {{$errors->has('ivcood')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                <td class="text-center t12"><div align="center"><input type="number" required name ="ivcoos" value="{{old('ivcoos')}}"
                                class ="input {{$errors->has('ivcoos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                <td class="text-center t12"><div align="center"><input type="number" required name ="ivcoov" value="{{old('ivcoov')}}"
                                class ="input {{$errors->has('ivcoov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                              </tr>
                                <tr>
                                    <td class="text-center">
                                        <label>Glasses</label>
                                    </td>
                                    <td class="text-center t12"><div align="center"><input type="number" required name ="ivglod" value="{{old('ivglod')}}"
                                      class ="input {{$errors->has('ivglod')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                      <td class="text-center t12"><div align="center"><input type="number" required name ="ivglos" value="{{old('ivglos')}}"
                                      class ="input {{$errors->has('ivglos')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                      <td class="text-center t12"><div align="center"><input type="number" required name ="ivglov" value="{{old('ivglov')}}"
                                      class ="input {{$errors->has('ivglov')? 'errcolt col-xs-10': 'col-xs-10'}}" /></div></td>
                                </tr>
                                <tr>
                                    <td colspan="4"  class="t2">
                                          <strong><label>13. Present prescription (sphere, cylinder, axis)</label></strong>
                            
                                      </td>
                                    </tr>
                                   <tr>
                                    <td colspan = "2" class="text-center">
                                      <label>A. Contact Lenses</label>
                                      
                                     </td>
                                     <td colspan = "2" class="text-center">
                                        <label>B. Glasses.</label>
                                     </td>
                                   
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                                  <label>O.D.</label>
                                               <input type="text" style="width: 100%"  required name="preaod" value="{{old('preaod')}}" class="input {{$errors->has('preaod')? 'errcol': ''}}">
                                                 
                                          </td>
                                        <td class="text-center">
                                                  <label>O.S.</label>
                                               <input type="text" style="width: 100%"  required name="preaos" value="{{old('preaos')}}" class="input {{$errors->has('preaos')? 'errcol': ''}}">
                                        </td>
                                                <td class="text-center">
                                                  <label>O.D.</label>
                                               <input type="text" style="width: 100%"  required name="prebod" value="{{old('prebod')}}" class="input {{$errors->has('prebod')? 'errcol': ''}}">
                                               </td>
                                              <td class="text-center">
                                                  <label>O.S.</label>
                                               <input type="text" style="width: 100%"  required name="prebos" value="{{old('prebos')}}" class="input {{$errors->has('prebos')? 'errcol': ''}}">
                                               </td>
                                      </tr>
                                      <tr>
                                          <td colspan="10"  class="t2">
                                              If contact lenses are not used, omit items 14-19.
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="4"  class="t2">
                                                <label>14. Type of lenses (corneal, scleral, lenticular, single-cut, bifocal, toric, non-rotating, special shape, etc.)</label>
                                                <textarea style="width: 100%"  required name="typelense" class ="textarea {{$errors->has('typelense')? 'errcol': ''}}" >{{old('typelense')}}</textarea>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="4"  class="t2">
                                          <label>15. Examination frequency (indicate frequency of periodic follow-up examination)</label>
                                          <textarea style="width: 100%" rows = "3"  required name="examfreq" class ="textarea {{$errors->has('examfreq')? 'errcol': ''}}" >{{old('examfreq')}}</textarea>
                                         </td>
                                      </tr>
                                          
                                      <tr>
                                          <td colspan="4"  class="t2">
                                            <label>16. Symptoms or abnormal conditions: Note any lacrimation, photophobia, loss of lens, or evidence of corneal injury or edema, etc., requiring
                                                  treatment and/or interruption of contact lens wearing. State results of slit lamp or biomicroscopic examination of cornea.</label>
                                              <textarea style="width: 100%" rows = "4"  required name="symptoms" class ="textarea {{$errors->has('fusion')? 'errcol': ''}}" >{{old('fusion')}}</textarea>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td colspan="4"  class="t2">
                                            <label>17. Professional evaluation (indicate your professional opinion and any other comment or additional observations)</label>
                                            <textarea style="width: 100%" rows = "5"  required name="propinion" class ="textarea {{$errors->has('propinion')? 'errcol': ''}}" >{{old('propinion')}}</textarea>
                                          </td>
                                      </tr>




                                      <tr>
                                          <td colspan="2"  class="t2">
                                            <label>18a. Typed required name and address of eye specialist</label>
                                            <textarea style="width: 100%" rows = "3"  required name="speaddre" class ="textarea {{$errors->has('speaddre')? 'errcol': ''}}" >{{old('speaddre')}}</textarea>
                                          </td>
                                            
                                          <td colspan="2"  class="t2">
                                            <label >18b. Signature of eye specialist</label>
                                            <textarea style="width: 100%" rows = "3"  required name="spesign" class ="textarea {{$errors->has('spesign')? 'errcol': ''}}" >{{old('spesign')}}</textarea>
                                          </td>
                                            
                                      </tr>
	</tbody>
			
        </table>
  </form>
          <div align = "right">
            <button type="submit">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 @endsection