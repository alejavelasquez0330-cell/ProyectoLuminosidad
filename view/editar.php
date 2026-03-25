<h2>Editar Procedimiento</h2>

<form method="POST" action="index.php?accion=actualizar">
    <input type="hidden" name="id" value="<?= $procedimiento['idProcedimiento'] ?>">
    Nombre: <input type="text" name="nombre" value="<?= $procedimiento['nombreProcedimiento'] ?>"><br>
    tipo: <input type="text" name="tipo" value="<?= $procedimiento['tipoProcedimiento'] ?>"><br>
    Duracion: <input type="text" name="duracion" value="<?= $procedimiento['duracionProcedimiento'] ?>"><br><br>
    Precio: <input type="number" name="precio" value="<?= $procedimiento['precioProcedimiento'] ?>"><br>
    <button type="submit">Actualizar</button>
</form>