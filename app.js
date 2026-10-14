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
//para el menu amburgesa
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

formulario.addEventListener("submit", validarDatos);

function validarDatos(event) {
const cedula = document.querySelector("#cedula").value;
const nombre = document.querySelector("#nombreCompleto").value;
const comentario = document.querySelector("#Comentario").value;

event.preventDefault();
console.clear();
if (cedula === "") {
    aviso.textContent = "Error porfavor llene Cedula de identidad";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
    }else if (cedula.length<7) {
        aviso.textContent= "Error el campo Cedula de identidad tiene que tener 7 digitos"
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }else if(cedula.length>=8){
        aviso.textContent="Error el campo Cedula de identidad no puede ser mayor a 7 digitos";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }
    else if(nombre=== ""){
    aviso.textContent= "Error porfavor llene el campo nombre completo";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
    }else if(comentario===""){
    aviso.textContent = "Error porfavor realize un comentario";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
    }else{
        aviso.textContent = "Reserva registrada";
    aviso.classList.add("exito");
    aviso.classList.remove("error");
    console.log("Reserva registrada");
    }

}