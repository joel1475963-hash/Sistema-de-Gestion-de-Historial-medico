@include('layouts.header')

<main class="contenedor-principal">
    <div class="div-centrado2">
    <a class="boton1" href="{{url('usuario')}}">Inicio sesion como usuario</a>
    <a class="boton1" href="{{url('paciente')}}">Iniciar sesion como paciente</a>
    </div>
</main>

@include('layouts.footer')