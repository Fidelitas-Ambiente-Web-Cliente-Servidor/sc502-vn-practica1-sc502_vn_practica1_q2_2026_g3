document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.getElementById('form-contacto');
    const btnEnvio = document.getElementById('btn-envio');
    const exitoMensaje = document.getElementById('mensaje-exito');
    const nombre = document.getElementById('input-nombre');
    const email = document.getElementById('input-email');
    const telefono = document.getElementById('input-telefono');
    const asunto = document.getElementById('input-asunto');
    const mensaje = document.getElementById('Textarea-mensaje');
    const errorNombre = document.getElementById('error-nombre');
    const errorEmail = document.getElementById('error-email');
    const errorTelefono = document.getElementById('error-telefono');
    const errorAsunto = document.getElementById('error-asunto');
    const errorMensaje = document.getElementById('error-mensaje');
    let estadoNombre = false;
    let estadoEmail = false;
    let estadoTelefono = false;
    let estadoAsunto = false;
    let estadoMensaje = false;
    const regexNombre = /^[a-zA-Z\s]+$/;
    const regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const regexTelefono = /^[0-9]+$/;

    function validarNombre() {
        const valor = nombre.value.trim();
        if (valor.length < 5) {
            errorNombre.textContent = "El nombre debe tener al menos 5 caracteres.";
            estadoNombre = false;
        } else if (!regexNombre.test(valor)) {
            errorNombre.textContent = "El nombre solo puede contener letras y espacios.";
            estadoNombre = false;
        } else {
            errorNombre.textContent = "";
            estadoNombre = true;
        }
        actualizarBoton();
    }

    function validarEmail() {
        const valor = email.value.trim();
        if (!regexEmail.test(valor)) {
            errorEmail.textContent = "Formato de correo electrónico inválido.";
            estadoEmail = false;
        } else {
            errorEmail.textContent = "";
            estadoEmail = true;
        }
        actualizarBoton();
    }

    function validarTelefono() {
        const valor = telefono.value.trim();
        if (!regexTelefono.test(valor)) {
            errorTelefono.textContent = "El teléfono solo debe contener números.";
            estadoTelefono = false;
        } else if (valor.length < 8) {
            errorTelefono.textContent = "El teléfono debe tener un mínimo de 8 dígitos.";
            estadoTelefono = false;
        } else {
            errorTelefono.textContent = "";
            estadoTelefono = true;
        }
        actualizarBoton();
    }

    function validarAsunto() {
        const valor = asunto.value.trim();
        if (valor.length < 3) {
            errorAsunto.textContent = "El asunto debe tener al menos 3 caracteres.";
            estadoAsunto = false;
        } else {
            errorAsunto.textContent = "";
            estadoAsunto = true;
        }
        actualizarBoton();
    }

    function validarMensaje() {
        const valor = mensaje.value.trim();
        if (valor.length < 20) {
            errorMensaje.textContent = "El mensaje debe tener al menos 20 caracteres.";
            estadoMensaje = false;
        } else {
            errorMensaje.textContent = "";
            estadoMensaje = true;
        }
        actualizarBoton();
    }

    function actualizarBoton() {
        const formularioValido = estadoNombre && estadoEmail && estadoTelefono && estadoAsunto && estadoMensaje;

        if (formularioValido) {
            btnEnvio.removeAttribute('disabled');
        } else {
            btnEnvio.setAttribute('disabled', 'true');
        }
    }

    nombre.addEventListener('input', validarNombre);
    email.addEventListener('input', validarEmail);
    telefono.addEventListener('input', validarTelefono);
    asunto.addEventListener('input', validarAsunto);
    mensaje.addEventListener('input', validarMensaje);

    /*formulario.addEventListener("submit", function (e) {
        e.preventDefault();

        exitoMensaje.textContent = "¡Formulario enviado exitosamente!";
        exitoMensaje.className = "exito-visible";

        formulario.reset();
        estadoNombre = false;
        estadoEmail = false;
        estadoTelefono = false;
        estadoAsunto = false;
        estadoMensaje = false;
        actualizarBoton();

        setTimeout(() => {
            exitoMensaje.textContent = "";
            exitoMensaje.className = "exito-oculto";
        }, 5000);
    });*/

    // Validación final antes de enviar el formulario
    formulario.addEventListener("submit", function (e) {
        validarNombre();
        validarEmail();
        validarTelefono();
        validarAsunto();
        validarMensaje();

        const formularioValido = estadoNombre && estadoEmail && estadoTelefono && estadoAsunto && estadoMensaje;

        if (!formularioValido) {
            e.preventDefault();
        }
    });
});