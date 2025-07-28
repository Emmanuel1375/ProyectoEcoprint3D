<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle ?? 'Dashboard' }} | EcoPrint3D</title>
    <link rel="shortcut icon" href="{{ asset('dashmin/img/favicon.webp') }}" type="image/x-icon">

    <script>
        // Script bloqueante para evitar el "destello" (FOUC) del tema.
        // Se ejecuta antes de que se renderice el DOM para aplicar el tema correcto.
        (() => {
            'use strict';
            const getPreferredTheme = () => {
                const storedTheme = localStorage.getItem('theme');
                if (storedTheme) {
                    return storedTheme;
                }
                // Si no hay tema guardado, usa la preferencia del sistema.
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            };

            const theme = getPreferredTheme();
            if (theme) {
                document.documentElement.setAttribute('data-bs-theme', theme);
            }
        })();
    </script>

    <link rel="stylesheet" href="{{ asset('dashmin/css/bootstrap.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('dashmin/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow fixed-top shadow-sm px-3 navbar-bg">
        <div class="container-fluid">
            <!-- Botón para mostrar el sidebar en móviles (Offcanvas) -->
            <button class="btn btn-outline d-lg-none me-2"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMobile">

                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
                <img src="{{ asset('dashmin/img/logo-EcoPrint3D.png') }}" alt="logo EcoPritn3D" width="170px">
            </a>

            <!-- Contenedor de opciones solo visibles en pantallas grandes (lg y superiores) -->
            <div class="d-none d-lg-flex align-items-center ms-auto">
                <!-- Formulario de búsqueda (oculto en pantallas pequeñas) -->
                <form class="d-none d-md-flex me-3" role="search">
                    <input class="form-control form-control-sm"
                        type="search"
                        placeholder="Buscar..."
                        aria-label="Buscar" />
                </form>
                <!-- Dropdown de Mensajes -->
                <div class="dropdown me-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMensajes"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-envelope"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMensajes">
                        <li>
                            <h6 class="dropdown-header">Mensajes</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Mensaje 1: ¡Hola!</a></li>
                        <li><a class="dropdown-item" href="#">Mensaje 2: ¿Cómo
                                estás?</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-center" href="#">Ver todos los
                                mensajes</a></li>
                    </ul>
                </div>
                <!-- Dropdown de Notificaciones -->
                <div class="dropdown me-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownNotificaciones"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownNotificaciones">
                        <li>
                            <h6 class="dropdown-header">Notificaciones</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Tienes una nuevaalerta</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Actualización disponible</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-center" href="#">Ver todas las
                                notificaciones</a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown de Perfil de Usuario -->
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownPerfil"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownPerfil">
                        <li>
                            <h6 class="dropdown-header">Mi Perfil</h6>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Ver perfil</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Configuración</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-danger" href="#">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown para Selector de Tema (Escritorio) -->
                <div class="dropdown ms-2">
                    <button class="btn btn-outline-secondary dropdown-toggle"
                        type="button" id="theme-device"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-moon-stars"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="theme-device">
                        <li>
                            <h6 class="dropdown-header">Tema</h6>
                        </li>
                        <!-- Opción Tema Claro -->
                        <li>
                            <label class="dropdown-item" for="light">
                                <input type="radio" name="appearance" id="light" value="light" checked>
                                <i class="bi bi-sun me-2"></i>Claro
                            </label>
                        </li>
                        <!-- Opción Tema Oscuro -->
                        <li>
                            <label class="dropdown-item" for="dark">
                                <input type="radio" name="appearance" id="dark" value="dark" checked>
                                <i class="bi bi-moon me-2"></i>Oscuro
                            </label>
                        </li>
                        <!-- Opción Tema del Sistema/Dispositivo -->
                        <li>
                            <label class="dropdown-item" for="device">
                                <input type="radio" name="appearance" id="device" value="device" checked>
                                <i class="bi bi-circle-half me-2"></i>Sistema
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- =================================================================
    SIDEBAR FIJO (SOLO PARA ESCRITORIO)
    ================================================================== -->
    <div id="sidebar-desktop" class="d-none d-lg-block sidebar-bg shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 ">
                    <!-- Botón para colapsar/expandir el sidebar de escritorio -->
                    <div class="d-flex justify-content-end mb-3">
                        <button id="toggleSidebar" class="btn btn-outline-dark mb-3">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                    </div>
                    <hr class="bg-secondary mb-3" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Menú de navegación principal del sidebar -->
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard') }}" data-bs-toggle="tooltip"
                                title="Inicio"><i class="bi bi-house"></i>
                                <span class="text-label ms-2">Dashboard</span></a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'impresoras' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('impresoras') }}" data-bs-toggle="tooltip"
                                title="Impresoras"><i class="bi bi-box"></i>
                                <span class="text-label ms-2">Impresoras</span></a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'manual' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('manual') }}" data-bs-toggle="tooltip"
                                title="Manual"><i class="bi bi-file-earmark-text"></i>
                                <span class="text-label ms-2">Manual</span></a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'usuarios' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('usuarios') }}" data-bs-toggle="tooltip"
                                title="Usuarios"><i class="bi bi-people"></i>
                                <span class="text-label ms-2">Usuarios</span></a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'alquiler' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('alquiler') }}" data-bs-toggle="tooltip"
                                title="Alquiler"><i class="bi bi-bag-check"></i>
                                <span class="text-label ms-2">Alquiler</span></a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'reporte' ? 'active' : '' }}">
                            <a class="nav-link" href="#" data-bs-toggle="tooltip" title="Reporte"><i
                                    class="bi bi-file-earmark-bar-graph"></i>
                                <span class="text-label ms-2">Reporte</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="tooltip" title="Salir"><i
                                    class="bi bi-box-arrow-right"></i> <span class="text-label ms-2">Salir</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- =================================================================
    SIDEBAR MÓVIL (OFFCANVAS)
    ================================================================== -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMobile">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menú</h5>
            <button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Contenedor para elementos del header que se muestran en el sidebar móvil -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3  d-block d-lg-none">
                            <div class="d-flex gap-2">
                                <!-- Dropdown de Mensajes (Móvil) -->
                                <div class="dropdown me-2">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        id="dropdownMensajesMovil" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-envelope"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="dropdownMensajesMovil">
                                        <li>
                                            <h6 class="dropdown-header">Mensajes</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Mensaje 1:
                                                ¡Hola!</a></li>
                                        <li><a class="dropdown-item" href="#">Mensaje 2: ¿Cómo
                                                estás?</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item text-center" href="#">Ver
                                                todos los
                                                mensajes</a></li>
                                    </ul>
                                </div>
                                <!-- Dropdown de Notificaciones (Móvil) -->
                                <div class="dropdown me-2">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        id="dropdownNotificacionesMovil" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-bell"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="dropdownNotificacionesMovil">
                                        <li>
                                            <h6 class="dropdown-header">Notificaciones</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Tienes una nueva
                                                alerta</a></li>
                                        <li><a class="dropdown-item" href="#">Actualización
                                                disponible</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item text-center" href="#">Ver
                                                todas las
                                                notificaciones</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3 d-block d-lg-none">
                            <div class="d-flex gap">
                                <!-- Dropdown de Perfil (Móvil) -->
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        id="dropdownPerfilMovil" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-circle"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownPerfilMovil">
                                        <li>
                                            <h6 class="dropdown-header">Mi Perfil</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Ver perfil</a></li>
                                        <li><a class="dropdown-item" href="#">Configuración</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Cerrar
                                                sesión</a></li>
                                    </ul>
                                </div>
                                <!-- Dropdown de Selector de Tema (Móvil) -->
                                <div class="dropdown ms-2">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        id="theme-movil" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-moon-stars"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="theme-movil">
                                        <li>
                                            <h6 class="dropdown-header">Tema</h6>
                                        </li>
                                        <li>
                                            <label class="dropdown-item" for="light">
                                                <input type="radio" name="appearance" id="light"
                                                    value="light" checked>
                                                <i class="bi bi-sun me-2"></i>Claro
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item" for="dark">
                                                <input type="radio" name="appearance" id="dark"
                                                    value="dark" checked>
                                                <i class="bi bi-moon me-2"></i>Oscuro
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item" for="device">
                                                <input type="radio" name="appearance" id="device"
                                                    value="device" checked>
                                                <i class="bi bi-circle-half me-2"></i>Sistema
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3 d-block d-lg-none">
                            <form class="mb-2">
                                <input class="form-control form-control-sm" type="search" placeholder="Buscar..."
                                    aria-label="Buscar" />
                            </form>
                            <hr class="bg-secondary mt-3 mb-2" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menú de navegación principal del sidebar móvil -->
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('impresoras') }}"><i class="bi bi-box"></i> Impresoras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manual') }}"><i class="bi bi-file-earmark-text"></i>
                        Manual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios') }}"><i class="bi bi-people"></i> Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alquiler') }}"><i class="bi bi-bag-check"></i> Alquiler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph"></i> Reporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-box-arrow-right"></i> Salir</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- =================================================================
    CONTENIDO PRINCIPAL DE LA PÁGINA
    ================================================================== -->
    <div id="main-content" class="pt-5">
        <div class="container mt-4 mb-4">
            @yield('contenido')
        </div>
    </div>

    <!-- =================================================================
    PIE DE PÁGINA (FOOTER)
    ================================================================== -->
    <footer class="footer-bg shadow text-muted py-3">
        <div class="container">
            <div class="row align-items-center pb-2">
                <div class="col-md-6 d-flex align-items-center">
                    <!-- Logotipo y nombre de la app en el footer -->
                    <img src="{{ asset('dashmin/img/logo-EcoPrint3D.png') }}" alt="Logo" width="170px" height="auto">
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="#" class="text-muted me-3 text-decoration-none">Acerca
                        de</a>
                    <a href="#" class="text-muted text-decoration-none">Contáctenos</a>
                </div>
            </div>
            <hr class="my-2">
            <div class="row">
                <div class="col-12 text-center">
                    <small>&copy; 2025 MiApp. Todos los derechos reservados. | Desarrollado por <strong>Guardia Alcocer
                            Cristhian Eddy</strong> y <strong>Echalar Claros
                            Emmanuel</strong>.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('dashmin/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashmin/js/script.js') }}"></script>
</body>

</html>
