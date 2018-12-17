<?php
require("trabajadores.php");
$id=$_POST["id"]; 


 $trabajador = new trabajadores();


 $query="DELETE from trabajadores where id=$id";
 
 $trabajador->ExecuteQuery($query);

 

 echo 'true';
 
?>