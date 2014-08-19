<html>
<head>
</head>
<?php
include_once("ProfesorCollector.php");
$ProfesorCollectorObj = new ProfesorCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioProfesorInsert.php">Nuevo</a></td></tr>
<?php
foreach ($ProfesorCollectorObj->readProfesores() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdProfesor() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td>".$c->getApellido()."</td>";
  echo "<td>".$c->getEmail()."</td>";
  echo "<td><a href='formularioProfesorEditar.php?id=".$c->getIdProfesor()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdProfesor()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
