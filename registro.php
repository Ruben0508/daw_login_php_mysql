<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-md mx-auto bg-white p-8 border rounded-md mt-10">
    <h1 class="text-2xl font-semibold mb-6">Registro</h1>
    <form method="post" action="registro-action.php">
        <div class="mb-4">
            <label for="nombre" class="block text-gray-600 text-sm font-medium mb-2">Nombre de usuario</label>
            <input type="text" id="nombre" name="nombre" class="w-full p-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="contrasena" class="block text-gray-600 text-sm font-medium mb-2">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" class="w-full p-2 border rounded-md">
        </div>
        <div class="mb-6">
            <input type="submit" value="Registrar" class="w-full bg-blue-500 text-white p-2 rounded-md cursor-pointer">
        </div>
    </form>
</div>

</body>
</html>
