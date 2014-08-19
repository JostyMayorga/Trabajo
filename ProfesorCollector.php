<?php

include_once('Profesor.php');
include_once('Collector.php');

class ProfesorCollector extends Collector
{
  
  function showProfesor($id) {
    $row = self::$db->getRows("SELECT * FROM Profesor where idProfesor= ? ", array("{$id}")); 
    $ObjProfesor = new Profesor($row[0]{'idProfesor'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'email'});
    return $ObjProfesor;
  }

  function createProfesor($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO Prueba.Profesor (idProfesor, nombre, apellido, email) VALUES (?, ?, ?. ?)", array(null, "{$nombre}", "{$apellido}", "{$email}"));
  }  

  function readProfesores() {
    $rows = self::$db->getRows("SELECT * FROM Profesor ");        
    $arrayProfesor= array();        
    foreach ($rows as $c){
      $aux = new Profesor($c{'idProfesor'},$c{'nombre'},$c{'apellido'},$c{'email'});
      array_push($arrayProfesor, $aux);
    }
    return $arrayProfesor;        
  }
  
  function updateProfesor($id,$nombre,$apellido,$email) {    
    $insertrow = self::$db->updateRow("UPDATE Prueba.Profesor SET Profesor.nombre = ?, Profesor.apellido = ?, Profesor.email = ?   WHERE Profesor.idProfesor = ? ", array("{$nombre}","{$apellido}", "{$email}",$id));
  }  

  function deleteProfesor($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM Prueba.Profesor WHERE idProfesor= ?", array("{$id}"));
  }  



}
?>
