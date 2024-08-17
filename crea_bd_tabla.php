<?php
// Datos de conexión a la base de datos (ajusta estos valores)
$servername = "localhost";
$username = "root";
$password = "innovacionMovil2024*";

try {
    // Crear una nueva conexión PDO
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear la base de datos
    $sql = "CREATE DATABASE bd1";
    $conn->exec($sql);
    echo "Base de datos creada exitosamente<br>";

    // Usar la base de datos creada
    $conn->exec("USE bd1");

    // Crear la tabla de películas
    $sql = "CREATE TABLE peliculas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(255) NOT NULL,
        genero VARCHAR(100),
        ano YEAR,
        director VARCHAR(100),
        actores TEXT,
        sinopsis TEXT,
        calificacion INT,
        vista BOOLEAN DEFAULT FALSE
    )";
    $conn->exec($sql);
    echo "Tabla peliculas creada exitosamente";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>