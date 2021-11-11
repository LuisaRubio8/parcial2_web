<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica 5 Intercambio de variable PHP</title>
	<h2 style='color:red;'>Rubio Cabanillas Luisa Fernanda.</h2>
	<h2 style='color:blue;'>5AVP.</h2>
</head>
<body>
	<?php 
		$registros = array(
			array("id" => 1, "Nombre" => "David", "edad" => 22, "sexo" => "M"),
			array("id" => 2, "Nombre" => "Mihran", "edad" => 17, "sexo" => "M"),
			array("id" => 3, "Nombre" => "Susana", "edad" => 19, "sexo" => "F"),
			array("id" => 4, "Nombre" => "Chiquete", "edad" => 32, "sexo" => "F"),
			array("id" => 5, "Nombre" => "Chonas", "edad" => 92, "sexo" => "M"),
			array("id" => 6, "Nombre" => "Luisa", "edad" => 21, "sexo" => "F"),
		);
	?>
	<h1>Tabla de registros</h1><hr>
	<table border=1>
		<thead>
			<tr>
				<td>ID:</td>
				<td>Nombre:</td>
				<td>Edad:</td>
				<td>Sexo:</td>
				<td>Detalle:</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros); $i++) { 
					echo "<tr>";
						echo "<td>".$registros[$i]["id"]."</td>";
						echo "<td>".$registros[$i]["Nombre"]."</td>";
						echo "<td>".$registros[$i]["edad"]."</td>";
						echo "<td>".$registros[$i]["sexo"]."</td>";
						echo "<td><a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>Ver más</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>