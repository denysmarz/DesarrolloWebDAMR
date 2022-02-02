<?php include 'conexion.php';
$sql = "SELECT id,imagen,titulo,texto,idtiponoticia FROM noticias";
if (isset($_GET['orden'])) {
    $sql .= " ORDER BY " . $_GET['orden'];
}
$resultado = mysqli_query($conn, $sql);
?>
<table border="1">
    <tr>
        <th>Imagen </th>
        <th><a href="javascript:ordenar('titulo')">Titulo</a> </th>
        <th><a href="javascript:ordenar('texto')">Texto</a> </th>
        <th><a href="javascript:ordenar('idtiponoticia')">TIPO NOTICIA</a> </th>
        <th>Operaciones</th>

    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><img src="images/<?php echo $fila['imagen']; ?>" alt="" width="100px"></td>
            <td><?php echo $fila['titulo']; ?></td>
            <td><?php echo $fila['texto']; ?></td>
            <td><?php echo $fila['idtiponoticia']; ?></td>
            <td>
                
                <a href="javascript:eliminar(<?php echo $fila['id']; ?>)">Eliminar <?php echo $fila['id']; ?></a>
            </td>

        </tr>
    <?php } ?>