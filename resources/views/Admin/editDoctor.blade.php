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
            <a class="nav-link" href="">
                <i class="material-icons">content_paste</i>
                <p>User Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.history') }}">
                <i class="material-icons">library_books</i>
                <p>History Transaction</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
    <a class="navbar-brand" href="javascript:;"><B>USER MANAGEMENT</B></a>
@endsection

<!-- Content Start Here -->
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Silahkan ubah data yang diperlukan</p>
          </div>
          <div class="card-body">

          <form method="POST" action="updateAccount/{{ $doctor->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            
            <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="fullname" class="bmd-label-floating ml-1">Fullname</label>
                          <input type="text" class="form-control" id="inputFullname" name="fullname" value="{{ $doctor->full_name }}">
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="username" class="bmd-label-floating ml-1">Username</label>
                          <input type="text" class="form-control" id="inputUsername" name="Username" value="{{ $doctor2->username }}">
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="specialist" class="bmd-label-floating ml-1">Specialist</label>
                      <select class="form-select form-control" id="inputSpecialist" name="specialist">
                        <option>{{ $doctor->specialist }}</option>
                      </select>
                    </div>
                </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="email" class="bmd-label-floating ml-1">Email</label>
                          <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $doctor2->email }}">
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="address" class="bmd-label-floating ml-1">Address</label>
                      <textarea class="form-control" id="inputAddress" name="address" cols="30" rows="5">{{ $doctor->address }}</textarea>
                    </div>
                </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="phone" class="bmd-label-floating ml-1">Phone number</label>
                          <input type="text" class="form-control" id="inputPhone" name="Phone" value="{{ $doctor->phone_number }}">
                      </div>
                  </div>
              </div>

              <button type="submit" value="submit" class="btn btn-primary btn-md">SAVE</button>
              <a href="{{ route('admin.userManagement') }}" class="btn btn-danger btn-md">CANCEL</a>

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
              Spesialis: {{ $doctor->specialist }}
              <br>
              1901023500098
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection