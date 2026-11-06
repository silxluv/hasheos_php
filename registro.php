<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="contenedor">
        <h2>Registro</h2>
        <form method="POST" action="">
            <label>Nombre: </label>
            <input type="text" name="nombre" required>

            <label>Nombre de usuario: </label>
            <input type="text" name="usuario" required>

            <label>Contraseña: </label>
            <input type="text" name="contraseña" required>

            <label>Confirmación de contraseña: </label>
            <input type="text" name="confirmacion" required>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>