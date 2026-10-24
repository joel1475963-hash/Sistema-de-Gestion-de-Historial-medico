@include('layouts.header');
<main class="contenedor-principal" id="proposito">
        <section>
            <p class="letras">
                Plataforma centralizada para la administración de historiales clínicos, 
                medicos, recetas y seguimiento del paciente.
            </p>
        </section>
        <section>
            <h2 class="titulo2">¿Que ofrece la plataforma web?</h2>
            <div class="contenedor-tarjetas">
                <article>
                    <h3 class="titulo3">Para el Personal Medico</h3>
                    <ul class="letras2">
                        <li>Registro y actualización de historiales clinicos.</li>
                        <li>Generacion y emisión de recetas digitales.</li>
                        <li>Consulta centralizada de antecedentes de pacientes.</li>
                    </ul>
                </article>

                <article>
                    <h3 class="titulo3">Para los Pacientes</h3>
                    <ul class="letras2">
                        <li>Acceso seguro a recetas e indicaciones de salud.</li>
                        <li>Consulta de historial de atención médica.</li>
                    </ul>
                </article>
            </div>
            <form action="{{route('pacientes.guardar')}}" class="formulario-reserva" id="reserva" method="post" novalidate>
            @csrf    
                <h3 class="titulo3">Necesitas atencion medica realiza tu reserva</h3>
            <div class="campo">
                <label for="ci">Cedula de identidad</label>
                <input type="number" id="cedula" name="ci" required>
            </div>
            <div class="campo">
                <label for="nombre completo">Nombre Completo</label>
                <input type="text" id="nombreCompleto" name="nombre" required>
            </div>
            <div class="campo">
                <label for="comentario">Comentario</label>
                <input type="text" id="Comentario" name="comentario" required>
            </div>
            <div class="campo">
                <button type="submit" class="boton1" id="botonform">Enviar</button>
            </div>
            <p id="errorPedido" class="aviso">error</p>
            </form>
        </section>
        
    </main>
@include('layouts.footer')