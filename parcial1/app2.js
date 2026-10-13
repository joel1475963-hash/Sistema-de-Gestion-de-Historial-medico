function confirmarEncargo() { 
    let nombre = document.querySelector("#nombre").value; 
    let mensaje = document.querySelector("#mensaje"); 
    mensaje.textContent = "Encargo recibido - te atiende " + nombre; 
    mensaje.classList.remove("oculto"); 
}
document.querySelector("#btn-confirmar").addEventListener("click", confirmarEncargo); 
