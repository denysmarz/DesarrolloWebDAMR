<?php include 'conexion.php';
$sql = "SELECT id,imagen,titulo,texto,fecha FROM noticias";
$com = "SELECT id,idnoticia,comentario,nombre FROM comentarios";
if (isset($_GET['orden'])) {
    $sql .= " ORDER BY " . $_GET['orden'];
}
$resultado = mysqli_query($conn, $sql);
$resultado1 = mysqli_query($conn, $com);
?>
<table border="1">
    <tr>
        <th>Imagen </th>
        <th><a href="javascript:ordenarnoti('titulo')" style="color:black;">Titulo</a> </th>
        <th><a href="javascript:ordenarnoti('texto')" style="color:black;">Texto</a> </th>
        <th><a href="javascript:ordenarnoti('fecha')" style="color:black;">FECHA</a> </th>
        <th>COMENTARIOS</th>

    </tr>

    <?php $fila1 = mysqli_fetch_array($resultado1) ?>

    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><img src="images/<?php echo $fila['imagen']; ?>" alt="" width="100px"></td>
            <td><?php echo $fila['titulo']; ?></td>
            <td><?php echo $fila['texto']; ?></td>
            <td><?php echo $fila['fecha']; ?></td>
            <td>
                <?php echo $fila1['comentario']; ?>
                
                <a href="javascript:comentar(<?php echo $fila['id']; ?>)">INSERTAR COMENTARIO</a>
            </td>

        </tr>
    <?php } ?>