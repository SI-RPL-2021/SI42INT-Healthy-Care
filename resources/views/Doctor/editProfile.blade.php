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

          <form method="POST" action="{{ route('admin.updateAccount', $data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="Fullname" class="bmd-label-floating ml-1">Fullname</label>
                          <input type="text" class="form-control @error('Fullname') is-invalid @enderror" id="inputFullname" name="Fullname" value="{{ $data2->full_name }}">
                          @error('Fullname')
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
                          <label for="Username" class="bmd-label-floating ml-1">Username</label>
                          <input type="text" class="form-control @error('Username') is-invalid @enderror" id="inputUsername" name="Username" value="{{ $data->username }}">
                          @error('Username')
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
                      <label for="Specialist" class="bmd-label-floating ml-1">Specialist</label>
                      <select class="form-select form-control" id="inputSpecialist" name="Specialist">
                        <option>{{ $data2->specialist }}</option>
                      </select>
                    </div>
                </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="Email" class="bmd-label-floating ml-1">Email</label>
                          <input class="form-control @error('Email') is-invalid @enderror" id="inputEmail" name="Email" value="{{ $data->email }}">
                          @error('Email')
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
                      <label for="Address" class="bmd-label-floating ml-1">Address</label>
                      <textarea class="form-control @error('Address') is-invalid @enderror" id="inputAddress" name="Address" cols="30" rows="5">{{ $data2->address }}</textarea>
                      @error('Address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                </div>
              </div>
              <div class="row mt-2">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="Phone" class="bmd-label-floating ml-1">Phone number</label>
                          <input type="text" class="form-control @error('Phone') is-invalid @enderror" id="inputPhone" name="Phone" value="{{ $data2->phone_number }}">
                          @error('Phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
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
            <h6 class="card-category text-gray">{{ $data->role }}</h6>
            <h4 class="card-title">{{ $data2->full_name }}</h4>
            <p class="card-description">
              {{ $data2->specialist }}
              <br>
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection