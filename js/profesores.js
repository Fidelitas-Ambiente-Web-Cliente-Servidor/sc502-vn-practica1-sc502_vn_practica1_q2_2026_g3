document.addEventListener('DOMContentLoaded', function () {

    const busquedaProfesores = document.getElementById('input-busqueda-profesores');
    const tarjetasProfesores = document.querySelectorAll('.profesor-card');

    if (busquedaProfesores) {
        busquedaProfesores.addEventListener('input', function () {
            const filtro = busquedaProfesores.value.toLowerCase();

            tarjetasProfesores.forEach(tarjeta => {
                const nombre = tarjeta.querySelector('h3').textContent.toLowerCase();
                const especialidad = tarjeta.querySelector('.especialidad').textContent.toLowerCase();
                const contenedorColumna = tarjeta.parentElement;

                if (nombre.includes(filtro) || especialidad.includes(filtro)) {
                    contenedorColumna.style.display = 'block';
                    setTimeout(() => { contenedorColumna.style.opacity = '1'; }, 10);
                } else {
                    contenedorColumna.style.opacity = '0';
                    setTimeout(() => { contenedorColumna.style.display = 'none'; }, 300);
                }
            });
        });
    }

    tarjetasProfesores.forEach(tarjeta => {

        tarjeta.style.transition = 'transform 0.4s ease, box-shadow 0.4s ease';

        tarjeta.addEventListener('mouseenter', function() {
            tarjeta.style.transform = 'translateY(-8px)';
            tarjeta.style.boxShadow = '0 12px 25px rgba(31, 60, 136, 0.2)';
        });

        tarjeta.addEventListener('mouseleave', function() {
            tarjeta.style.transform = 'translateY(0)';
            tarjeta.style.boxShadow = '0 6px 18px rgba(31, 60, 136, 0.12)';
        });
    });

    if (busquedaProfesores) {
        busquedaProfesores.style.transition = 'border 0.3s ease';
        busquedaProfesores.addEventListener('focus', function() {
            this.style.border = '2px solid #4f8cff';
        });
        busquedaProfesores.addEventListener('blur', function() {
            this.style.border = '1px solid #ccc';
        });
    }
});