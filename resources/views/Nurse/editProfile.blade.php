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
    <div class="row"> 
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Profil Anda</h4>
            <p class="card-category">Data Lengkap Pegawai</p>
          </div>
          <div class="card-body">
          
            <form method="POST" action="{{ route('admin.updateAccount', $data2->id) }}" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                    <label for="full_name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" value="{{ $data->full_name }}" name="full_name">
                        @error('full_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $data2->email }}" name="email">
                        @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $data2->username }}" name="username">
                        @error('username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Age" class="col-sm-3 col-form-label">Age</label>
                    <div class="col">
                        <input type="number" class="form-control" id="age" value="{{ $data->age }}" name="age">
                    </div>
              </div>
              <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col">
                        <input type="text" class="form-control" id="gender" value="{{ $data->gender }}" name="gender">
                    </div>
              </div>
              <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col">
                        <input type="text" class="form-control" id="address" value="{{ $data->address }}" name="address">
                    </div>
              </div>
              <div class="form-group row">
                    <label for="birth" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col">
                        <input type="date" class="form-control" id="birth" value="{{ $data->birth }}" name="birth">
                    </div>
              </div>
              <div class="form-group row">
                    <label for="unit" class="col-sm-3 col-form-label">Unit Kerja</label>
                    <div class="col">
                        <input type="text" class="form-control" id="unit" value="{{ $data->unit }}" name="unit">
                    </div>
              </div>
              <div class="form-group row">
                    <label for="instance" class="col-sm-3 col-form-label">Instansi Kerja</label>
                    <div class="col">
                        <input type="text" class="form-control" id="instance" value="{{ $data->instance }}" name="instance">
                    </div>
              </div>
              <div class="form-group row">
                    <label for="religion" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col">
                        <input type="text" class="form-control" id="religion" value="{{ $data->religion }}" name="religion">
                    </div>
              </div>

              <div class="form-group row">
                <button type="submit" value="submit" class="btn btn-primary btn-md">SAVE</button>
                <a href="{{ route('admin.userManagement') }}" class="btn btn-danger btn-md">CANCEL</a>
              </div>
              
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="javascript:;">
              <img class="img" src="{{ asset('img/faces/avatar.jpg') }}">
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">{{ $data2->role }}</h6>
            <h4 class="card-title">{{ $data->full_name }}</h4>
            <p class="card-description">
              No.Telp: {{ $data->phone_number }}
              <br>
              1901023500098
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection