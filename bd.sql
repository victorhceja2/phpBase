-- Crear la base de datos
CREATE DATABASE bd1;

-- Usar la base de datos
USE bd1;

-- Crear la tabla de películas
CREATE TABLE peliculas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  genero VARCHAR(100),
  ano YEAR,
  director VARCHAR(100),
  actores TEXT,
  sinopsis TEXT,
  calificacion INT,
  vista BOOLEAN DEFAULT FALSE
);