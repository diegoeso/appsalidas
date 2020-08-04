<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="{{ asset('dist/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


</head>

<body background="{{ asset('dist/img/login-fondo.jpg') }}">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-10 col-md-10 col-lg-5 col-xl-5 ">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-appsalidas">
                                    <h2 class="text-center font-weight-bold my-3 text-white">@yield('user')</h2>
                                </div>
                                <div class="mt-4 mb-0 font-weight-normal">
                                    <p class="text-center">Ingresa tus datos para iniciar sesión</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @yield('role')
                                        <div class="input-group mb-4">
                                            <input type="text"
                                                class="form-control @error('code') is-invalid @enderror"
                                                placeholder="Código" name="code" value="{{ old('code') }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"><i
                                                        class="fas fa-user"></i></span>
                                            </div>
                                            @error('code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Contraseña" name="password" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"><i
                                                        class="fas fa-lock"></i></span>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="py-2">
                                            <button class="btn btn-appsalidas btn-block py-2">Iniciar
                                                Sesión</button>
                                        </div>
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mb-0 pt-2">
                                            <a class="small" style="color: rgb(161, 10, 10)" href=""><i
                                                    class="fa fa-question-circle"></i>
                                                ¿Olvidaste la
                                                contraseña? <i class="fas fa-book"></i></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    @yield('login-users')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-3 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; AppSalidas 2020</div>
                        <div>
                            <a href="">Privacy Policy</a>
                            &middot;
                            <a href="">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('dist/js/scripts.js') }}"></script>
</body>

</html>
