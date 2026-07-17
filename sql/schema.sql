CREATE DATABASE IF NOT EXISTS academiapro_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE academiapro_db;

-- Tabla cursos destacados
CREATE TABLE IF NOT EXISTS cursos_destacados (
  id           INT           NOT NULL AUTO_INCREMENT,
  nombre       VARCHAR(100)  NOT NULL,
  descripcion  TEXT          NOT NULL,
  imagen_url   VARCHAR(500)  NOT NULL,
  alt_imagen   VARCHAR(255)  NOT NULL,
  enlace       VARCHAR(255)  NOT NULL DEFAULT 'index.php?controller=cursos&action=index',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO cursos_destacados (nombre, descripcion, imagen_url, alt_imagen, enlace) VALUES
  ('Ingles', 'Mejora tu conversación, pronunciación y comprensión para estudios, trabajo o viajes internacionales.', 'https://images.unsplash.com/photo-1527866959252-deab85ef7d1b?auto=format&fit=crop&w=900&q=80', 'Estudiantes aprendiendo inglés', 'index.php?controller=cursos&action=index'),
  ('Frances', 'Aprende expresiones útiles, gramática básica y conversación para comunicarte con más seguridad.', 'https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=900&q=80', 'Ciudad europea relacionada con idioma francés', 'index.php?controller=cursos&action=index'),
  ('Japones', 'Inicia con vocabulario, hiragana, katakana y frases básicas para conocer mejor el idioma y la cultura japonesa.', 'https://images.unsplash.com/photo-1528360983277-13d401cdc186?auto=format&fit=crop&w=900&q=80', 'Paisaje urbano de Japón', 'index.php?controller=cursos&action=index');

-- Tabla contacto
CREATE TABLE IF NOT EXISTS contacto (
  id           INT           NOT NULL AUTO_INCREMENT,
  nombre       VARCHAR(100)  NOT NULL,
  email        VARCHAR(150)  NOT NULL,
  telefono     VARCHAR(20)   NOT NULL,
  asunto       VARCHAR(150)  NOT NULL,
  mensaje      TEXT          NOT NULL,
  created_at   TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO contacto (nombre, email, telefono, asunto, mensaje) VALUES
  ('Maria Fernanda Rojas',  'mfrojas@example.com',  '88112233', 'Consulta sobre horarios', 'Buenas tardes, quiero saber cuales son los horarios disponibles para el curso de inglés intermedio.'),
  ('Carlos Andres Mora',    'camora@example.com',   '87445566', 'Consulta de precios', 'Hola, me gustaria conocer cual es el costo mensual del curso de aleman y que incluye.'),
  ('Laura Jimenez Solano',  'ljimenez@example.com', '86778899', 'Clases para principiantes', 'Estoy interesada en un curso de japones para principiantes.'),
  ('Diego Alberto Vargas',  'davargas@example.com', '89001122', 'Certificacioness', 'Quisiera saber si al terminar el curso de frances se entrega algun tipo de certificacion oficial.'),
  ('Sofia Castro Herrera',  'scastro@example.com',  '85334455', 'Clases corporativas', 'Buenas, represento a una empresa y queremos cotizar clases grupales de italiano para empleados.');
