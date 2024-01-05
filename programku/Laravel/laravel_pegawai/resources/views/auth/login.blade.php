<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Aplikasi</title>

    <!-- Styles -->    
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
</head>

<body class="h-100 bg-info d-flex align-items-center">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
        <h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>
        <form class="d-grid gap-3" method="post" action="{{ route('login') }}">
            @csrf
            <div class="col-md-12">
                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"  value="{{ old('email') }}" name="email" placeholder="Email">
                @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <input type="password" class="form-control form-control-lg @error('email') is-invalid @enderror" name="password" placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <input class="btn btn-info btn-lg" type="submit" value="Login">
        </form>
        </div>
    </div>
    </div>
</body>
   
</html>
