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

          <form method="POST" action="{{ route('admin.updateAccount', $data2->id) }}" enctype="multipart/form-data">
            @csrf
            
            <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="fullname" class="bmd-label-floating ml-1">Fullname</label>
                          <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="inputFullname" name="full_name" value="{{ $data->full_name }}">
                          @error('full_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="username" class="bmd-label-floating ml-1">Username</label>
                          <input type="text" class="form-control @error('username') is-invalid @enderror" id="inputUsername" name="username" value="{{ $data2->username }}">
                          @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="specialist" class="bmd-label-floating ml-1">Specialist</label>
                      <select class="form-select form-control" id="inputSpecialist" name="specialist">
                        <option>{{ $data->specialist }}</option>
                      </select>
                    </div>
                </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="email" class="bmd-label-floating ml-1">Email</label>
                          <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" value="{{ $data2->email }}">
                          @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="address" class="bmd-label-floating ml-1">Address</label>
                      <textarea class="form-control" id="inputAddress" name="address" cols="30" rows="5">{{ $data->address }}</textarea>
                    </div>
                </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="phone" class="bmd-label-floating ml-1">Phone number</label>
                          <input type="text" class="form-control" id="inputPhone" name="Phone" value="{{ $data->phone_number }}">
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
            <h6 class="card-category text-gray">{{ $data2->role }}</h6>
            <h4 class="card-title">{{ $data->full_name }}</h4>
            <p class="card-description">
              Spesialis: {{ $data->specialist }}
              <br>
              1901023500098
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection