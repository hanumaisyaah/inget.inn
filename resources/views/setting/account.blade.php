@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="d-flex flex-column p-3 bg-light col-sm-2" style="width: 280px; height:auto">
            <h3 class="fs-4 text-center" style="colour:#1d5430">Settings</h3>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
            <a href="{{ route('account') }}" class="nav-link active">
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
            <a href="{{ route('reset_data') }}" class="nav-link link-dark">
                Reset Data 
            </a>
            </li>
        </ul>
        <hr>
        
        </div>
        <div class="container col-sm-10">
            <h2>Account Settings</h2>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" style="height:50px">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="text-center">
            <img src="{{ asset('assets/assets/img/user.png') }}" alt="" width="200px" height="200px" style="margin-bottom:2rem">
            </div>            
                <table style="margin-bottom:3rem">
                    <div class="row">
                        <tr>
                            <td style="width:15%"><h4>Name</h4></td>
                            <td style="width:60%"><h4>: {{ $user->name }}</h4></td>                            
                        </tr>
                        <tr>
                            <td style="width:15%"><h4>Username</h4></td>
                            <td style="width:60%"><h4>: {{ $user->username }}</h4></td>                            
                        </tr>
                        <tr>
                            <td style="width:15%"><h4>Email</h4></td>
                            <td style="width:60%"><h4>: {{ $user->email }}</h4></td>                            
                        </tr>                        
                    </div>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col text-center" style="margin-left:200px">
                <a href="" class="btn btn-primary text-center" style="margin-bottom:0.7rem" data-toggle="modal" data-target="#editAccount" id="btn-edit-account">Edit Account</a>
                <a href="" class="btn btn-danger text-center" style="margin-bottom:0.7rem" data-toggle="modal" data-target="#deleteAccount">Delete Account</a>
            </div>
        </div>

        <!-- Edit Account Modal -->
        <div class="modal fade" id="editAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                        <form method="post" action="{{ route('user.update', $user->id) }}" id="account-edit-form">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" ariadescribedby="name" >
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" value="{{ $user->username }}" aria-describedby="username" >
                            </div>                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" aria-describedby="email" >
                            </div>                            
                    </div>
                    <div class="modal-footer">                        
                        <button type="submit" class="btn btn-primary btn-round">Edit</button>
                        </form>
                    </div>                
                </div>
            </div>
        </div>        

        <!-- Delete Account Modal -->
        <div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete this account?
                    </div>
                    <div class="modal-footer">                
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#insertPasswordBeforeDelete" data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Insert Password Before Delete Account Modal -->
        <div class="modal fade" id="insertPasswordBeforeDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Insert Your Password
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
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
                            <input type="password" name="password" class="form-control" id="password" ariadescribedby="password" required>
                    </div>
                    <div class="modal-footer">                                        
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>              
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>                
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

