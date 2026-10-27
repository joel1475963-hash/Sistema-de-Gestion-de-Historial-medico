@include('layouts.header')
<main class="contenedor-principal">
<div class="div-centrado">
<h3>Pacientes registrados</h3>
@if (session('succeful'))
    <p class="registrado">{{ session('succeful') }}</p>
@endif
    <p>{{ $cantidadPacientes }} de 10 pacientes</p>
        
    <a class="boton1" href="{{ url('/inicio') }}">Volver al inicio</a>
</div>
</main>
@include('layouts.footer')