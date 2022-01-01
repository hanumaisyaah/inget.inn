@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="d-flex flex-column p-3 bg-light col-sm-2" style="width: 280px; height:auto">
            <h3 class="fs-4 text-center" style="colour:#1d5430">Settings</h3>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
            <a href="{{ route('account') }}" class="nav-link link-dark">
                Account
            </a>
            </li>
            <li>
            <a href="{{ route('change_password') }}" class="nav-link active">
                New Password
            </a>
            </li>    
            <li>
            <!-- <a href="{{ route('notification') }}" class="nav-link link-dark">
                Notification
            </a> -->
            </li>
            <li>
            <a href="{{ route('reset_data') }}" class="nav-link link-dark">
                Reset Data 
            </a>
            </li>
        </ul>
        <hr>
        
        </div>
        <div class="container col-sm-10">
            <h2>Change Password</h2>
            <div class="container" style="margin-top:2rem; margin-bottom:4.9rem">
                <div class="container" style="padding:0 75px 75px 75px"> 
                    <form action="{{ route('reset_password', $user->id) }}">
                        @csrf
                        <label for="new-pass">Input Your New Password</label>
                        <input class="form-control" type="password" placeholder="New Password" name="password" id="new-pass"><br>                    
                        <label for="pass-confirm">Re-Input Your New Password</label>
                        <input class= "form-control" type="password" placeholder="Confirm New Password" name="confirm_password" id="pass-confirm"><br>
                        <button type="submit" class="btn btn-primary float-right" style="">Confirm</button>
                    </form>        
                </div>
            </div>
        </div>

    </div>
@endsection

