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
                                    <input type="text" class="form-control" name="Admin" value="admin" hidden>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="Fullname" class="bmd-label-floating ml-1">Fullname</label>
                                                <input type="text" class="form-control @error('Fullname') is-invalid border-danger @enderror" id="inputFullname" name="Fullname" value="{{old('Fullname')}}">
                                                @error('Fullname')
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
                                                <label for="Username" class="bmd-label-floating ml-1">Username</label>
                                                <input type="text" class="form-control @error('Username') is-invalid border-danger @enderror" id="inputUsername" name="Username" value="{{old('Username')}}">
                                                @error('Username')
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
                                                <label for="Email" class="bmd-label-floating ml-1">Email</label>
                                                <input type="email" class="form-control @error('Email') is-invalid border-danger @enderror" id="inputEmail" name="Email" value="{{old('Email')}}">
                                                @error('Email')
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
                                                <label for="Password" class="bmd-label-floating ml-1">Password</label>
                                                <input type="password" class="form-control @error('Password') is-invalid border-danger @enderror" id="inputPassword" name="Password">
                                                @error('Password')
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
                                                <label for="Phone" class="bmd-label-floating ml-1">Phone number</label>
                                                <input type="text" class="form-control @error('Phone') is-invalid border-danger @enderror" id="inputPhone" name="Phone" value="{{old('Phone')}}">
                                                @error('Phone')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Role" class="bmd-label-floating ml-1">Role</label>
                                                <input type="text" class="form-control" id="inputRole" name="Role" value="admin" disabled>
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
                                <form class="form" method="post" action="{{ route('admin.addAccount') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" class="form-control" name="Doctor" value="doctor" hidden>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="Fullname" class="bmd-label-floating ml-1">Fullname</label>
                                                <input type="text" class="form-control @error('Fullname') is-invalid border-danger @enderror" id="inputFullname" name="Fullname" value="{{old('Fullname')}}">
                                                @error('Fullname')
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
                                                <label for="Username" class="bmd-label-floating ml-1">Username</label>
                                                <input type="text" class="form-control @error('Username') is-invalid border-danger @enderror" id="inputUsername" name="Username" value="{{old('Username')}}">
                                                @error('Username')
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
                                                <label for="Specialist" class="bmd-label-floating ml-1">Specialist</label>
                                                <input type="text" class="form-control @error('Specialist') is-invalid border-danger @enderror" id="inputSpecialist" name="Specialist" value="{{old('Specialist')}}">
                                                @error('Specialist')
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
                                                <label for="Email" class="bmd-label-floating ml-1">Email</label>
                                                <input type="email" class="form-control @error('Email') is-invalid border-danger @enderror" id="inputEmail" name="Email" value="{{old('Email')}}">
                                                @error('Email')
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
                                                <label for="Password" class="bmd-label-floating ml-1">Password</label>
                                                <input type="password" class="form-control @error('Password') is-invalid border-danger @enderror" id="inputPassword" name="Password">
                                                @error('Password')
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
                                              <label for="Address" class="bmd-label-floating ml-1">Address</label>
                                              <textarea class="form-control @error('Address') is-invalid @enderror" id="inputAddress" name="Address" cols="30" rows="5">{{old('Address')}}</textarea>
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
                                                <input type="text" class="form-control @error('Phone') is-invalid border-danger @enderror" id="inputPhone" name="Phone" value="{{old('Phone')}}">
                                                @error('Phone')
                                                    <span class="invalid-feedback mt-0" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Role" class="bmd-label-floating ml-1">Role</label>
                                                <input type="text" class="form-control" id="inputRole" name="Role" value="doctor" disabled>
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

                            <!-- Form Nurse -->
                            <div class="tab-pane" id="nurse">
                                <div class="tab-pane" id="doctor">
                                    <form class="form" method="post" action="{{ route('admin.addAccount') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" class="form-control" name="Nurse" value="nurse" hidden>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="Fullname" class="bmd-label-floating ml-1">Fullname</label>
                                                    <input type="text" class="form-control @error('Fullname') is-invalid border-danger @enderror" id="inputFullname" name="Fullname" value="{{old('Fullname')}}">
                                                    @error('Fullname')
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
                                                    <label for="Email" class="bmd-label-floating ml-1">Email</label>
                                                    <input type="email" class="form-control @error('Email') is-invalid border-danger @enderror" id="inputEmail" name="Email" value="{{old('Email')}}">
                                                    @error('Email')
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
                                                    <label for="Username" class="bmd-label-floating ml-1">Username</label>
                                                    <input type="text" class="form-control @error('Username') is-invalid border-danger @enderror" id="inputUsername" name="Username" value="{{old('Username')}}">
                                                    @error('Username')
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
                                                    <label for="Password" class="bmd-label-floating ml-1">Password</label>
                                                    <input type="password" class="form-control @error('Password') is-invalid border-danger @enderror" id="inputPassword" name="Password">
                                                    @error('Password')
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
                                                    <label for="Age" class="bmd-label-floating ml-1">Age</label>
                                                    <input type="number" class="form-control @error('Age') is-invalid border-danger @enderror" id="inputAge" name="Age" value="{{old('Age')}}">
                                                    @error('Age')
                                                        <span class="invalid-feedback mt-0" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Gender" class="bmd-label-floating ml-1">Gender</label>
                                                    <input type="text" class="form-control @error('Gender') is-invalid border-danger @enderror" id="inputGender" name="Gender" value="{{old('Gender')}}">
                                                    @error('Gender')
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
                                                  <label for="Address" class="bmd-label-floating ml-1">Address</label>
                                                  <textarea class="form-control @error('Address') is-invalid @enderror" id="inputAddress" name="Address" cols="30" rows="5">{{old('Address')}}</textarea>
                                                  @error('Address')
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
                                                    <label for="Birth" class="bmd-label-floating ml-1">Birth</label>
                                                    <input type="date" class="form-control @error('Birth') is-invalid border-danger @enderror" id="inputBirth" name="Birth" value="{{old('Birth')}}">
                                                    @error('Birth')
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
                                                    <label for="Religion" class="bmd-label-floating ml-1">Religion</label>
                                                    <input type="text" class="form-control @error('Religion') is-invalid border-danger @enderror" id="inputReligion" name="Religion" value="{{old('Religion')}}">
                                                    @error('Religion')
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
                                                    <label for="Unit" class="bmd-label-floating ml-1">Unit</label>
                                                    <input type="text" class="form-control @error('Unit') is-invalid border-danger @enderror" id="inputUnit" name="Unit" value="{{old('Unit')}}">
                                                    @error('Unit')
                                                        <span class="invalid-feedback mt-0" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Instance" class="bmd-label-floating ml-1">Instance</label>
                                                    <input type="text" class="form-control @error('Instance') is-invalid border-danger @enderror" id="inputInstance" name="Instance" value="{{old('Instance')}}">
                                                    @error('Instance')
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
                                                    <label for="Phone" class="bmd-label-floating ml-1">Phone number</label>
                                                    <input type="text" class="form-control @error('Phone') is-invalid border-danger @enderror" id="inputPhone" name="Phone" value="{{old('Phone')}}">
                                                    @error('Phone')
                                                        <span class="invalid-feedback mt-0" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Role" class="bmd-label-floating ml-1">Role</label>
                                                    <input type="text" class="form-control" id="inputRole" name="Role" value="nurse" disabled>
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
