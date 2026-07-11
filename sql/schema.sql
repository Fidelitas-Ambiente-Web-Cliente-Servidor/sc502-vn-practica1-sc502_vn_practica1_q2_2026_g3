CREATE DATABASE IF NOT EXISTS academiapro_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE academiapro_db;

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
