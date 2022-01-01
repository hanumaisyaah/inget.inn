<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inget.in</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/assets/img/logo-ingetin.png') }}"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <style>
        h2 {
            display: flex;
            align-items: center;
            font-weight: bold;
            margin-bottom:2rem;
            margin-top:2rem;
        }

        h2::after {
            content: '';
            flex: 1;
            margin-left: 1rem;
            height: 1px;
            background-color: #000;
        }

        .schedule .timeline{
            margin-bottom: 6rem;
        }

        input[type=number]{
            width: 50px;
        } 
</style>
    </head>
    <body>
        <!-- Navigation-->
        <div class="container position-relative" style="min-height: 100%;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#48c072" id="mainNav">
                    <img src="{{ asset('assets/assets/img/logo-ingetin.png') }}" alt="" class="navbar-brand" width="50px" width="50px">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars ml-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ml-auto" style="align-items:center">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('home') }}" id="nav-home">Home</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('assignment.index') }}" id="nav-assignment">Assignment</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('schedule.index') }}" id="nav-schedule">Schedule</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('calendar') }}" id="nav-calendar">Calendar</a></li>
                            <li class="nav-item" >
                                <img src="{{ asset('assets/assets/img/user.png') }}" width=50px height=50px class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="nav-dropdown">
                                    <a class="dropdown-item" href="{{ route('settings')}}">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" id="btn-sign-out"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sign Out
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                            
                                </div>
                            </li>
                        </ul>
                    </div>    
                </nav>
            </div>
            <br><br><br><br><br>
            @yield('content')
            <!-- Footer-->
            <div class="position-sticky">
                <footer class="footer-collapse py-4">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 text-lg-left">Copyright © Inget.In 2021</div>
                            <div class="col-lg-6 text-lg-right">
                                <a class="mr-3" href="#!">Privacy Policy</a>
                                <a href="#!">Terms of Use</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('assets/assets/mail/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('assets/assets/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>