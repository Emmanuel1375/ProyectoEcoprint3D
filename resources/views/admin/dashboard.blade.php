@extends('admin.index')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div>
                        <h3 class="fw-bold mb-3">Dashboard</h3>
                        <h6 class="op-7 mb-2">Panel de administrador</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-print fa-2x"></i>
                                </div>
                            </div>
                            <div class="col">
                                <p class="card-category mb-1">Total de Impresoras</p>
                                <h4 class="card-title">1</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-handshake fa-2x"></i>
                                </div>
                            </div>
                            <div class="col">
                                <p class="card-category mb-1">Impresoras en Alquiler</p>
                                <h4 class="card-title">1</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-warning fa-2x"></i>
                                </div>
                            </div>
                            <div class="col">
                                <p class="card-category mb-1">Mantenimiento pendimiente</p>
                                <h4 class="card-title">1</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="far fa-clock fa-2x"></i>
                                </div>
                            </div>
                            <div class="col">
                                <p class="card-category mb-1">Alquiler por vencer</p>
                                <h4 class="card-title">1</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <img src="..." alt="Imagen de la impresora 1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        Descripción de la impresora 1.
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-clean btn-round btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <img src="..." alt="Imagen de la impresora 2" class="img-fluid">
                    </div>
                    <div class="card-body">
                        Descripción de la impresora 1.
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-clean btn-round btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <img src="..." alt="Imagen de la impresora 3" class="img-fluid">
                    </div>
                    <div class="card-body">
                        Descripción de la impresora 3.
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-clean btn-round btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
