
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea php</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.4/dist/sweetalert2.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.4/dist/sweetalert2.js"></script>
</head>
<body>
    
</body>
</html>

<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Prueba Php</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Listado <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="guardar.php">Agregar</a>
                    </li>
                  
                  </ul>
               
                  
                </div>
              </nav>

    <div class="row card">
     
        <div class="col-md-12">
            <table class="table" id="tabla">

            <thead>

            <tr>
                <th>ID</th>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>SueldoBruto</th>
                <th>AFP</th>
                <th>Fonasa</th>
                <th>Liquido</th>
                <th></th>
            </tr>
</thead>

<tbody id="cuerpoTabla">
<?php 
 
require("trabajadores.php");
 $con = new trabajadores();
 $con->CrearLaConexion();
 


//listar

$query="SELECT * FROM trabajadores ";
$result = $con->ExecuteQuery($query);
	if($result)
		{
 			while($row=$con->GetRows($result))
 			{
        echo "<tr>";
        echo  "<td> $row[0] </td>";
 			echo  "<td> $row[1] </td>";
 			echo  "<td> $row[2]</td>";
       echo  "<td> $row[3]</td>";
       echo  "<td> $row[4]</td>";
       echo  "<td> $row[5]</td>";
       echo  "<td> $row[6]</td>";
       echo  "<td> $row[7]</td>";
       echo  "<td> <span onclick='eliminar($row[0])'>Eliminar </span></td>";
     
 			echo "</tr>";

 			
 			 //echo " <td> <br> El usuario es:".$row[1]." ".$row[2]." ".$row[3];//
       }
       echo "<script>   $('#tabla').DataTable(); </script>";
    	$con->SetFreeResult($result);
    	
    	}
    	else
    	{
    	echo "<h3>Error generando la consulta</h3>";
		}
$con->Desconectar();
?>
</tbody>
                
</table> 
        </div>
      </div>

      <script>


function eliminar(id){
  Swal({
  title: 'Esta seguro que desea eliminar al trabajador?',
  text: "Esto es permanente",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si'
}).then((result) => {
  if (result.value) {
    $.ajax({
  type: "POST",
  url: "operadorEliminar.php",
  data: {
    id:id
  },
  cache: false,
  success: function(data){

location.href="index.php";
  }
});
  }
})
 
 

}


      </script>



</body>