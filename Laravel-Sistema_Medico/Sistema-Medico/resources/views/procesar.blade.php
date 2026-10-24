@include('layouts.header')
<h2>Datos del paciente</h2>

<p>Cedula: {{ $paciente->ci }}</p>
<p>Nombre: {{ $paciente->nombre }}</p>
<p>Comentario: {{ $paciente->comentario }}</p>

<a href="{{ url('/') }}">Volver al inicio</a>
@include('layouts.footer')