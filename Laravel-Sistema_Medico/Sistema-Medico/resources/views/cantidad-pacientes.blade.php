@include('layouts.header')
<main class="contenedor-principal">
<div class="div-centrado">
<h3>Pacientes registrados</h3>
@if (session('error'))
    <p class="error-dato">{{ session('error') }}</p>
@endif
    <p>{{ $cantidadPacientes }} de 10 pacientes</p>
        
    <a href="{{ url('/inicio') }}">Volver al inicio</a>
</div>
</main>
@include('layouts.footer')