<?php
// Conexión a la base de datos (ajusta los datos)
$servername = "localhost";
$username = "root";
$password = "innovacionMovil2024*";
$dbname = "bd1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Consulta para obtener todas las películas
  $stmt = $conn->prepare("SELECT * FROM peliculas");
  $stmt->execute();
  $peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mi Colección de Películas</title>
</head>
<body>
  <h1>Mis Películas</h1>

  prints_r($peliculas)
  
  <table>
    <thead>
      <tr>
        <th>Título</th>
        <th>Género</th>
        <th>Año</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($peliculas as $pelicula): ?>
        <tr>
          <td><?= $pelicula['titulo'] ?></td>
          <td><?= $pelicula['genero'] ?></td>
          <td><?= $pelicula['ano'] ?></td>
          <td>
            <a href="editar.php?id=<?= $pelicula['id'] ?>">Editar</a>
            <a href="eliminar.php?id=<?= $pelicula['id'] ?>">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>