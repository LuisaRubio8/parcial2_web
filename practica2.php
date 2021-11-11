<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><h1>Practica 2 en PHP dentro de un HTML</h1></title>
</head>
<body>
	<?php
		$numero= rand(1,4);
		$color = ["#9C2051", "#89209C", "#20469C", "#209C89", "#4C6B4B"];
		$numcolor = rand(0,4);
		echo "<h1 background-color:#7FC53D'>Numero generado = " . $numero ."<br>"; 
		echo "<div style='color:".$color[$numcolor]."'>Color generado</div>";

		if ($numero == 1) {	
	?>
		<h1 style="color: <?php echo $color[$numcolor]; ?> ">Primera opcion</h1>

	<?php } elseif($numero == 2) { ?>

		<h1 style="color: <?php echo $color[$numcolor]; ?> ">Segunda opcion</h1>

	<?php }elseif ($numero == 3) { ?>
	
		<h1 style="color: <?php echo $color[$numcolor]; ?> ">Tercera opcion</h1>

	<?php }else {?>

			<h2 style="color: <?php echo $color[$numcolor]; ?> ">:D</h2>

	<?php }
	echo "<h1 background-color:#FBF6BA'>Nombre: Rubio Cabanillas Luisa Fernanda </h1>"; 
	echo "<h1>Nombre: 5AVP</h1>";
	 ?>
</body>
</html>