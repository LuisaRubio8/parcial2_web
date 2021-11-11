<?php
	
	$nombre = $_GET["nombre"];
	$tiempoT = $_GET["tiempo_trabajando"];
	$correo = $_GET["correo"];
	$fecha_nacimiento = $_GET["fecha_nacimiento"];
	$sexo = $_GET["sexo"];
	$areas = $_GET["areas"];
	

	echo "El  nombre del trabajador es:" . $nombre;
	echo "<br><br>";

	echo "El tiempo del trabajador en años es:" . $tiempoT;
	echo "<br><br>";

	echo "El  correo del trabajador es:" . $correo;
	echo "<br><br>";

	echo "El  cumpleaños del trabajador es:" . $fecha_nacimiento;
	echo "<br><br>";

	echo "El  sexo del trabajador es:" . $sexo;
	echo "<br><br>";

	echo "Area del trabajador:<br><br>";
	for ($i=0; $i < count($areas) ; $i++) {
		echo $areas[$i] . "<br>"; 
	}	

	echo "<h1>Nombre: Rubio Cabanillas Luisa Fernanda.</h1>"; 
	echo "<h1>5AVP.</h1>"; 		

?>