<?php
function procesarRegistro($nombreUsuario, $correoElectronico, $contrasena)
{
    // Validación del formato del correo electrónico
    if (!filter_var($correoElectronico, FILTER_VALIDATE_EMAIL)) {
        return "El correo electrónico no es válido.";
    }
    // Validación de la longitud de la contraseña
    if (strlen($contrasena) < 6) {
        return "La contraseña debe tener al menos 6 caracteres.";
    }
    // Registro exitoso (agregar código para el registro en la base de datos)
    // Guardar en $_SESSION
    
    // Redirige al jugador a la página de inicio de sesión
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["username"];
    $correoElectronico = $_POST["mail"];
    $contrasena = $_POST["password"];
    // Procesa el registro utilizando la función procesarRegistro
    $resultado = procesarRegistro($nombreUsuario, $correoElectronico, $contrasena);
    // Si hay un resultado, muestra un mensaje de error
    if ($resultado) {
        echo $resultado;
    }
}
