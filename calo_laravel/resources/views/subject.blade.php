<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            
    @yield('content')<div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/about') }}">About Me</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/subject') }}">My Subjects</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/sm') }}">My Social Media Accounts</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/educ') }}">Educational Background</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/aboutphp2') }}">About Php2 Subject</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class = "container">
                <div class="row">
                	<div class="col-md-10 col-md-offset-1">
                		<div class="panel panel-default">
                    		<div class="panel-heading">Daily Schedule</div>

                    			<div class="panel-body">

                                <table class="table table-stripped table-bordered table-hover">
                                <thead>
                                        <tr>
                                            <th>EDP CODE</th>
                                            <th>DESCRIPTIVE <TITLE></TITLE></th>
                                            <th>TIME</th>
                                            <th>DAYS <TITLE></TITLE></th>
                                        </tr>
                                        <tr>
                                            <th>05217</th>
                                            <th>ITELECTPHP2(LAB)</th>
                                            <TH>7:30 P.M - 8:30 P.M</TH>
                                            <TH>MWF</TH>

                                        </tr>

                                        <tr>
                                            <th>05217</th>
                                            <th>ITELECTPHP2(LEC)</th>
                                            <TH>6:30 P.M - 7:30 P.M</TH>
                                            <TH>MW</TH>

                                        </tr>

                                        <tr>
                                            <th>02527</th>
                                            <th>FREEELECTIVE NIHONGO1</th>
                                            <TH>1:30 P.M - 4:30 P.M</TH>
                                            <TH>SATURDAY</TH>

                                        </tr>

                                        <tr>
                                            <th>02576</th>
                                            <th>PRACTICUM 41 (LAB)</th>
                                            <TH>3:30 P.M - 5:30 P.M</TH>
                                            <TH>MWF</TH>

                                        </tr>

                                         <tr>
                                            <th>01438</th>
                                            <th>MGT 1A</th>
                                            <TH>9:00 AM - 10:30 AM</TH>
                                            <TH>TTH</TH>

                                        </tr>


                                </thead>
                                    
                                </table>


                        
                                                                    
                        
                   					 
               </div>
             </div>        
           </div>        
         </div>
       </div>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>