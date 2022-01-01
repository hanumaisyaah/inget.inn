@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Schedule</h2>
    <div class="container border">
        <form method="POST"  action="{{ route('schedule.update', $schedule->id) }}" style="margin-bottom:40px">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="text" id="schd-course" name="course" placeholder="Course" value="{{ $schedule->course }}" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" required>
            <input type="text" id="schd-teacher-name" name="teacher" placeholder="Teacher Name" value="{{ $schedule->teacher }}" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <input type="text" id="schd-classroom" name="room" placeholder="Classroom" value="{{ $schedule->room }}" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" required>
            <input type="text" id="schd-location" name="location" placeholder="Location" value="{{ $schedule->location }}" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <input type="text" id="schd-contact" name="contact" placeholder="Contact" value="{{ $schedule->contact }}" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">          
            <label for="schd-diff" class="col-form-label">Day</label>
            <select name="day" id="schd-day" class="form-control" required>
                <option value="Monday" {{ $schedule->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                <option value="Tuesday" {{ $schedule->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                <option value="Wednesday" {{ $schedule->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                <option value="Thursday" {{ $schedule->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                <option value="Friday" {{ $schedule->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                <option value="Saturday" {{ $schedule->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                <option value="Sunday" {{ $schedule->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
            </select><br>
            
            <div class="row align-items-center" style="margin:0 0 10px 10px">
                <label for="schd-hour-start" class="col-form-label">Start</label>
                <input type="time" id="schd-hour-start" name="start" value="{{ $schedule->start }}" style="margin:0px 100px 0px 5px" required>
                <label for="schd-hour-end" class="col-form-label" style="margin-right:5px">End</label>
                <input type="time" id="schd-hour-end" name="end" value="{{ $schedule->end }}" required><br>
            </div>
            <p></p>            
            
            <button type="submit" class="btn btn-primary btn-lg float-right">Save</button><br> 
        </form>
    </div>
</div>
@endsection