@extends('admin.index')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Lista de impresoras alquiladas</h1>
        </div>
    </div>
    <div class="card m-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Gestión de Alquiler de Impresoras</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAlquiler">Nuevo Alquiler</button>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Arrendador</th>
                        <th>Arrendatario</th>
                        <th>Impresora</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí irán los registros de alquiler -->
                    <tr>
                        <td>1</td>
                        <td>Juan Pérez</td>
                        <td>Cristhian</td>
                        <td>i3D MK3S</td>
                        <td>2025-07-01</td>
                        <td>2025-07-10</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal para nuevo alquiler -->
    <div class="modal fade" id="modalAlquiler" tabindex="-1" aria-labelledby="modalAlquilerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAlquilerLabel">Nuevo Alquiler</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="arrendador" class="form-label">Nombre del arrendador</label>
                            <input type="text" class="form-control" id="arrendador" placeholder="Nombre del arrendador">
                        </div>
                        <div class="mb-3">
                            <label for="arrendatario" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="arrendatario" placeholder="Nombre del arrendatario">
                        </div>
                        <div class="mb-3">
                            <label for="impresora" class="form-label">Impresora</label>
                            <select class="form-select" id="impresora">
                                <option>Prusa i3 MK3S</option>
                                <option>Creality Ender 3</option>
                                <option>Anycubic Mega S</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                            <input type="date" class="form-control" id="fechaInicio">
                        </div>
                        <div class="mb-3">
                            <label for="fechaFin" class="form-label">Fecha Fin</label>
                            <input type="date" class="form-control" id="fechaFin">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection