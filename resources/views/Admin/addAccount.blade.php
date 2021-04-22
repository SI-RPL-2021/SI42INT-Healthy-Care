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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.profile') }}">
                <i class="material-icons">person</i>
                <p>My Profile</p>
            </a>
        </li>
        <li class="nav-item active">
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
    <a class="navbar-brand" href="javascript:;"><B>BUAT AKUN BARU</B></a>
@endsection

<!-- Content Start Here -->
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <strong>{{ $message }}</strong>    
        </span>
    </div>
@elseif ($message = Session::get('failed'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <strong>{{ $message }}</strong>    
        </span>
    </div>
@endif
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-tabs card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#admin" data-toggle="tab">
                                            <i class="material-icons">person</i> Admin
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#doctor" data-toggle="tab">
                                            <i class="material-icons">person</i> Doctor
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#nurse" data-toggle="tab">
                                            <i class="material-icons">person</i> Nurse
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Form Admin -->
                            <div class="tab-pane active" id="admin">
                                <form class="form" method="post" action="{{ route('admin.addAccount') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="fullname" class="bmd-label-floating ml-1">Fullname</label>
                                                <input type="text" class="form-control @error('fullname') is-invalid border-danger @enderror" id="inputFullname" name="fullname" value="{{old('fullname')}}">
                                                @error('fullname')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username" class="bmd-label-floating ml-1">Username</label>
                                                <input type="text" class="form-control @error('username') is-invalid border-danger @enderror" id="inputUsername" name="username" value="{{old('username')}}">
                                                @error('username')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email" class="bmd-label-floating ml-1">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid border-danger @enderror" id="inputEmail" name="email" value="{{old('email')}}">
                                                @error('email')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password" class="bmd-label-floating ml-1">Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid border-danger @enderror" id="inputPassword" name="password" value="{{old('password')}}">
                                                @error('password')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone" class="bmd-label-floating ml-1">Phone number</label>
                                                <input type="text" class="form-control @error('phone') is-invalid border-danger @enderror" id="inputPhone" name="phone" value="{{old('phone')}}">
                                                @error('phone')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="role" class="bmd-label-floating ml-1">Role</label>
                                                <input type="text" class="form-control" id="inputRole" name="role" value="admin" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="file" class="custom-file-input form-control" id="customFile">
                                                <label class="custom-file-label bmd-label-floating" for="customFile">Foto</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="d-flex justify-content-center">
                                        <input class="col-md-3 mt-5 btn btn-lg btn-primary" type="submit" name="submit" value="Submit">
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>

                            <!-- Form Doctor -->
                            <div class="tab-pane" id="doctor">
                                {{-- <form class="form" method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="fullname" class="bmd-label-floating ml-1">Fullname</label>
                                                <input type="text" class="form-control @error('fullname') is-invalid border-danger @enderror" id="inputFullname" name="fullname" value="{{old('fullname')}}">
                                                @error('fullname')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username" class="bmd-label-floating ml-1">Username</label>
                                                <input type="text" class="form-control @error('username') is-invalid border-danger @enderror" id="inputUsername" name="username" value="{{old('username')}}">
                                                @error('username')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email" class="bmd-label-floating ml-1">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid border-danger @enderror" id="inputEmail" name="email" value="{{old('email')}}">
                                                @error('email')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone" class="bmd-label-floating ml-1">Phone number</label>
                                                <input type="text" class="form-control @error('phone') is-invalid border-danger @enderror" id="inputPhone" name="phone" value="{{old('phone')}}">
                                                @error('phone')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="role" class="bmd-label-floating ml-1">Role</label>
                                                <input type="text" class="form-control" id="inputRole" name="role" value="doctor" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input class="col-md-3 mt-5 btn btn-lg btn-primary" type="submit" name="submit" value="Submit">
                                    </div>
                                    <div class="clearfix"></div>
                                </form> --}}
                            </div>

                            <!-- Form Nurse -->
                            <div class="tab-pane" id="nurse">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection