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

                <form method="POST" action="{{ route('patient.update', $edit->id) }}" enctype="multipart/form-data">
                    @csrf   

                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control mb-0 @error('fullname') is-invalid @enderror" id="inputFullname" name="fullname" value="{{ $edit->fullname }}">
                        @error('fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="inputUsername" name="username" value="{{ $edit2->username }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" value="{{ $edit2->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone" value="{{ $edit->phone_number }}">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2">
                            <label class="form-check-label" for="exampleRadios1">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="5">{{ $edit->address }}</textarea>
                    </div>
                    <button type="submit" value="submit" class="btn btn-main btn-round-full mt-2">
                        Save Profile <i class="icofont-simple-right ml-2"></i>
                    </button>
                    <a href="{{ route('edit.profile') }}" class="btn btn-danger btn-md">CANCEL</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection