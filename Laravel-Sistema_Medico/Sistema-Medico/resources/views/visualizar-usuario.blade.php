@include('layouts.header')

<main class="contenedor-principal">
<h2>Pacientes registrados</h2>
<h2>Bienvenido {{ session('nombreUsu') }}</h2>
@foreach ($pacientes as $paciente)
    <p>Nombre: {{ $paciente->nombre }}</p>
    <p>Comentario: {{ $paciente->comentario }}</p>
    <hr>
@endforeach
</main>

@include('layouts.footer')