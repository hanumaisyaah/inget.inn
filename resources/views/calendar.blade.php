<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inget.in</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/assets/img/logo-ingetin.png') }}"/>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    </head>
    <body>
        <div class="container">            
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#48c072" id="mainNav">
                <img src="{{ asset('assets/assets/img/logo-ingetin.png') }}" alt="" class="navbar-brand" width="50px" width="50px">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto" style="align-items:center">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('assignment.index') }}">Assignment</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('schedule.index') }}">Schedule</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('calendar') }}">Calendar</a></li>
                        <li class="nav-item">
                            <img src="{{ asset('assets/assets/img/user.png') }}" width=50px height=50px class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                        
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('settings')}}">Settings</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>                            
                            </div>
                        </li>
                    </ul>
                </div>    
            </nav>
            <br>            
            <h1 class="text-center"><u>Calendar</u></h1>
            <br>
            <div id="calendar" class="mt-3"></div>
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
        <!-- <script src="{{ asset('assets/js/calendar.js') }}"></script>   -->
        <script>
            $(document).ready(function() {
                // page is now ready, initialize the calendar...
                $('#calendar').fullCalendar({
                    // put your options and callbacks here                    
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events : [
                        @foreach($assignments as $assignment)
                        {
                            title : '{{ $assignment->name }}',
                            start : '{{ $assignment->due_date . " " . $assignment->due_time}}',                            
                            url : '{{ route('assignment.show', $assignment->id) }}',
                            backgroundColor : 'rgb(245, 59, 60)'
                        },
                        @endforeach                        
                        @foreach($schedules as $schedule)
                        {
                            title: '{{ $schedule->course }}',
                            start: '{{ $schedule->start }}',
                            end: '{{ $schedule->end }}', 
                            @foreach ($days as $key => $value)
                                @if($key == $schedule->day)
                                    dow: [ {{ $value }} ],
                                @endif
                            @endforeach
                            url : '{{ route('schedule.index') }}',
                            backgroundColor : 'rgb(59, 185, 245)'
                             // Repeat monday and thursday
                        },   
                        @endforeach                 
                    ]
                })
            });
        </script>     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>        
    </body>
</html>