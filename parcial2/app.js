
const formulario = document.querySelector("#form-horno");
const aviso = document.querySelector("#aviso-horno");

function validarFormulario(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const pedido = document.querySelector("#pedido").value;

    if (nombre === "" || correo === "") {
        event.preventDefault();
        aviso.textContent = "Porfavor llene el campo nombre completo";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    }else if(correo===""){
        event.preventDefault();
        aviso.textContent = "Porfavor llene el campo correo electronico";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    } 
    else if (!correo.includes("@")) {
        event.preventDefault();
        aviso.textContent = "Porfavor incluya @ para validar el correo";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    } else {
        aviso.textContent = "Pedido tomado - te atiende".nombre;
        aviso.classList.add("exito");
        aviso.classList.remove("error");
    }
}

formulario.addEventListener("submit", validarFormulario);
