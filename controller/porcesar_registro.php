<?php
// Función para procesar el registro de nuevos jugadores
function procesarRegistro($nombreUsuario, $correoElectronico, $contrasena) {
    // Validación del formato del correo electrónico
    if (!filter_var($correoElectronico, FILTER_VALIDATE_EMAIL)) {
        return "El correo electrónico no es válido.";
    }
    // Validación de la longitud de la contraseña
    if (strlen($contrasena) < 6) {
        return "La contraseña debe tener al menos 6 caracteres.";
    }

    // Registro exitoso (agregar código para el registro en la base de datos)

    $users = get_users();

    // Validar que el usuario no exista ya
    foreach ($users as $user) {
        if ($user['username'] === $nombreUsuario) {
            return ['status' => 'error', 'message' => 'El usuario ya existe.'];
        }
    }

    array_push($users, [
        'username' => $nombreUsuario,
        'password' => password_hash($contrasena, PASSWORD_DEFAULT),
        'mail' => $correoElectronico
    ]);
    error_log(print_r($users, true));
    file_put_contents('../users.json', json_encode($users));
    error_log(print_r($users, true));
    return ['status' => 'success', 'message' => 'Usuario añadido exitosamente.'];
}

function get_users() {
    $data = file_get_contents('../users.json');
    return json_decode($data, true);
}

// Redirige al jugador a la página de inicio de sesión
// header("Location: inicio_sesion.html");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["username"];
    $correoElectronico = $_POST["mail"];
    $contrasena = $_POST["password"];
    // Procesa el registro utilizando la función procesarRegistro
    $resultado = procesarRegistro(
        $nombreUsuario,
        $correoElectronico,
        $contrasena
    );
    // Si hay un resultado, muestra un mensaje de error
    if ($resultado) {
        echo $resultado['message'];
    }
}
