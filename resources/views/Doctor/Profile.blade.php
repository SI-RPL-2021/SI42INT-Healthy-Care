@extends('Doctor/layout/template')
@section('sidebar')
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('doctor.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('doctor.profile') }}">
                <i class="material-icons">person</i>
                <p>My Profile</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="material-icons">content_paste</i>
                <p>Medical Record</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
<a class="navbar-brand" href="javascript:;"><B>PROFILE</B></a>
@endsection

@section('content')
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
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullname" class="bmd-label-floating ml-1">Fullname</label>
                                        <input type="text" class="form-control" id="inputFullname" name="fullname"
                                            value="{{ $doctor->full_name }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username" class="bmd-label-floating ml-1">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="Username"
                                            value="{{ $doctor2->username }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="specialist" class="bmd-label-floating ml-1">Specialist</label>
                                        <select class="form-select form-control" id="inputSpecialist" name="specialist"
                                            disabled>
                                            <option>{{ $doctor->specialist }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email" class="bmd-label-floating ml-1">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email"
                                            value="{{ $doctor2->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address" class="bmd-label-floating ml-1">Address</label>
                                        <textarea class="form-control" id="inputAddress" name="address" cols="30"
                                            rows="5" disabled>{{ $doctor->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="bmd-label-floating ml-1">Phone number</label>
                                        <input type="text" class="form-control" id="inputPhone" name="Phone"
                                            value="{{ $doctor->phone_number }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role" class="bmd-label-floating ml-1">Role</label>
                                        <input type="text" class="form-control" id="inputRole" name="role"
                                            value="{{ $doctor2->role }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                      <img class="img" src="{{ asset('img/faces/dokter igun.jpg') }}">
                    </div>
                    <div class="card-body">
                      <h6 class="card-category text-gray">{{ $doctor2->role }}</h6>
                      <h4 class="card-title">{{ $doctor->full_name }}</h4>
                      <p class="card-description">
                      {{ $doctor->specialist }}
                        <br>
                        1901023500098
                      </p>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
</div>
<!-- Content Ends Here -->
@endsection
