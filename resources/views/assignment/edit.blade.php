@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Assignment</h2>
    <div class="container border">
        <h4>Due Date</h4>
        <form method="POST" action="{{ route('assignment.update', $assignment->id) }}" style="margin-bottom:40px" id="edit-assignment-form">
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
            <div class="row align-items-center" >
                <input type="date" id="asgn-date" name="due_date" class="ml-3" value="{{ $assignment->due_date }}">
                <p class="mx-3">at</p>
                <input type="time" id="asgn-hour" name="due_time" value="{{ $assignment->due_time }}"><br>
            </div>
            <input type="text" id="asgn-name" name="name" placeholder="Assignment Name" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" value="{{ $assignment->name }}">
            <input type="text" id="asgn-course" name="course" placeholder="Course" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" value="{{ $assignment->course }}">
            <input type="text" id="asgn-submit-location" name="submit_location" placeholder="Submit Location" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" value="{{ $assignment->submit_location }}">
            <textarea name="description" id="asgn-desc" cols="30" rows="5" placeholder="Description" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">{{ $assignment->description }}</textarea>            
            <label for="asgn-diff" class="col-form-label">Difficulty</label>
            <select name="level" id="asgn-diff" class="form-control">
                <option value="Very Easy" {{ $assignment->level == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                <option value="Easy" {{ $assignment->level == 'Easy' ? 'selected' : '' }}>Easy</option>
                <option value="Medium" {{ $assignment->level == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="Hard" {{ $assignment->level == 'Hard' ? 'selected' : '' }}>Hard</option>
                <option value="Very Hard" {{ $assignment->level == 'Very Hard' ? 'selected' : '' }}>Very Hard</option>
            </select>
            <label for="asgn-est" class="col-form-label" style="margin:15px 10px 15px 0">Estimation</label>
            <input type="number" id="asgn-est" name="estimation" style="margin:15px 10px 15px 0" value="{{ $assignment->estimation }}">
            <span> hour(s)</span>
            <div class="container">
                <button type="submit" class="btn btn-primary btn-lg float-right" style="">Save</button><br>
            </div>
        </form>
    </div>
</div>
@endsection