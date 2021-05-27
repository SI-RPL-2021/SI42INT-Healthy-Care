@extends('Doctor/layout/template')
@section('sidebar')
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="">
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
            <a class="nav-link" href="">
                <i class="material-icons">content_paste</i>
                <p>Medical Record</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="material-icons">notifications</i>
                <p>Notification</p>
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
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="Username"
                                            value="{{ $doctor2->username }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" class="form-control" id="inputEmail" name="Email"
                                            value="{{ $doctor2->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Full Name</label>
                                        <input type="text" class="form-control" id="inputFullname" name="FullName"
                                            value="{{ $doctor->full_name }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" name="Address"
                                            value="{{ $doctor->address }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="bmd-label-floating ml-1">Phone number</label>
                                        <input type="text" class="form-control" id="inputPhone" name="Phone" value="{{ $doctor->phone_number }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role" class="bmd-label-floating ml-1">Role</label>
                                        <input type="text" class="form-control" id="inputRole" name="role" value="{{ $doctor2->role }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Specialist</label>
                                        <input type="text" class="form-control" id="inputCity" name="City"
                                            value="{{ $doctor->specialist }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> </label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
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
