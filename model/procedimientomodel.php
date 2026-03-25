<?php
require_once "config.php";

// LISTAR PROCEDIMIENTOS
function obtenerProcedimiento() {
    global $conexion;
    $sql = "SELECT * FROM procedimiento";
    return mysqli_query($conexion, $sql);
}

// INSERTAR PROCEDIMIENTO
function insertarProcedimiento($nombre, $tipo, $duracion, $precio) {
    global $conexion;
    $sql = "INSERT INTO procedimiento (nombreProcedimiento, tipoProcedimiento, duracionProcedimiento, precioProcedimiento)
            VALUES ('$nombre', '$tipo', '$duracion', '$precio')";
    return mysqli_query($conexion, $sql);
}

// OBTENER PROCEDIMIENTO POR ID
function obtenerProcedimientoPorId($id) {
    global $conexion;

    $id = intval($id); // seguridad

    $sql = "SELECT * FROM procedimiento WHERE idProcedimiento = $id";
    $resultado = mysqli_query($conexion, $sql);

    return mysqli_fetch_assoc($resultado);
}

// ACTUALIZAR PROCEDIMIENTO
function actualizarProcedimiento($id, $nombre, $tipo, $duracion, $precio) {
    global $conexion;
    $sql = "UPDATE procedimiento 
            SET nombreProcedimiento='$nombre',
                tipoProcedimiento='$tipo',
                duracionProcedimiento='$duracion',
                precioProcedimiento='$precio'
            WHERE idProcedimiento=$id";
    return mysqli_query($conexion, $sql);
}

// ELIMINAR PROCEDIMIENTO
function eliminarProcedimiento($id) {
    global $conexion;
    $sql = "DELETE FROM procedimiento WHERE idProcedimiento=$id";
    return mysqli_query($conexion, $sql);
}
?>


