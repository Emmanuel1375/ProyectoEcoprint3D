<!doctype html>
<html lang="en">

<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('dashmin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashmin/css/customStyle.css') }}">
    
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <!-- Figuras decorativas -->
        <div class="figura circulo f1"></div>
        <div class="figura cuadrado f2"></div>
        <div class="figura rombo f3"></div>
        <div class="figura triangulo f4"></div>
        <div class="figura estrella f5"></div>
        <div class="figura elipse f6"></div>
        <div class="figura semicirculo f7"></div>
        <div class="figura circulo f8"></div>
        <div class="figura cuadrado f9"></div>
        <div class="figura triangulo f10"></div>
        <div class="figura anillo f11"></div>
        <div class="figura hexagono f12"></div>
        <div class="figura pentagono f13"></div>
        <div class="figura espiral f14"></div>
        <div class="figura estrella5 f15"></div>
        <div class="figura paralelogramo f16"></div>
        <div class="row justify-center-content-center align-items-center w-75">
            <div class="col-sm-12">
                <div class="card shadow-lg">
                    <div class="card-header p-4">
                        <h3 class="text-center">Registrarse</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Carnet" required>
                                            <label for="floatingInput">Carnet</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" required>
                                            <label for="floatingInput">Nombres</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Primer apellido" required>
                                            <label for="floatingInput">Primer apellido</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Segundo apellido (Opcional)">
                                            <label for="floatingInput">Segundo apellido (Opcional)</label>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="Correo electrónico" required>
                                            <label for="floatingInput">Correo electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nombre de usuario" required>
                                            <label for="floatingInput">Nombre de usuario</label>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingInput" placeholder="Contraseña" required>
                                            <label for="floatingInput">Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingInput" placeholder="Confirmar contraseña" required>
                                            <label for="floatingInput">Confirmar contraseña</label>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <textarea type="text" class="form-control" id="floatingInput" placeholder="Dirección" required></textarea>
                                            <label for="floatingInput">Dirección</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary mt-3" value="Registrarse">
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="text-muted">¿Ya tengo una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>