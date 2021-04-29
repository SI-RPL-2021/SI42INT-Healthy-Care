@extends('Auth/layout/login1')
@section('content')

    <main class="form-signin">
        <form action="{{ route('login') }}" method="post" class="form">
            @csrf
            <img class="mb-4" src="img/healty-care.png" alt="Healty Care Logo" width="100" height="100">
            <h1 class="h3 m-4 fw-bold">Silahkan Login</h1>

            @if ($message = Session::get('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid border-danger @enderror" id="inputEmail" name="email" value="{{old('email')}}" placeholder="name@example.com">
                <label for="inputEmail">Alamat Email</label>
                @error('email')
                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control mb-0 @error('password') is-invalid border-danger @enderror" id="inputPassword" name="password" placeholder="Password">
                <label for="inputPassword">Password</label>
                @error('password')
                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="rememberMe" value="remember-me"> Remember me
                </label>
            </div>
            <input class="w-100 btn btn-lg btn-primary" type="submit" name="login" value="Submit">

            <label class="mt-2">
                Belum punya akun? Daftar <a href="{{ route('registerpage') }}">disini</a>
            </label>
            <p class="mt-3 mb-3 text-muted">Group C &copy; 2021</p>
        </form>
    </main>
@endsection