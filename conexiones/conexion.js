//https://script.google.com/macros/s/AKfycbzi8izaTJ4Q8U1MgkyIJyRiBBhUVCpAaRUF1uvtN3GRzYGmdAHgpUYtlDazwvmXqLlJ/exec
const URL_CONTADOR = "https://script.google.com/macros/s/AKfycbzi8izaTJ4Q8U1MgkyIJyRiBBhUVCpAaRUF1uvtN3GRzYGmdAHgpUYtlDazwvmXqLlJ/exec";

function cargarContador() {
    const elemento = document.querySelector("#contadorVisitas");

    const callback = "recibirVisitas_" + Date.now();
    const script = document.createElement("script");

    window[callback] = function(datos) {
        elemento.textContent =
            Number(datos.visitas).toLocaleString("es-BO");

        delete window[callback];
        script.remove();
    };

    script.onerror = function() {
        elemento.textContent = "No disponible";
        console.error("Error al conectar con Google Apps Script.");
        delete window[callback];
        script.remove();
    };

    script.src = URL_CONTADOR
        + "?action=increment&callback=" + callback
        + "&t=" + Date.now();

    document.body.appendChild(script);
}

cargarContador();