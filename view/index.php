<h2>Lista de Procedimientos</h2>
<a href="index.php?accion=crear">Nuevo Procedimiento</a>
<br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Tipo</th>
    <th>Duración</th>
    <th>Precio</th>
    <th>Acciones</th>
</tr>

<?php while($fila = $procedimientos->fetch_assoc()): ?>
<tr>
    <td><?= $fila['idProcedimiento'] ?></td>
    <td><?= $fila['nombreProcedimiento'] ?></td>
    <td><?= $fila['tipoProcedimiento'] ?></td>
    <td><?= $fila['duracionProcedimiento'] ?></td>
    <td><?= $fila['precioProcedimiento'] ?></td>
    <td>
        <a href="index.php?accion=editar&id=<?= $fila['idProcedimiento'] ?>">Editar</a>
        <a href="index.php?accion=eliminar&id=<?= $fila['idProcedimiento'] ?>">Eliminar</a>
    </td>
</tr>
<?php endwhile; ?>

</table>