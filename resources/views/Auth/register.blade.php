<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <!-- Bootstrap and CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">
</head>
<body class="text-center">
    
    <!-- content -->
    <main class="form-signin">
        <form action="{{ route('register') }}" method="post" class="form">
            @csrf
            <img class="mb-4" src="img/healty-care.png" alt="Healty Care Logo" width="100" height="100">
            <h1 class="h3 m-4 fw-bold">Silahkan Register</h1>

            <div class="form-floating">
                <input type="username" class="form-control @error('username') is-invalid border-danger @enderror" id="inputUsername" name="username" value="{{old('username')}}" placeholder="Username">
                <label for="inputUsername">Username</label>
                @error('username')
                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control mb-2 @error('email') is-invalid border-danger @enderror" id="inputEmail" name="email" value="{{old('email')}}" placeholder="name@example.com">
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
            <div class="form-floating">
                <input type="password" class="form-control mb-0 @error('confirm') is-invalid border-danger @enderror" id="inputConfirm" name="confirm" placeholder="Confirm Password">
                <label for="inputConfirm">Confirm Password</label>
                @error('confirm')
                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input class="w-100 btn btn-lg btn-primary mt-2" type="submit" name="register" value="Submit">

            <label class="mt-2">
                Sudah punya akun? Login <a href="{{ route('loginpage') }}">disini</a>
            </label>
            <p class="mt-3 mb-3 text-muted">Group C &copy; 2021</p>
        </form>
    </main>
</body>
</html>