@include('layouts.header')

<main class="contenedor-principal">
    <form action="{{ url('/validar-usuario') }}" method="POST" class="formulario" id="formulario1" novalidate>
        @csrf

        <h2>Inicio de sesion</h2>

        <div class="campo">
            <label for="nombreUsu">Nombre de usuario</label>
            <input type="text" id="nombreUsu" name="nombreUsu" required>
        </div>

        <div class="campo">
            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>

        <button type="submit" class="boton1">Iniciar sesion</button>
        <p id="errorPedido" class="aviso">error</p>
        @if (session('mensaje'))
        <p id="errorPedido" class="error-dato">{{ session('mensaje') }}</p>
        @endif
    </form>
</main>

@include('layouts.footer')