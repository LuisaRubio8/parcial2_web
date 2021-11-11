<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Programación de Cuestionario en PHP</title>

</head>
<body>
<form action="procesar.php" method="post">

	<p> usuario:<input type="text" name="usuario" /></p>
    <p> correo:<input type="text" name="correo" /></p>
    <p> palabra_favorita:<input type="text" name="palabra_favorita" /></p>


	    <h1>¿Cuantos huesos tiene un bebe?</h1>
        <input type="radio" name="Pregunta1" value="f">206<br>
        <input type="checkbox" name="Pregunta1" value="v">300 

        <h1>¿cuantos estados tiene mexico?</h1>
        <input type="checkbox" name="Pregunta2" value="v">32<br>
        <input type="radio" name="Pregunta2" value="f">23

        <h1>¿Capital de sinaloa?</h1>
        <input type="checkbox" name="Pregunta3" value="v">culiacan<br>
        <input type="radio" name="Pregunta3" value="f">navolato 

        <h1>¿que animal causa mas muertes?</h1>
        <input type="radio" name="Pregunta4" value="f">tiburon<br>
        <input type="checkbox" name="Pregunta4" value="v">mosquito 

        <h1>¿cual es el primer elemento de la tabla periodica?</h1>
        <input type="radio" name="Pregunta5" value="f">Helio<br>
        <input type="checkbox" name="Pregunta5" value="v">Hidrogeno 

        <h1>¿Donde esta transilvania?</h1>
        <input type="checkbox" name="Pregunta6" value="v">rumania<br>
        <input type="radio" name="Pregunta6" value="f">noruega

        <h1>¿En que año cayo el muro de berlin?</h1>
        <input type="radio" name="Pregunta7" value="f">1970<br>
        <input type="checkbox" name="Pregunta7" value="v">1989

        <h1>¿Cual es el planeta mas grande del sistema solar?</h1>
        <input type="radio" name="Pregunta8" value="f">venus<br>
        <input type="checkbox" name="Pregunta8" value="v">jupiter

        <h1>¿Cual es el animal mas grande de la tierra?</h1>
        <input type="radio" name="Pregunta9" value="f">orca<br>
        <input type="checkbox" name="Pregunta9" value="v">ballena azul

		<h1>¿Cuantas notas musicales existen?</h1>
        <input type="checkbox" name="Pregunta10" value="v">12<br>
        <input type="radio" name="Pregunta10" value="f">7


	<br>
	<br> 
	<input type="submit" value="Respuestas:"/>


</form>


</body>
</html>