<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Comuna</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('r_l/css/login.css')}}">

</head>
<body>
    @include('sweetalert::alert')
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
          <div class="card login-card">
            <div class="row no-gutters">
              <div class="col-md-5">
                <img src="{{asset('r_l/images/logo_2.png')}}" alt="login" class="login-card-img">
            </div>
            <div class="col-md-7">
                <div class="card-body" style="text-align: -webkit-center;">
                  <div class="brand-wrapper">
                    <img src="{{asset('r_l/images/logo_4.png')}}" alt="logo" class="logo">
                </div>
                <form method="POST" class="validate-form" action="{{ route('login') }}">
                <h4 class="login-card-description">Bienvenido al administrador web de Comuna</h4>

                    @csrf
                  <div class="form-group">
                    <input type="email" id="email" class="form-control @error('password') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo electronico" required autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="***********" required autocomplete="current-password">
                </div>
                   <div >
                    <button class="btn btn-block login-btn mb-4">
                        Ingresar
                    </button>
                </div>
                 @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </form>

        </div>
    </div>
</div>
</div>

</div>
</main>
<!-- SWEET ALERT 2 -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script src="{{asset('r_l/js/main.js')}}"></script>


</body>
</html> 