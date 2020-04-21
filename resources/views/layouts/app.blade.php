<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PELMAS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="/template/bagasoologo.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
.button:hover
{
    
    background-color: #70B9E8;
}
.button
{
    
  background-color: #269CE9;
  border-color: #269CE9;
}
.printbutton
{
    
    visibility:hidden;
}
div.polaroided 
{
 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   background-color:#FFFFFF;
  
}

</style>  
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{route('nav.index')}}"><img src= "/template/logo_head_w.png" width = "55px">
                    {{ config('app.name', 'PELMAS') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      @can('create', App\pel_applicant::class)
                      {{$nub=""}}
                        @endcan
                       @can('create', App\pel_ame::class)
                       {{$nub=""}}
                        @endcan
                        @can('create', App\pel_ama::class)
                        {{$nub=""}}
                        @endcan
                        @can('create', App\pel_caa::class)
                        {{$nub=""}}
                        @endcan
                        @guest
                        {{$nub=""}}
                        @endguest
                        @if (!isset($nub)) 
                      <!--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Choose a Role<span class="caret"></span>
                        </a> -->
                        
                          <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="applname">Medical certicate Applicant</a></li>
                          <li><a class="dropdown-item" href="amereg">Medical Examiner</a></li>
                          <li><a class="dropdown-item" href="amareg">Medical Assessor</a></li>
                          <li><a class="dropdown-item" href="caareg">CAA Staff</a></li>
                          
                        </ul>
                        @endif
                        @can('create', App\pel_applicant::class)
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Application<span class="caret"></span>
                        </a>
                        
                          <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="applname">New Medical certicate Application</a></li>
                          <li><a class="dropdown-item" href="ameapproved">List of Approved AME</a></li>
                          
                        </ul>
                        @endcan
                         @can('create', App\pel_ame::class)
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>AME<span class="caret"></span>
                        </a>
                        
                          <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="ameaddappl">Add New Applicant</a></li>
                          <li><a class="dropdown-item" href="#">Remove An Applicant</a></li>
                          
                          
                        </ul>
                         @endcan
                    </li>  
                    @can('create', App\pel_ama::class)
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>AMA<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="amereg">AMA Registration</a></li>
                          <li><a class="dropdown-item" href="amelist">List of AME</a></li>
                         
                        </ul>
                    </li>
                     @endcan
                      @can('edit', App\pel_caa::class)
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>CAA<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Personel registration</a></li>
                          <li><a class="dropdown-item" href="#">Activate User Account</a></li>
                          <li><a class="dropdown-item" href="#">Deactivate User Account</a></li>
                          <li><a class="dropdown-item" href="#">Deactivate AME</a></li>
                          <li><a class="dropdown-item" href="#">Deactivate AMA</a></li>
                           <li><a class="dropdown-item" href="#">Reports</a></li>

                        </ul>
                    </li>
                     @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

        






                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

         <ul class="nav navbar-nav navbar-right" style="margin-right: 40px" >
      
    </ul>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
