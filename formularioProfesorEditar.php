<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Profesor</title>
</head>
<body>

<?php

$id=$_GET["id"];
include_once("ProfesorCollector.php");
include_once("Profesor.php");
$ProfesorCollectorObj = new ProfesorCollector();
$ObjProresor = $ProfesorCollectorObj->showProfesor($id);
?>
<h2>Editar Objeto Profesor </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idProfesor" value="<?php echo $ObjProfesor->getIdDemo(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjProfesor->getNombre(); ?>" autofocus required />
</p>

<p>
Apellido: <input type="text" name="apellido"  value="<?php echo $ObjProfesor->getApellido(); ?>" autofocus required />
</p>

<p>
email: <input type="text" name="email"  value="<?php echo $ObjProfesor->getEmail(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
