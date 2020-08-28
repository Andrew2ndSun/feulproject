<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>P53</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('fuel/home.css') }}" rel="stylesheet">

    
   
   
    <link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="~/css/custom.css" />
    <link rel="stylesheet" href="~/css/site.css" />
    <style>
        .logout-form{
            max-width: 80px;
            padding: 0px ;
            margin :0px;
        }

        .footer {
            text-align: center;
            line-height: 10px;
        }


        .space{
            height:100px;
        }

        body {
            background-image: url(fuelimage/img/backgr.jpg);
        }

        .bg-dark {
             background-color: #0e447b!important
         }
         .text-muted {
             color: #6cb2eb!important;
            }
         #footer {
            margin-top: 100px;
            position: absolute;
             bottom: 0;
             width: 100%;           /* Footer height */
            }

            body{

                background-color: #185284;
            }
    </style>




</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm p-0 m-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logout-form p-0 m-0" src="fuelimage/img/logo.png" alt="P53">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   <ul class="nav navbar-nav">
                <li><a href="about.html">About</a></li>
                    &nbsp;&nbsp;&nbsp;


                <li><a href="contact.html">Contact</a></li>
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



                                    <a class="dropdown-item" href="{{ URL::route('user.editus', ['id' => Auth::user()->id])}}">
                                        {{ __('Edit info') }}
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

        <main class="py-0">
            @yield('content')
        </main>

        <footer id="footer" class="border-top footer text-muted bg-dark">
        <div class="row">
            <div class="col-md-4 ">
                <br>
                <h3>About<span> P53</span></h3>
                <img class="logout-form" src="fuelimage/img/logo.png">
                <p class="footer-links">
                    <a href="#">Home</a>
                    |
                    <a href="#">Blog</a>
                    |
                    <a href="#">About</a>
                    |
                    <a href="#">Contact</a>
                </p>


            </div>
            <div class="col-md-4 ">

                <br>
                <p><i class="fa fa-map-marker"></i> 4800 Calhoun Rd,</p>
                <p>Bldg. No. A - 1, Sector - 1</p>
                <p>Houston, Texas, USA  - 77004 </p>




                <p> <i class="fa fa-phone"></i>+1 832 555 9999</p>



                <p> <i class="fa fa-envelope"></i><a href="mailto:support@eduonix.com">support@P53.com</a></p>



            </div>
            <div class="col-md-4 ">
                <br>
                <br>
                <div class="container-fluid">
                    <span><b>About the company</b></span>
                    <br>
                    <br><br>
                    <p>We offer the best price of Gas</p><p> and quick shipping to our custommer,</p><p> Design-Science-class.</p>
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    </div>



     <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js" asp-append-version="true"></script>
</body>
</html>
