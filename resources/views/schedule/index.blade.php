@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger font-weight-bolder" href="{{ route('schedule.create') }}" style="color:black; font-family:Montserrat;" id="btn-create-schedule">Create</a>
    </div>
    <h2>Schedule</h2>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mb-5" style="height:50px">
                <p>{{ $message }}</p>
            </div>
        @endif  
        <div class="row" style="margin-bottom:3rem">
            <!-- Monday -->
            <div class="col-sm-4 container border-bottom border-dark">
                <h3 class="text-center">Monday</h3>
                @foreach($schedules as $schedule)  
                    @if($schedule->day == 'Monday')
                        @include('layouts.scheduleCard')
                    @endif
                @endforeach
            </div>
            <!-- end of Monday -->
            <!-- Tuesday -->
            <div class="col-sm-4 container border-bottom border-dark">
                <h3 class="text-center">Tuesday</h3>
                @foreach($schedules as $schedule)  
                    @if($schedule->day == 'Tuesday')
                        @include('layouts.scheduleCard')
                    @endif
                @endforeach
            </div>
            <!-- end of Tuesday -->
            <!-- Wednesday -->
            <div class="col-sm-4 container border-bottom border-dark">
                <h3 class="text-center">Wednesday</h3>
                @foreach($schedules as $schedule)  
                    @if($schedule->day == 'Wednesday')
                        @include('layouts.scheduleCard')
                    @endif
                @endforeach
            </div>
            <!-- end of Wednesday -->
            <!-- Thursday -->
            <div class="col-sm-4 container border-bottom border-dark">
                <h3 class="text-center">Thursday</h3>
                @foreach($schedules as $schedule)  
                    @if($schedule->day == 'Thursday')
                        @include('layouts.scheduleCard')
                    @endif
                @endforeach
            </div>
            <!-- end of Thursday -->
            <!-- Friday -->
            <div class="col-sm-4 container border-bottom border-dark">
                <h3 class="text-center">Friday</h3>
                @foreach($schedules as $schedule)  
                    @if($schedule->day == 'Friday')
                        @include('layouts.scheduleCard')
                    @endif
                @endforeach
            </div>
            <!-- end of Friday -->
            <!-- Saturday -->
            <div class="col-sm-4 container border-bottom border-dark">
                <h3 class="text-center">Saturday</h3>                
                @foreach($schedules as $schedule)  
                    @if($schedule->day == 'Saturday')
                        @include('layouts.scheduleCard')
                    @endif
                @endforeach
            </div>
            <!-- end of Saturday -->
            <!-- Sunday -->
            <div class="col-sm-4 container">
                <h3 class="text-center">Sunday</h3>
                @foreach($schedules as $schedule)  
                    @if($schedule->day == 'Sunday')
                        @include('layouts.scheduleCard')
                    @endif
                @endforeach
            </div>
            <!-- end of Sunday -->
        </div>
    </div>
</div>
@endsection
