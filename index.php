
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea php</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Tarea Php</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="ejercicio1.php">Ejercicio 1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ejercicio2.php">Ejercicio 2 </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ejercicio3/index.html">Ejercicio 3 </a>
                    </li>
                  </ul>
               
                  
                </div>
              </nav>

    <div class="row">
     
        <div class="col-md-4 offset-md-4">
            <table>

            <thead>

            <tr>
                <th>ID</th>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>SueldoBruto</th>
                <th>AFP</th>¨
                <th>Fonasa</th>
                <th></th>
            </tr>
</thead>

<tbody id="cuerpoTabla">
<?php 
 
require("agregar.php");
 $conectar = new ConectarA_MySQL();
 $conectar->CrearLaConexion();
 


//listar

$query="SELECT * FROM trabajadores ";
$result = $conectar->ExecuteQuery($query);
	if($result)
		{
 			while($row=$conectar->GetRows($result))
 			{
  			echo "<tr>";
 			echo  "<td> $row[1] </td>";
 			echo  "<td> $row[2]</td>";
       echo  "<td> $row[3]</td>";
       echo  "<td> $row[4]</td>";
       echo  "<td> $row[5]</td>";
       echo  "<td> $row[6]</td>";
       echo  "<td> $row[7]</td>";
       echo  "<td> Editar </td>";
 			echo "</tr>";

 			
 			 //echo " <td> <br> El usuario es:".$row[1]." ".$row[2]." ".$row[3];//
 			}
    	$conectar->SetFreeResult($result);
    	
    	}
    	else
    	{
    	echo "<h3>Error generando la consulta</h3>";
		}
$conectar->Desconectar();
?>
</tbody>
                
</table> 
        </div>
      </div>


</body>