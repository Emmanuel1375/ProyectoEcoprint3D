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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card shadow-lg">
                <div class="card-header p-4">
                    <h3 class="text-center">Registrarse</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('usuarios.store') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text"
                                                name="ci"
                                                class="form-control"
                                                id="ci"
                                                placeholder="Carnet"
                                                value="{{ old('ci') }}"
                                                required>
                                        <label for="ci">Carnet</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text"
                                                name="nombres"
                                                class="form-control"
                                                id="nombres"
                                                placeholder="Nombre"
                                                value="{{ old('nombres') }}"
                                                required>
                                        <label for="nombres">Nombres</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text"
                                                name="primerApellido"
                                                class="form-control"
                                                id="primerApellido"
                                                placeholder="Primer apellido"
                                                value="{{ old('primerApellido') }}"
                                                required>
                                        <label for="primerApellido">Primer apellido</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text"
                                                name="segundoApellido"
                                                class="form-control"
                                                id="segundoApellido"
                                                value="{{ old('segundoApellido') }}"
                                                placeholder="Segundo apellido (Opcional)">
                                        <label for="segundoApellido">Segundo apellido (Opcional)</label>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                       <input type="text"
                                                name="nombreUsuario"
                                                class="form-control"
                                                id="nombreUsuario"
                                                placeholder="Nombre de usuario"
                                                value="{{ old('nombreUsuario') }}"
                                                required>
                                        <label for="nombreUsuario">Nombre de usuario</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="password"
                                                name="password"
                                                class="form-control"
                                                id="password"
                                                placeholder="Contraseña"
                                                required>
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="rol" id="rol" required>
                                            <option value="" selected disabled>Seleccione un rol</option>
                                            <option value="Admin" @if(old('rol') == 'Admin') selected @endif>Administrador</option>
                                            <option value="Empleado" @if(old('rol') == 'Empleado') selected @endif>Empleado</option>
                                        </select>
                                        <label for="rol">Rol</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="password"
                                                name="password_confirmation"
                                                class="form-control"
                                                id="password_confirmation"
                                                placeholder="Confirmar contraseña"
                                                required>
                                        <label for="password_confirmation">Confirmar contraseña</label>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <textarea name="direccion"
                                                    class="form-control"
                                                    id="direccion"
                                                    placeholder="Dirección">{{ old('direccion') }}</textarea>
                                        <label for="direccion">Dirección</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">
                            <i class="bi bi-save"></i> Guardar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
