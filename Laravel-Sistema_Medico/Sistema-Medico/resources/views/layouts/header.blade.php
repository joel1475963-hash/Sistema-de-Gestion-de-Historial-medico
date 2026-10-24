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
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#proposito">Propósito</a></li>
            <li><a href="#reserva">Reservar ficha</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

