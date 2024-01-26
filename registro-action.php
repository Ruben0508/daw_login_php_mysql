<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    // Conectar a la base de datos
    $conexion = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    // Preparar la consulta SQL con una sentencia preparada para evitar inyecciones SQL
    $consulta = $conexion->prepare('INSERT INTO usuarios (nombre, contraseña) VALUES (:nombre, :contrasena)');

    // Bind de parámetros
    $consulta->bindParam(':nombre', $nombre);
    $consulta->bindParam(':contrasena', $contrasena);

    // Ejecutar la consulta
    $consulta->execute();

    // Redirigir a la página de bienvenida o mostrar un mensaje de éxito
    header('Location: welcome.php');
    exit();
}
?>
