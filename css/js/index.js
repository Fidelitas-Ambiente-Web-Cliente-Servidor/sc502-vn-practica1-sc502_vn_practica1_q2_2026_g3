const cursosDestacados = [
  {
    nombre: "Inglés",
    descripcion:
      "Mejora tu conversación, pronunciación y comprensión para estudios, trabajo o viajes internacionales.",
    imagen:
      "https://images.unsplash.com/photo-1527866959252-deab85ef7d1b?auto=format&fit=crop&w=900&q=80",
    categoria: "Idioma internacional"
  },
  {
    nombre: "Francés",
    descripcion:
      "Aprende expresiones útiles, gramática básica y conversación para comunicarte con más seguridad.",
    imagen:
      "https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=900&q=80",
    categoria: "Idioma europeo"
  },
  {
    nombre: "Japonés",
    descripcion:
      "Inicia con vocabulario, hiragana, katakana y frases básicas para conocer mejor el idioma y la cultura japonesa.",
    imagen:
      "https://images.unsplash.com/photo-1528360983277-13d401cdc186?auto=format&fit=crop&w=900&q=80",
    categoria: "Idioma asiático"
  }
];

const contenedorCursos = document.getElementById("cursos-destacados");

cursosDestacados.forEach((curso) => {
  const columna = document.createElement("div");
  columna.classList.add("col-12", "col-md-4");

  const tarjeta = document.createElement("article");
  tarjeta.classList.add("course-card");

  const imagen = document.createElement("img");
  imagen.src = curso.imagen;
  imagen.alt = `Curso de ${curso.nombre}`;

  const info = document.createElement("div");
  info.classList.add("card-info");

  const categoria = document.createElement("span");
  categoria.classList.add("course-category");
  categoria.textContent = curso.categoria;

  const titulo = document.createElement("h3");
  titulo.textContent = curso.nombre;

  const descripcion = document.createElement("p");
  descripcion.textContent = curso.descripcion;

  const enlace = document.createElement("a");
  enlace.href = "cursos.html";
  enlace.textContent = "Ver más";

  info.appendChild(categoria);
  info.appendChild(titulo);
  info.appendChild(descripcion);
  info.appendChild(enlace);

  tarjeta.appendChild(imagen);
  tarjeta.appendChild(info);

  columna.appendChild(tarjeta);

  contenedorCursos.appendChild(columna);
});