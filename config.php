<?php
    $conexion = new mysqli("localhost", "root", "", "BDluminosidad");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    // die("Conexión Exitosa");
?>
