@extends('Admin/layout/template')
@section('sidebar')
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="material-icons">person</i>
                <p>My Profile</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.userManagement') }}">
                <i class="material-icons">content_paste</i>
                <p>User Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.history') }}">
                <i class="material-icons">library_books</i>
                <p>Hitory Transaction</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
<a class="navbar-brand" href="javascript:;"><B>PROFILE</B></a>
@endsection

<!-- Content Start Here -->
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">User Profile</h4>
                        <p class="card-category">Your profile</p>
                    </div>
                    <div class="card-body">
                        <form class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fullname" class="bmd-label-floating ml-1">Fullname</label>
                                        <input type="text" class="form-control" id="inputFullname" name="fullname"
                                            value="{{ $admin->admin->full_name }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username" class="bmd-label-floating ml-1">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="Username"
                                            value="{{ $admin->username }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email" class="bmd-label-floating ml-1">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email"
                                            value="{{ $admin->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="bmd-label-floating ml-1">Phone number</label>
                                        <input type="text" class="form-control" id="inputPhone" name="Phone"
                                            value="{{ $admin->admin->phone_number }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role" class="bmd-label-floating ml-1">Role</label>
                                        <input type="text" class="form-control" id="inputRole" name="role"
                                            value="{{ $admin->role }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <a href="updateProfile/{{ $admin->id }}" class="btn btn-primary pull-right mt-3">Update
                                Profile</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <img class="img" src="{{ asset('img/healty-care.png') }}" alt="Healty Care Logo">
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">{{ $admin->role }}</h6>
                        <h4 class="card-title">{{ $admin->admin->full_name }}</h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I
                            love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
