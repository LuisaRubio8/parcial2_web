<?php

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$palabra_favorita = $_POST['palabra_favorita'];

echo "usuario: " . $usuario . "<br/>";
echo "correo: " . $correo . "<br/>";
echo "palabra_favorita: " . $palabra_favorita . "<br/>"; 

$pregunta1 =$_POST['Pregunta1'];
$pregunta2 =$_POST['Pregunta2'];
$pregunta3 =$_POST['Pregunta3'];
$pregunta4 =$_POST['Pregunta4'];
$pregunta5 =$_POST['Pregunta5'];
$pregunta6 =$_POST['Pregunta6'];
$pregunta7 =$_POST['Pregunta7'];
$pregunta8 =$_POST['Pregunta8'];
$pregunta9 =$_POST['Pregunta9'];
$pregunta10 =$_POST['Pregunta10'];

$mensaje = "";

$puntos = 0;

if($pregunta1 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta2 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta3 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta4 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta5 == "v")
{
    $puntos = $puntos + 2;
}    
if($pregunta6 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta7 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta8 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta9 == "v")
{
    $puntos = $puntos + 2;
}
if($pregunta10 == "v")
{
    $puntos = $puntos + 2;
}

if(($puntos == 2) || ($puntos == 6))
{
    $mensaje="deberias investigar mas";
} else if(($puntos ==6 ) || ($puntos == 10))
{
    $mensaje="que listo, sigue aprendiendo";
} else if(($puntos ==10 ) || ($puntos == 20))
{
    $mensaje="¡c papu culto!";
} 

echo "Puntuacion= $puntos <br> $mensaje <br>";
echo "<b>Resultados</b><br>";
echo "1.-300<br>2.-32<br>3.-culiacan<br>4.-mosquito<br>5.-Hidrogeno<br>6.-rumania<br>7.-1989<br>8.-jupiter<br>9.-ballena azul<br>10.-12<br>";

?>