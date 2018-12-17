<?php 
require "conexion.php";
class trabajadores{
// Definicion de atributos
private $host;
private $user;
private $password;
private $database;
private $conectando;
private $nombre;
private $apellido;
private $rut;
private $sueldobruto;
private $afp;
private $fonasa; 
public   function __construct(){ 


}
  



public static function agregar($nombre,$apellido,$rut,$sueldobruto,$afp,$fonasa,$liquido){
    $conectar = new conexion();
    $conectar->CrearLaConexion();
    $query="INSERT INTO trabajadores(id, nombre, apellido, rut,sueldobruto,afp,fonasa,liquido) VALUES (NULL,'$nombre','$apellido','$rut','$sueldobruto','$afp','$fonasa','$liquido')";

 
   
   $ConfirmaGrabar=$conectar->ExecuteQuery($query);
        
}

public function GetRows($resultado){
 return $resultado->fetch_row();
}



public function SetFreeResult($resultado){
 $resultado->free_result();
}  

public function Desconectar(){
 $this->conectando->close();
}
    
  
}
?>