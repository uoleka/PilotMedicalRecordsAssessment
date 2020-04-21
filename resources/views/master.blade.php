<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PEL Medical</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
		<link href="/template/bagasoologo.ico" rel="icon" type="image/x-icon">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
   <!-- <link href="css/clean-blog.min.css" rel="stylesheet"> -->

  </head>
  <style>
  .errcol {
    
        border-color: red;
        
}

.errcolt {
       border-color: red;  
      
      

}
.errcoll
{
    
    color: red;
    border-color: red;
}


</style>  
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div class="navbar-header" style="margin-left: 40px">
      <a  href="/index.php" ><img src= "/template/logo_head_w.png" width = "55px"><span>PEL Medical</span></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right" style="margin-right: 40px" >
      <li class="active"><a href="{{ url('applicant') }}">Applicant</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">AME<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/amereg">AME Registration</a></li>
          <li><a href="/medexam">Medical Report</a></li>
          <li><a href="/soda">Statement of Demonstrated Ability (SODA)</a></li>
          <li><a href="/eyerep">Report of Eye Evaluation</a></li>
           <li><a href="/ophtharep">Ophthalmological Evaluation for Glaucoma</a></li>
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">AMA<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="amereg">AMA Registration</a></li>
         
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CAA<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/amereg">Personel registration</a></li>
          <li><a href="/medcert">Medical Certificate</a></li>
          <li><a href="/demedcert">Notice of Denial of Medical Certificate</a></li>
           
        </ul>
      </li>
      
    </ul>
      
  </div>
</nav>

@yield('content')




<div style ="width: 100%;
   background-color: black;
   color: white;
   text-align: center;">
<span><p>© 2018 Banjul Accord Group Aviation Safety Oversight Organisation
All rights reserved. Reproduction in whole or in part without permission is prohibited.</p></span>
</div>
</body>
</html>
                      
       