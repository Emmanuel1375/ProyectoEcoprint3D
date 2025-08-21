@extends('admin.index')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Lista de usuarios</h1>
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between aling-items-center">
                    <h3>usuarios</h3>
                    <a href="{{ route('createUser') }}" class="btn btn-success {{ Route::currentRouteName() == 'usuarios' ? 'active' : '' }}" data-bs-toggle="tooltip"
                                title="Crear Usuario"><i class="fas fa-user-plus"></i></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Carnet</th>
                                <th>Nombres</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Nombre de Usuario</th>
                                <th>Dirección</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Fecha de creación</th>
                                <th>Fecha de modificación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí va el bucle desde la base de datos para agregar los usuarios -->
                            <tr>
                                <td>1</td>
                                <td>78652222</td>
                                <td>Juan</td>
                                <td>Péres</td>
                                <td>Gonzales</td>
                                <td>Jperes</td>
                                <td>Av. ABC</td>
                                <td>Administrador</td>
                                <td>Activo</td>
                                <td>14-08-2025 14:20:20</td>
                                <td>Sin modificar</td>
                                <td>
                                    <a href="{{ route('editUser') }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <form action="" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection