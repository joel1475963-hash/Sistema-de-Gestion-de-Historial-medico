@include('layouts.header')
<main class="contenedor-principal">
    <h2>Datos del paciente</h2>

    <p>Cedula: {{ $paciente->ci }}</p>
    <p>Nombre: {{ $paciente->nombre }}</p>
    <p>Comentario: {{ $paciente->comentario }}</p>

    <h3>Pacientes registrados</h3>
    <p>{{ $cantidadPacientes }} de 10 pacientes</p>

    <a class="boton1" href="{{ url('/inicio') }}">Volver al inicio</a>
</main>
@include('layouts.footer')