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
                <form class="form" enctype="multipart/form-data">
                    @csrf               

                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="inputFullname" name="fullname" value="{{ $patient->full_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="inputUsername" name="username" value="{{ $patient2->username }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $patient2->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone" value="{{ $patient->phone_number }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            <label class="form-check-label" for="exampleRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" disabled>
                            <label class="form-check-label" for="exampleRadios1">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="5" disabled>{{ $patient->address }}</textarea>
                    </div>
                    <a class="btn btn-main btn-round-full mt-2" href="edit/{{ $patient->id }}">
                        Update Profile <i class="icofont-simple-right ml-2"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection