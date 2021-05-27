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
    <div class="row"> 
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Profil Anda</h4>
            <p class="card-category">Data Lengkap Pegawai</p>
          </div>
          <div class="card-body">
          
            <form method="POST" action="{{ route('admin.updateAccount', $data->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                    <label for="Fullname" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" class="form-control @error('FulLname') is-invalid @enderror" id="full_name" value="{{ $data2->full_name }}" name="Fullname">
                        @error('Fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col">
                        <input type="text" class="form-control @error('Email') is-invalid @enderror" id="email" value="{{ $data->email }}" name="Email">
                        @error('Email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                <label for="Phone" class="col-sm-3 col-form-label">No. Telepon</label>
                <div class="col">
                    <input type="text" class="form-control @error('Phone') is-invalid @enderror" id="phone" value="{{ $data2->phone_number }}" name="Phone">
                    @error('Phone')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                </div>
          </div>
              <div class="form-group row">
                    <label for="Username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col">
                        <input type="text" class="form-control @error('Username') is-invalid @enderror" id="username" value="{{ $data->username }}" name="Username">
                        @error('Username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Age" class="col-sm-3 col-form-label">Age</label>
                    <div class="col">
                        <input type="number" class="form-control @error('Age') is-invalid @enderror" id="age" value="{{ $data2->age }}" name="Age">
                        @error('Age')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Gender" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col">
                        <input type="text" class="form-control @error('Gender') is-invalid @enderror" id="gender" value="{{ $data2->gender }}" name="Gender">
                        @error('Gender')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Address" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col">
                        <input type="text" class="form-control @error('Address') is-invalid @enderror" id="address" value="{{ $data2->address }}" name="Address">
                        @error('Address')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Birth" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col">
                        <input type="date" class="form-control @error('Birth') is-invalid @enderror" id="birth" value="{{ $data2->birth }}" name="Birth">
                        @error('Birth')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Unit" class="col-sm-3 col-form-label">Unit Kerja</label>
                    <div class="col">
                        <input type="text" class="form-control @error('Unit') is-invalid @enderror" id="unit" value="{{ $data2->unit }}" name="Unit">
                        @error('Unit')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Instance" class="col-sm-3 col-form-label">Instansi Kerja</label>
                    <div class="col">
                        <input type="text" class="form-control @error('Instance') is-invalid @enderror" id="instance" value="{{ $data2->instance }}" name="Instance">
                        @error('Instance')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
              </div>
              <div class="form-group row">
                    <label for="Religion" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col">
                        <input type="text" class="form-control @error('Religion') is-invalid @enderror" id="religion" value="{{ $data2->religion }}" name="Religion">
                        @error('Religion')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
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
            <h6 class="card-category text-gray">{{ $data->role }}</h6>
            <h4 class="card-title">{{ $data2->full_name }}</h4>
            <p class="card-description">
              <br>
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection