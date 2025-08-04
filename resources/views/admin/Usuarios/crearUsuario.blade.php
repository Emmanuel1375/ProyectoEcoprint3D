@extends('admin.index')
@section('contenido')
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-auto">
            <a href="{{ route('usuarios') }}"><i class="bi bi-arrow-left-square fs-2"></i></a>
        </div>
        <div class="col-auto">
            <h1 class="text-center my-4">Crear Usuario</h1>
        </div>
    </div>
    <div class="row">
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
                                        <input type="text"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Carnet"
                                                required>
                                        <label for="floatingInput">Carnet</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Nombre"
                                                required>
                                        <label for="floatingInput">Nombres</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Primer apellido"
                                                required>
                                        <label for="floatingInput">Primer apellido</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Segundo apellido (Opcional)">
                                        <label for="floatingInput">Segundo apellido (Opcional)</label>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Correo electrónico"
                                                required>
                                        <label for="floatingInput">Correo electrónico</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Nombre de usuario"
                                                required>
                                        <label for="floatingInput">Nombre de usuario</label>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="password"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Contraseña"
                                                required>
                                        <label for="floatingInput">Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="password"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Confirmar contraseña"
                                                required>
                                        <label for="floatingInput">Confirmar contraseña</label>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <textarea type="text"
                                                    class="form-control"
                                                    id="floatingInput"
                                                    placeholder="Dirección"
                                                    required>
                                        </textarea>
                                        <label for="floatingInput">Dirección</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">
                            <i class="bi bi-save"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
