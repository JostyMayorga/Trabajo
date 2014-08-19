<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idProfesor=$_POST["idProfesor"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("ProfesorCollector.php");
$ProfesorCollectorObj = new ProfesorCollector();
$ProfesorCollectorObj->updateProfesor($iddemo,$nombre,$apellido,$email);

echo "id :".$idProfesor." actualizado a nombre:".$nombre. "apellido: ".$apellido. " email: " .$email.</br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
