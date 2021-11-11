<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalles de registro</title>
	<h2 style='color:purple;'>Rubio Cabanillas Luisa Fernanda.</h2>
	<h2 style='color:orange;'>5AVP.</h2>
</head>
<body background="color">
<?php 

	$registros = array(
		array("id" => 1, "Nombre" => "David", "edad" => 22, "sexo" => "M"),
		array("id" => 2, "Nombre" => "Mihran", "edad" => 17, "sexo" => "M"),
		array("id" => 3, "Nombre" => "Susana", "edad" => 19, "sexo" => "F"),
		array("id" => 4, "Nombre" => "Chiquete", "edad" => 32, "sexo" => "F"),
		array("id" => 5, "Nombre" => "Chonas", "edad" => 92, "sexo" => "M"),
		array("id" => 6, "Nombre" => "Luisa", "edad" => 21, "sexo" => "F"),
	);

	

	if (isset($_GET["id"])) {
		$id = $_GET["id"] - 1;
		echo "<h1>Datos del anexado:</h1><hr>";
		echo "ID: ". $_GET["id"] . "<br>";
		echo "Nombre: ". $registros[$id]["Nombre"] . "<br>";
		echo "edad: ". $registros[$id]["edad"] . "<br>";
		echo "sexo: ". $registros[$id]["sexo"] . "<br>";
	}
	else
	{
		echo "<h1>El dato de ID es requerido</h1>";
	}
 ?>
</body>
</html>