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
