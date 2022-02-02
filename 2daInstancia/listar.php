<?php session_start(); 
include 'conexion.php';
$sql = "SELECT id,correo,'password',nombrecompleto,nivel FROM usuarios";
if (isset($_GET['orden'])) {
    $sql .= " ORDER BY " . $_GET['orden'];
}
$resultado = mysqli_query($conn, $sql);
$nivel=$_SESSION['nivel'];
?>


<table border="1">
    <tr>
        
        <th><a href="javascript:ordenar('correo')" style="color:black;">Correo</a> </th>

        <th><a href="javascript:ordenar('nombrecompleto')" style="color:black;">Nombre Completo</a> </th>
        <th><a href="javascript:ordenar('nivel')" style="color:black;">Nivel</a> </th>
        <?php
                if($nivel==1){?>
                    <th>Operaciones</th>
               <?php }?>
               

    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $fila['correo']; ?></td>
            <td><?php echo $fila['nombrecompleto']; ?></td>
            <?php
                if($fila['nivel']==1){?>
                     <td>ADMINISTRADOR</td>
               <?php }
               else{?>
                    <td>USUARIO</td>
              <?php }?>
               
              <?php
                if($nivel==1){?>
                    <?php
                if($fila['nivel']==1){?>
                     <td>
                        CAMBIAR A USUASRIO 
                    </td>
               <?php }
               else{?>
                    <td>
                        CAMBIAR A ADMINISTRADOR 
                    </td>
              <?php }?>
               <?php }?>
               
               
            

        </tr>
    <?php } ?>