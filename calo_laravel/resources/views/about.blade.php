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
                    		<div class="panel-heading">About Me</div>

                    			<div class="panel-body">
                        
                   					 <p>	Hi everyone my name is April Love Tabar Calo.I was born on April 4, 1998.I am 19 years of young right now.I am the middle daughter of Mr. and Mrs. Hercules Calo. We live in 20-A Cabreros St. Basak Cebu City. I have 2 sisters namely Heralie Therese Calo and Judemil Calo. But my sister Heralie has a baby name Zainna Akili Calo.<br> <br>

                   					 I am studying at University of Cebu-Main Campus. Taking up Bachelor of Science in Information Technology. And I am a 4th yr. student now. <br><br>

                   					        I am just a happy go lucky lady.I dont mind negative problems.I have a big dreams.And I
                   					 want to pursue my dreams. My hobbies are playing online games , watching television,dancing and studying sometimes.Oh lala ! I almost forgot about my favorite food.Well I am fun of eating foods like junk foods, fruits like apple , pears , grapes and orange. I also like eating mango with hipon hehe. So well thats me , Im just a simple lady , and I am confidently beautiful with a HEART.

                   					 		<br><br>- Love <3
                   					        

                   					  </p>

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
