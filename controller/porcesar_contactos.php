<?php
// Función para procesar el formulario de contacto y soporte técnico
function procesarContacto(
    $nombre,
    $correoElectronico,
    $mensaje,
    $archivosAdjuntos
) {
    // Validación del formato del correo electrónico
    if (!filter_var($correoElectronico, FILTER_VALIDATE_EMAIL)) {
        return "El correo electrónico no es válido.";
    }
    // Validación de al menos un archivo adjunto
    if (count($archivosAdjuntos) === 0) {
        return "Debes adjuntar al menos un archivo.";
    }
    // Registro exitoso (agregar código para el registro)
    




    // Muestra un mensaje de confirmación
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correoElectronico = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $archivosAdjuntos = $_FILES["archivo"]["name"];
    // Procesa el formulario de contacto utilizando la función procesarContacto
    $resultado = procesarContacto(
        $nombre,
        $correoElectronico,
        $mensaje,
        $archivosAdjuntos
    );
    // Si hay un resultado, muestra un mensaje de error
    if ($resultado) {
        echo $resultado;
    }
}
