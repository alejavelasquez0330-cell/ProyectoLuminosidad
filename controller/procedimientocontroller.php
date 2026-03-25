<?php
require_once 'model/procedimientomodel.php';

$accion = $_GET['accion'] ?? 'index';

switch($accion){

        case 'crear':
        require "view/crear.php";
        break;

    case 'guardar':
        insertarProcedimiento(
            $_POST['nombre'],
            $_POST['tipo'],
            $_POST['duracion'],
            $_POST['precio']
        );
        header("Location: index.php");
        break;

    case 'editar':
        $procedimiento = obtenerProcedimientoPorId($_GET['id']);
        require "view/editar.php";
        break;

    case 'actualizar':
    actualizarProcedimiento(
        $_POST['id'],
        $_POST['nombre'],
        $_POST['tipo'],
        $_POST['duracion'],
        $_POST['precio']
    );
    header("Location: index.php");
    exit();
    break;

    case 'eliminar':
        eliminarProcedimiento($_GET['id']);
        header("Location: index.php");
        break;

    default:
        $procedimientos = obtenerProcedimiento();
        require "view/index.php";
        break;
}
?>

        

