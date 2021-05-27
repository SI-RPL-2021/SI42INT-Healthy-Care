@extends('Patient/layout/template')

@section('content')

<!-- Content Start Here -->
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-4 text-lg">My Profile</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="appoinment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-1">
                    <img src="https://mymodernmet.com/wp/wp-content/uploads/2019/09/100k-ai-faces-6.jpg" class="img-thumbnail" alt="...">
                </div>
            </div>
            <div class="appoinment-wrap mt-5 mt-lg-0 col-lg-8">

                <form method="POST" action="{{ route('patient.update', $patient2->id) }}" enctype="multipart/form-data">
                    @csrf   
                    <div class="form-group">
                        <label for="Fullname">FullName</label>
                        <input type="text" class="form-control mb-0 @error('Fullname') is-invalid @enderror" id="inputFullname" name="Fullname" value="{{ $patient->full_name }}">
                        @error('Fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control @error('Username') is-invalid @enderror" id="inputUsername" name="Username" value="{{ $patient2->username }}">
                        @error('Username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control @error('Email') is-invalid @enderror" id="inputEmail" name="Email" value="{{ $patient2->email }}">
                        @error('Email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone number</label>
                        <input type="text" class="form-control @error('Phone') is-invalid @enderror" id="inputPhone" name="Phone" value="{{ $patient->phone_number }}">
                        @error('Phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Gender">Gender</label>
                        <select class="form-control" name="Gender @error('Gender') is-invalid @enderror" id="gender">
                            <option>Select Doctors</option>
                            <option value="male" selected>Male</option>
                            <option value="female" selected>female</option>
                        </select>
                        @error('Gender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <textarea class="form-control @error('Address') is-invalid @enderror" name="Address" id="inputAddress" cols="30" rows="5">{{ $patient->address }}</textarea>
                        @error('Address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" value="submit" class="btn btn-main btn-round-full">
                        Save Profile
                    </button>
                    <a href="{{ route('patient.profile') }}" class="btn btn-danger btn-md">CANCEL</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection