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
    
    <main class="form-signin">
    <form action="" method="POST">
        <img class="mb-4" src="img/healty-care.png" alt="Healty Care Logo" width="80" height="80">
        <h1 class="h3 mb-3 fw-normal">Silahkan Register</h1>

        <div class="form-floating">
        <input type="name" class="form-control" id="floatingName" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
        </div>
        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Alamat Email</label>
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
        </div>

        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <label class="mt-2">
            Sudah punya akun? Login <a href="{{ route('auth.login') }}">disini</a>
        </label>
        <p class="mt-3 mb-3 text-muted">Group C &copy; 2021</p>
    </form>
    </main>

</body>
</html>