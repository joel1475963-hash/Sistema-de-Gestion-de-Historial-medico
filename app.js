const btnModo = document.getElementById('btnModo');

btnModo.addEventListener('click', () => {
    document.body.classList.toggle('modo-noche');
    
    if (document.body.classList.contains('modo-noche')) {
        btnModo.textContent = 'Modo Día';
    } else {
        btnModo.textContent = 'Modo Noche';
    }
});



const btnMenu = document.getElementById("btnMenu");
const menu = document.getElementById("menuPrincipal");

btnMenu.addEventListener("click", function () {
    if (menu.style.display === "none") {
        menu.style.display = "block";
        btnMenu.textContent = "Ocultar menú";
    } else {
        menu.style.display = "none";
        btnMenu.textContent = "Mostrar menú";
    }
});