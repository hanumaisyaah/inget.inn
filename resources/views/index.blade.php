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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#signInModal" id="btn-sign-in">
                            Sign In
                        </button>                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container" style="padding-top:0px">
                <img src="assets/assets/img/logo-ingetin.png" alt="" width=300px height=300px style="margin-bottom:25px"><br>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about" style="color:black">About Us</a>
            </div>
        </header>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Our Journey</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>February 2021</h4>
                                <h4 class="subheading">Our Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Forming group for this project</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2021</h4>
                                <h4 class="subheading">An Idea is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">After validation and research, we decided to making an inget.in, web based application</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>April - May 2021</h4>
                                <h4 class="subheading">Developing</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">The idea that we have designed is developed into a website.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>June 2021</h4>
                                <h4 class="subheading">Idea is Releases</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">The Inget.in website that was developed is then released so that it can be used by many people.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Next Journey!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">People who was develop this website.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/assets/img/user.png" alt="" />
                            <h4>Nabilah Argyanti A.</h4>
                            <p class="text-muted">Coordinator</p>                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/assets/img/user.png" alt="" />
                            <h4>Rimadhani Aula M.</h4>
                            <p class="text-muted">Graphic Designer</p>                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/assets/img/user.png" alt="" />
                            <h4>Meuti Zari Annisa</h4>
                            <p class="text-muted">Programmer</p>                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/assets/img/user.png" alt="" />
                            <h4>Laila Alief Rasuliana</h4>
                            <p class="text-muted">Documentator</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-left">Copyright © Inget.In 2021</div>
                    <div class="col-lg-6 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Login Modals-->
        <!-- Modal Sign In-->
        <div class="signin-modal modal fade" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="card px-3">
                            <form class="form" method="POST" action="{{ route('login') }}" id="sign-in-form">
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
         {{-- <div class="signup-modal modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content"  >
                    <div class="container ">
                    <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="card-header text-center no-border">
                        <h3 class="card-title title-up">Sign Up</h3>
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
        </div> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
