@extends('admin.index')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Manual de instalación</h1>
            <div class="card m-4">
                <div class="card-header">
                    <h3>Manual</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card m-3">
                <div class="card-body">
                    <p>Este es un manual de instalación para el sistema EcoPrint3D. A continuación, se describen los pasos necesarios para instalar y configurar el sistema.</p>
                    <h2>Requisitos del sistema</h2>
                    <ul>
                        <li>Servidor web (Apache, Nginx, etc.)</li>
                        <li>Base de datos (MySQL, PostgreSQL, etc.)</li>
                        <li>PHP 7.4 o superior</li>
                        <li>Composer</li>
                    </ul>
                    <h2>Pasos de instalación</h2>
                    <ol>
                        <li>Clonar el repositorio del proyecto desde GitHub.</li>
                        <li>Instalar las dependencias con Composer: `composer install`.</li>
                        <li>Configurar el archivo `.env` con las credenciales de la base de datos.</li>
                        <li>Ejecutar las migraciones: `php artisan migrate`.</li>
                        <li>Iniciar el servidor web y acceder a la aplicación.</li>
                    </ol>
                    <h2>Configuración adicional</h2>
                    <p>Asegúrate de configurar correctamente los permisos de las carpetas necesarias y de revisar la documentación para cualquier configuración adicional que pueda ser necesaria.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card m-4">
                <div class="card-body">
                    <h2>Descargar</h2>
                    <p>Descarga el manual completo.</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection