<?php 

class trabajadores{
// Definicion de atributos
private $host;
private $user;
private $password;
private $database;
private $conectando;

public   function __construct(){ 
    require "credenciales.php";
    $this->host=HOST;
    $this->user=USER;
    $this->password=PASSWORD;
    $this->database=DATABASE;
    $this->CrearLaConexion();

}
  


public function CrearLaConexion(){
    $this->conectando = new mysqli($this->host, $this->user, $this->password, $this->database);
     if($this->conectando->connect_errno) {
      die("Error al conectarse a MySQL: ");
     }
    }
    


public function ExecuteQuery($sql){
    $resultado = $this->conectando->query($sql);
    return $resultado;
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