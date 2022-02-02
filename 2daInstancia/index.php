
<!DOCTYPE html>
<html>
<head>
	<title>Segundo Parcial Sistemas, Ciencias de la computación  </title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div id="contenedor">
		<div id="cabeza"> 
			
			<div id="cabeza-izq"><img src="images/usfx.png" alt=""></div>
			<div id="cabeza-cnt">
				<span class="rojo">UNIVERSIDAD DE SAN FRANCISCO XAVIER	</span><br>
				<span class ="celeste">Facultad de Tecnología</span>
				<span class ="rojo">Sucre</span> 
				<span class ="amarillo">e-Bol</span>
				<span class ="verde">ivia</span>	<br><br>
				<br> Carreras: Ing en Ciencias de la Computación...    Semestre 2-2021 <br>
				
				Universitario:  <span class="celeste-bg">Denys Alexander Mamani Ramirez</span> CU: <span class="celeste-bg">111-68</span><br>
				Usuario: <span class="celeste-bg"><?php session_start();
				echo $_SESSION['nombre'];?></span> Nivel: <?php 
																						echo $_SESSION['nivel'];
																					?><span class="celeste-bg"></span>
			</div>
			

		</div>
		<div id="contenido">

		<br>
		EXAMEN FINAL
		<br><br><br>
		</div>	
		<div id="derecha">
		<ul class="menu">
			<li><a href ="" >Pregunta 1</a></li>
			<li><a href ="" >Pregunta 2</a></li>
			<li><a href ="" >Pregunta 3</a></li>
			<li><a href ="javascript:pregunta4()" >Pregunta 4</a></li>
			<li><a href ="javascript:pregunta5()" >Pregunta 5</a></li>
		</ul>
		</div>
		
		<div id="resultado"> EXAMEN......... </div>

		
		
	</div>
	<script src="funciones.js">	</script>
</body>
</html>

