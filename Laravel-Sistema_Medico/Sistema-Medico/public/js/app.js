//Para cambiar el ambiente de la pag
const btnModo = document.querySelector('#btnModo');

btnModo.addEventListener('click', cambiarModo);
function cambiarModo() {
    const datos = document.body.classList.toggle('modo-noche');
    const letras = document.querySelectorAll(".letras, .letras2, article, form, label");
    for (let i = 0; i < letras.length; i++) {
        letras[i].classList.toggle('modo-noche');
    }
    console.clear();
    if (datos) {
        btnModo.textContent = 'Modo Dia';
        console.log("Cambiando a Noche");
    } else {
        btnModo.textContent = 'Modo Noche';
        console.log("Cambiando a Dia");
    }
}
//para el menu hamburgesa
const botonMenu = document.querySelector("#btnMenu");
const menu = document.querySelector("#menuPrincipal");

botonMenu.addEventListener("click", alternarMenu);

function alternarMenu() {
    const menuAbierto = menu.classList.toggle("menu-abierto");

    botonMenu.textContent = menuAbierto ? "✕" : "☰";
    console.clear();
    if (menuAbierto) {
        console.log("Abrir menu");
    } else {
        console.log("Cerrar menu");
    }
    
}


const formulario = document.querySelector("#reserva");
const aviso = document.querySelector("#errorPedido");

if (formulario) {
    formulario.addEventListener("submit", validarDatos);
}


function validarDatos(event) {
const cedula = document.querySelector("#cedula").value;
const nombre = document.querySelector("#nombreCompleto").value;
const comentario = document.querySelector("#Comentario").value;

console.clear();
if (cedula === "") {
    event.preventDefault();
    aviso.textContent = "Error porfavor llene el campo Cedula de identidad";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
    }else if (cedula.length<7) {
        event.preventDefault();
        aviso.textContent= "Error el campo Cedula de identidad tiene que tener 7 digitos"
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }else if(cedula.length>8){
        event.preventDefault();
        aviso.textContent="Error el campo Cedula de identidad no puede ser mayor a 8 digitos";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }
    else if(nombre=== ""){
        event.preventDefault();
    aviso.textContent= "Error porfavor llene el campo nombre completo";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
    }else if(comentario===""){
        event.preventDefault();
    aviso.textContent = "Error porfavor realize un comentario corto de su salud";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
    }


}

const formulario1 = document.querySelector("#formulario1");
const aviso2 = document.querySelector("#errorPedido");

if (formulario1) {
    formulario1.addEventListener("submit", loginvalidar);
}
function loginvalidar(event){
    const usuario=document.querySelector('#nombreUsu');
    const contrasena=document.querySelector('#contrasena');
    if (usuario.value=="") {
        event.preventDefault();
        aviso2.textContent="Error porfavor llene el campo nombre de usuario";
        aviso2.classList.add("error");
        aviso2.classList.remove("exito");
    }else if (contrasena.value=="") {
        event.preventDefault();
        aviso2.textContent="Error porfavor llene el campo contraseña";
        aviso2.classList.add("error");
        aviso2.classList.remove("exito");
    }
}