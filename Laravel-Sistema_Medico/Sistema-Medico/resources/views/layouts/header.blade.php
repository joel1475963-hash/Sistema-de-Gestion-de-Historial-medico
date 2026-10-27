<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
    <title>Sistema de Gestión de Historial Medico</title>
</head>
<body>
    <header id="inicio">
        <h1 class="titulo">Sistema web de Gestion de historial Medico</h1>
    </header>
    <div class="div-centrado">
        <button id="btnModo" class="btn-modo">Modo Noche</button>
    </div>
    <nav class="navbar">
        <h3 class="titulo-menu">Menú</h3>
    
        <button
            id="btnMenu"
            type="button"
            class="btn-hamburguesa"
            aria-label="Abrir menú"
            aria-expanded="false"
        >
            ☰
        </button>
    
        <ul class="menu" id="menuPrincipal">
            <li><a href="{{ asset('inicio') }}#inicio">Inicio</a></li>
            <li><a href="{{ asset('inicio') }}#proposito">Propósito</a></li>
            <li><a href="{{ asset('inicio') }}#reserva">Reservar ficha</a></li>
            <li><a href="{{ asset('inicio') }}#contacto">Contacto</a></li>
            <li><a href="{{ url('/cantidad-pacientes') }}">Pacientes registrados</a></li>
            @if (session()->has('usuario_id'))
            <li><a href="{{ url('/visualizar-usuario') }}">Ver pacientes</a></li>
                <li>
                    <form action="{{ url('/cerrar-sesion') }}" method="POST">
                        @csrf
                        <button class="enlace-menu" type="submit">Cerrar sesion</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ url('/login') }}">Iniciar sesion</a>
                </li>
            @endif
        </ul>
    </nav>

