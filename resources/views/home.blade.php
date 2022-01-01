@extends('layouts.app')

@section('content')
<div class="container"><br><br>
    <h1>Welcome, {{ $user->name }}! </h1> <br>
    <h2>Today's Schedule</h2>
    <div class="container">
        <div class="row">
            @foreach($schedules as $schedule)
                <div class="col-sm-4">
                    <div class="card mb-3">                    
                        <div class="card-body">
                            <h6 class="card-text d-inline">{{ $schedule->start }} - {{ $schedule->end }}</h6>                            
                            <h4 class="card-title mt-4 text-center">{{ $schedule->course }}</h4>
                            @if($schedule->location != NULL)
                                <p class="card-text">{{ $schedule->room }}<br>
                                @if(str_contains($schedule->location, 'www.') OR str_contains($schedule->location, 'http'))
                                    <a href="{{ $schedule->location }}">({{ $schedule->location }})</a>
                                @else
                                    ({{ $schedule->location }})<br>
                                @endif
                            @else
                                <p class="card-text text-center">{{ $schedule->room }}</p>
                            @endif
                            @if($schedule->teacher && $schedule->contact != NULL)    
                                <p>{{ $schedule->teacher }}: {{ $schedule->contact }}</p>
                            @endif        
                        </div>
                    </div>  
                </div>
            @endforeach            
        </div>
    </div>
    <h2>Due Date in 3 Days</h2>
    <div>
    <div class="container">
        <div class="sorting-data">            
            <div class="row" style="margin-bottom:3rem">
                @foreach($assignments as $assignment)    
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text">Due Date: {{ $assignment->due_date }} at {{ $assignment->due_time }}</p><br>
                            <div class="justify-content-center align-items-center"> 
                                <h4 class="card-title text-center">{{ $assignment->name }}</h4>
                                <h5 class="card-text text-center">{{ $assignment->course }}</h5>
                            </div>
                            <a href="{{ route('assignment.show', $assignment->id) }}" class="btn btn-primary float-right mt-auto">Details > </a>
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </div>
</div>
@endsection
