
// ARRAY DE CURSOS


const cursos = [

    {
        nombre: "Inglés",
        descripcion: "Mejora tu conversación, pronunciación y comprensión para estudios y trabajo.",
        categoria: "Idiomas Populares",
        duracion: "12 semanas",
        precio: "₡120 000",
        imagen: "img/ingles.jpg"
    },

    {
        nombre: "Francés",
        descripcion: "Aprende expresiones útiles, gramática básica y conversación.",
        categoria: "Idiomas Populares",
        duracion: "10 semanas",
        precio: "₡115 000",
        imagen: "img/frances.jpg"
    },

    {
        nombre: "Italiano",
        descripcion: "Descubre la cultura italiana mientras desarrollas tus habilidades lingüísticas.",
        categoria: "Idiomas Populares",
        duracion: "10 semanas",
        precio: "₡110 000",
        imagen: "img/italiano.jpg"
    },

    {
        nombre: "Portugués",
        descripcion: "Aprende uno de los idiomas más hablados de América y Europa.",
        categoria: "Idiomas Internacionales",
        duracion: "8 semanas",
        precio: "₡100 000",
        imagen: "img/portugues.jpg"
    },

    {
        nombre: "Alemán",
        descripcion: "Desarrolla competencias para estudiar o trabajar en Alemania.",
        categoria: "Idiomas Internacionales",
        duracion: "12 semanas",
        precio: "₡130 000",
        imagen: "img/aleman.jpg"
    },

    {
        nombre: "Japonés",
        descripcion: "Aprende hiragana, katakana y conversación básica japonesa.",
        categoria: "Idiomas Internacionales",
        duracion: "14 semanas",
        precio: "₡140 000",
        imagen: "img/japones.jpg"
    }

];


// ELEMENTOS DEL DOM


const contenedorCursos = document.getElementById("contenedorCursos");
const buscador = document.getElementById("buscarCurso");
const botonesCategoria = document.querySelectorAll("#filtros-categoria button");


// VARIABLES DE FILTRO


let textoBusqueda = "";
let categoriaSeleccionada = "Todos";


// MOSTRAR CURSOS


function mostrarCursos(listaCursos) {

    contenedorCursos.innerHTML = "";

    if (listaCursos.length === 0) {

        contenedorCursos.innerHTML = `
            <p class="mensaje">
                No se encontraron cursos con los filtros seleccionados.
            </p>
        `;

        return;
    }

    listaCursos.forEach(function(curso) {

        contenedorCursos.innerHTML += `

            <div class="curso">

                <img src="${curso.imagen}" alt="${curso.nombre}">

                <h3>${curso.nombre}</h3>

                <p>
                    <strong>Categoría:</strong>
                    ${curso.categoria}
                </p>

                <p>
                    ${curso.descripcion}
                </p>

                <p>
                    <strong>Duración:</strong>
                    ${curso.duracion}
                </p>

                <p>
                    <strong>Precio:</strong>
                    ${curso.precio}
                </p>

            </div>

        `;
    });
}


// FILTRAR CURSOS


function filtrarCursos() {

    const cursosFiltrados = cursos.filter(function(curso) {

        const coincideBusqueda =

            curso.nombre.toLowerCase().includes(textoBusqueda.toLowerCase())

            ||

            curso.descripcion.toLowerCase().includes(textoBusqueda.toLowerCase());

        const coincideCategoria =

            categoriaSeleccionada === "Todos"

            ||

            curso.categoria === categoriaSeleccionada;

        return coincideBusqueda && coincideCategoria;
    });

    mostrarCursos(cursosFiltrados);
}


// EVENTO DE BUSQUEDA


buscador.addEventListener("input", function() {

    textoBusqueda = this.value;

    filtrarCursos();

});


// EVENTOS DE CATEGORIA


botonesCategoria.forEach(function(boton) {

    boton.addEventListener("click", function() {

        categoriaSeleccionada = this.dataset.categoria;

        filtrarCursos();

    });

});


// CARGA INICIAL


mostrarCursos(cursos);