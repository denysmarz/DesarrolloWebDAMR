<?php    $id=$_GET['id'];?>
<label for="comentario">COMENTARIO </label>
<input type="text" name="comentario" id="comentario">
<input type="submit" value="COMENTAR" onclick="crear(<?php echo $id ?>)">