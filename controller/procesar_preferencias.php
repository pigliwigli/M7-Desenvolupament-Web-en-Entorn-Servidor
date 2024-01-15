<?php
// Función para procesar las preferencias de videojuegos
function procesarPreferencias($preferencias)
{
    // Registra las preferencias para el jugador (agregar código para el registro)

    $text = implode(",", $preferencias);

    // Redirige al jugador a la página de confirmación
    header("Location: confirmacion_preferencias.php?preferencias=$text");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila las preferencias de videojuegos seleccionadas
    $preferencias = $_POST["preferencias"];
    // Procesa las preferencias utilizando la función procesarPreferencias
    procesarPreferencias($preferencias);
}