<!doctype html>
<html lang="en">

<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('dashmin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashmin/bootstrap/css/style.css') }}">
    
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
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