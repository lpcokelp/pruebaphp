<?php
require("trabajadores.php");
$nombre=$_POST["nombre"]; 
$apellido=$_POST["apellido"]; 
$rut=$_POST["rut"]; 
$sueldobruto= intval($_POST["sueldobruto"]); 

$afp=intval(round($sueldobruto*0.1));
$fonasa=intval(round($sueldobruto*0.07));
$liquido=$sueldobruto-$afp-$fonasa;


 $trabajador = new trabajadores();
 $trabajador->agregar($nombre,$apellido,$rut,$sueldobruto,$afp,$fonasa,$liquido);
 echo 'true';
 
?>