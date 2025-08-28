@extends('admin.index')
@section('contenido')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
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
                                <th>Nombre Completo</th>
                                <th>Nombre de Usuario</th>
                                <th>Dirección</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Creado</th>
                                <th>Modificado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $inicio = 1;
                            ?>
                            @foreach ( $usuarios as $usuario)
                            <tr>
                                <td><?php echo $inicio++; ?></td>
                                <td>{{ $usuario->Carnet }}</td>
                                <td>{{ $usuario->{'Nombre Completo'} }}</td>
                                <td>{{ $usuario->{'Nombre de usuario'} }}</td>
                                <td>{{ $usuario->Dirección }}</td>
                                <td>{{ $usuario->Rol }}</td>
                                <td>{{ $usuario->Estado }}</td>
                                <td>{{ $usuario->Creado }}</td>
                                <td>{{ $usuario->Módificado }}</td>
                                <td>
                                    <a href="{{ route('usuarios.edit', $usuario->ID) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <form action="" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection