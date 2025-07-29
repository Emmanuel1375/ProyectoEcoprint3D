@extends('admin.index')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Impresoras</h1>
            <div class="card m-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Lista de Impresoras</h3>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalImpresora"><i class="fas fa-plus"></i></button>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Modelo</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>Impresora 1</td>
                                <td>Impresora 2</td>
                                <td>Impresora 3</td>
                                <td>Impresora 4</td>
                                <td>
                                    <!-- Aquí puedes agregar botones para editar o eliminar -->
                                    <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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