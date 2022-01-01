@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="d-flex flex-column p-3 bg-light col-sm-2" style="width: 280px; height:auto">
            <h3 class="fs-4 text-center" style="colour:#1d5430">Settings</h3>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                <a href="{{ route('account') }}" class="nav-link link-dark">
                    Account
                </a>
                </li>
                <li>
                <a href="{{ route('change_password') }}" class="nav-link link-dark">
                    New Password
                </a>
                </li>
                <!-- <li>
                <a href="{{ route('notification') }}" class="nav-link link-dark">
                    Notification
                </a>
                </li> -->
                <li>
                <a href="{{ route('reset_data') }}" class="nav-link active">
                    Reset Data 
                </a>
                </li>
            </ul>
        </div>
        <div class="container col-sm-10">
            <h2>Reset Data</h2>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mb-3" style="height:50px">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="container row">
                <label for="resetAssignment" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Assignment</p></label>
                <div class="col" style="width=50px">
                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#resetAssignment" id="btn-reset-assignment">Reset</button>
                </div>                    
            </div>
            <div class="container row">                
                <label for="resetSchedule" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Schedule</p></label>
                <div class="col" style="width=50px">
                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#resetSchedule" id="btn-reset-schedule">Reset</button>
                </div>                    
            </div>
        </div>        
    </div>

    <!-- Reset Assignment Modal -->
    <div class="modal fade" id="resetAssignment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Assignment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-modal-assignment-reset">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to reset the assignments?
            </div>
            <div class="modal-footer">                
                <form action="{{ route('reset_assignment', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')                    
                    <button type="submit" class="btn btn-danger"  id="btn-confirm-reset-assignment">Delete</button>
                </form>                
            </div>
            </div>
        </div>
    </div>

    <!-- Reset Schedule Modal -->
    <div class="modal fade" id="resetSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-modal-schedule-reset">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to reset the schedules?
            </div>
            <div class="modal-footer">                
                <form action="{{ route('reset_schedule', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')                    
                    <button type="submit" class="btn btn-danger" id="btn-confirm-reset-schedule">Delete</button>                    
                </form>                
            </div>
            </div>
        </div>
    </div>
@endsection

