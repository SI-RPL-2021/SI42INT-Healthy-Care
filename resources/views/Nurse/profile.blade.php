@extends('Nurse/layout/template')
@section('sidebar')
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('nurse.dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('nurse.profile') }}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="material-icons">assignment</i>
            <p>Medical Record</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="material-icons">single_bed</i>
            <p>Kamar Inap</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('nurse.notif') }}">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li>
      </ul>
    </div>
@endsection

@section('nametag')
    <a class="navbar-brand" href="javascript:;"><B>USER PROFILE</B></a>
@endsection

@section('content')
<!-- Content Start Here -->
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

              <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="inputFullname" value="{{ $Nurse->full_name }}" name="fullname">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="email" readonly class="form-control-plaintext" id="inputEmail" value="{{ $Nurse2->email }}" name="email">
                </div>
              </div>
              <div class="form-group row">
                <label for="position" class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="inputPosition" value="{{ $Nurse->position }}" name="position">
                </div>
              </div>
              <div class="form-group row">
                <label for="Age" class="col-sm-3 col-form-label">Age</label>
                <div class="col-sm-6">
                  <input type="number" readonly class="form-control-plaintext" id="inputAge" value="{{ $Nurse->age }}" name="age">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="inputGender" value="{{ $Nurse->gender }}" name="gender">
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="inputAddress" value="{{ $Nurse->address }}" name="address">
                </div>
              </div>
              <div class="form-group row">
                <label for="birth" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-6">
                  <input type="date" readonly class="form-control-plaintext" id="inputBirth" value="{{ $Nurse->birth }}" name="birth">
                </div>
              </div>
              <div class="form-group row">
                <label for="unit" class="col-sm-3 col-form-label">Unit Kerja</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="inputUnit" value="{{ $Nurse->unit }}" name="unit">
                </div>
              </div>
              <div class="form-group row">
                <label for="instance" class="col-sm-3 col-form-label">Instansi Kerja</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="inputInstance" value="{{ $Nurse->instance }}" name="instance">
                </div>
              </div>
              <div class="form-group row">
                <label for="religion" class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="inputReligion" value="{{ $Nurse->religion }}" name="religion">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <img class="img" src="{{ asset('img/faces/avatar.jpg') }}">
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">Suster Jaga</h6>
            <h4 class="card-title">{{ $Nurse->full_name }}</h4>
            <p class="card-description">
              {{ $Nurse->phone_number }}
              <br>
              1901023500098
            </p>
          </div>
        </div>
      </div>
    </div>
<!-- Content Ends Here -->
@endsection