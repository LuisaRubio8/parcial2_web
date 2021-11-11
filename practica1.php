<?php
	echo "PRACTICA 1 PHP.";
	echo "<br><br>";

	echo "<h1 style='color:green;'>Lista de numeros</h1>";
	for ($i=0; $i <10; $i++) { 
		
		echo $i+1 . "<br>";
	}

	for ($i=0; $i < 30; $i++) { 
		if($i % 2 == 0){
			echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:orange'>";
		}else{
		echo "<div style='border: 3px solid red; padding:30px; width:30px; display:inline-flex; background-color:#FBF6BA 
		'>";
		}
		echo $i+1;
		echo "</div>";
	}
	echo "<h1>Nombre: Rubio Cabanillas Luisa Fernanda </h1>";
	echo "<h1>Nombre: 5AVP </h1>";
?>