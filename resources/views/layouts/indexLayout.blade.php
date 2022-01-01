<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Inget.In</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/assets/img/logo-ingetin.png') }}" />
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <div class="container">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#48c072" id="mainNav">
                <img src="{{ asset('assets/assets/img/logo-ingetin.png') }}" alt="" class="navbar-brand" width="50px" width="50px">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto" style="align-items:center">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#signInModal">
                                Sign In
                            </button>    
                    </ul>
                </div>    
            </nav>
        </div>
        <br><br><br><br><br>
        @yield('content')
        <!-- Login Modals-->
        <!-- Modal Sign In-->
        <div class="signin-modal modal fade" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="card px-3">
                            <form class="form" method="POST" action="{{ route('login') }}">
                                <div class="card-header text-center no-border">
                                    <h3 class="card-title title-up">Sign In</h3>                            
                                </div>
                                <div class="card-body">
                                @csrf
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-circle"></i>
                                            </span>
                                        </div>
                                        <input id="username" type="username" placeholder="Username..." class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>                            
                            
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock text_caps-small"></i>
                                            </span>
                                        </div>
                                        <input id="password" type="password" placeholder="Password..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <br>
                            
                                    <div class="row mx-2 my-3">
                                        <div class="checkbox col-md-6">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('email_confirmation') }}">
                                                    Forgot Password
                                                </a>
                                            @endif                            
                                        </div>
                                    </div>
                                    <hr>
                            
                                    <div class="text-center">
                                        <p>Dont Have Account? <a href="#signUpModal" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal"> Sign Up</a> Instead</p>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary btn-round btn-lg">
                                        Sign In
                                    </button>                            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal Sign Up-->
         <div class="signup-modal modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content"  >
                    <div class="container ">
                    <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="card-header text-center no-border">
                        <h3 class="card-title title-up">Sign Up</h3>
                        <div class="social-line">
                            <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                            <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                            <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                            <i class="fab fa-google-plus"></i>
                            </a>
                        </div>
                        </div>
                        <div class="card-body">
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user-circle"></i>
                            </span>
                            </div>                            
                            <input id="name" type="text" placeholder="Name..." class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user-circle"></i>
                            </span>
                            </div>
                            <input id="username" type="text" placeholder="Username..." class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                    
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            </div>                                            
                            <input id="email" type="email" placeholder="Email..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                                            
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock text_caps-small"></i>
                            </span>
                            </div>
                            <input id="password" type="password" placeholder="Password..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock text_caps-small"></i>
                            </span>
                            </div>
                            <input id="password-confirm" type="password" placeholder="Confirm Password..." class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <br>
                        <hr>
                        <div class="text-center">
                            <p>Already Have An Account? <a href="#signInModal" data-toggle="modal" data-target="#signInModal" data-dismiss="modal"> Sign In</a> Here</p>
                        </div>
                        </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg">
                                {{ __('Get Started') }}
                            </button>                        
                        </div>
                    </form>                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>