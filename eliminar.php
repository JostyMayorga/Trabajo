<html>
<head>
</head>

<body>
<div id="main">
<?php
$id=$_GET["id"];
include_once("ProfesorCollector.php");
$DemoCollectorObj = new ProfesorCollector();
$DemoCollectorObj->deleteDemo($id);
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
