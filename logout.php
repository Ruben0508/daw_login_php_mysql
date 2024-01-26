session_start();

// Destruye todas las variables de sesión
session_unset();
session_destroy();

// Redirige a la página de inicio
header("Location: index.php");
exit();