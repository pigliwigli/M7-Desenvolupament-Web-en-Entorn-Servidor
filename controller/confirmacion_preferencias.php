<?php
    // Recupera las preferencias de la URL
    $preferencias = isset($_GET['preferencias']) ? explode(",", $_GET['preferencias']) : [];
    
    // Muestra las preferencias
    echo "Preferencias seleccionadas: " . implode(", ", $preferencias);
?>