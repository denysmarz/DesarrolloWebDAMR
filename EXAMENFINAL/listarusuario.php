<?php include 'conexion.php';
$sql = "SELECT id,correo,'password',nombrecompleto,cu,nivel FROM usuarios";
if (isset($_GET['orden'])) {
    $sql .= " ORDER BY " . $_GET['orden'];
}
$resultado = mysqli_query($conn, $sql);
?>
<table border="1">
    <tr>
        
        <th><a href="javascript:ordenar('correo')" style="color:black;">Correo</a> </th>
        <th>contraseña</th>
        <th><a href="javascript:ordenar('nombrecompleto')" style="color:black;">Nombre Completo</a> </th>
        <th><a href="javascript:ordenar('cu')" style="color:black;">CU</a> </th>
        <th><a href="javascript:ordenar('nivel')" style="color:black;">Nivel</a> </th>
        <th>Operaciones</th>

    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $fila['correo']; ?></td>
            <td><?php echo $fila['password']; ?></td>
            <td><?php echo $fila['nombrecompleto']; ?></td>
            <td><?php echo $fila['cu']; ?></td>
            <td><?php echo $fila['nivel']; ?></td>
            <td>
                
                <a href="javascript:eliminar(<?php echo $fila['id']; ?>)">Eliminar <?php echo $fila['id']; ?></a>
            </td>

        </tr>
    <?php } ?>