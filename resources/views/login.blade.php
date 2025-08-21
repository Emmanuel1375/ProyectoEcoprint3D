<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('dashmin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashmin/bootstrap/css/style.css') }}">

</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="row justify-center-content-center align-items-center w-75">
            <div class="col-sm-8">
                <h1>Bienvenido a PrintGo3D</h1>
                <h3>Tu Solución de Impresión</h3>
                <p>Inicia sesión para acceder a tu cuenta y gestionar tus proyectos de impresión 3D con facilidad.</p>
            </div>
            <div class="col-sm-4">
                <div class="card shadow-lg">
                    <div class="card-header p-4">
                        <h3 class="text-center">Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Nombre de Usuario</label>
                            </div><br>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Contraseña</label>
                            </div>
                            <input type="submit" class="btn btn-primary mt-3" value="Iniciar Sesión">
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="text-muted">¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
