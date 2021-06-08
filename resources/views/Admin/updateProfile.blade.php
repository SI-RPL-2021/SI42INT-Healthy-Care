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
            <a class="nav-link" href="{{ route('admin.profile') }}">
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
            <a class="nav-link" href="">
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
                        <p class="card-category">Edit Your Profile</p>
                    </div>
                    <div class="card-body">
                        <form class="form" enctype="multipart/form-data" action="{{route('admin.postProfile')}}"
                            method="POST">
                            @csrf
                            <input type="text" class="form-control" name="id" value="{{ $data->id }}" hidden>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Fullname" class="bmd-label-floating ml-1">Fullname</label>
                                        <input type="text" class="form-control @error('Fullname') is-invalid @enderror" id="inputFullname" name="Fullname"
                                            value="{{ $data2->full_name }}">
                                        @error('Fullname')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Username" class="bmd-label-floating ml-1">Username</label>
                                        <input type="text" class="form-control @error('Username') is-invalid @enderror" id="inputUsername" name="Username"
                                            value="{{ $data->username }}">
                                        @error('Username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Email" class="bmd-label-floating ml-1">Email</label>
                                        <input type="email" class="form-control @error('Email') is-invalid @enderror" id="inputEmail" name="Email"
                                            value="{{ $data->email}}">
                                        @error('Email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Phone" class="bmd-label-floating ml-1">Phone number</label>
                                        <input type="text" class="form-control @error('Phone') is-invalid @enderror" id="inputPhone" name="Phone"
                                            value="{{ $data2->phone_number }}">
                                        @error('Phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role" class="bmd-label-floating ml-1">Role</label>
                                        <input type="text" class="form-control @error('Role') is-invalid @enderror" id="inputRole" name="Role"
                                            value="{{ $data->role }}" disabled>
                                        @error('Role')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" value="submit" class="btn btn-primary btn-md">SAVE</button>
                            <a href="{{ route('admin.userManagement') }}" class="btn btn-danger btn-md">CANCEL</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <img class="img" src="img/healty-care.png" alt="Healty Care Logo" width="100" height="100">
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">{{ $data->role }}</h6>
                        <h4 class="card-title">{{ $data2->full_name }}</h4>
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
