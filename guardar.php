
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.4/dist/sweetalert2.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.4/dist/sweetalert2.css">
</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Prueba Php</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                      <a class="nav-link" href="index.php">Listado</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="guardar.php" > <span class="sr-only">(current)</span>Agregar</a>
                    </li>
                  
                  </ul>
               
                  
                </div>
              </nav>

    <div class="row ">
     
        <div class="col-md-4 offset-md-4">
        <form onsubmit="guardar(nombre.value,apellido.value,rut.value,sueldobruto.value); return false">
        <div class="form-group">
    <h3 >Agregar Trabajador</h3>

  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="nombre">Apellido</label>
    <input type="text" class="form-control" id="apellido">
  </div>
  <div class="form-group">
    <label for="nombre">Rut</label>
    <input type="text" class="form-control" id="rut">
  </div>
  <div class="form-group">
    <label for="nombre">Sueldo Bruto</label>
    <input type="text" class="form-control" id="sueldobruto">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
  <a type="button" class="btn btn-danger" href="index.php">Cancelar</a>
</form>
        </div>
      </div>


</body>

<script>

function guardar(nombre,apellido,rut,sueldoBruto){

    $.ajax({
  type: "POST",
  url: "operadorGuardar.php",
  data: {
    nombre:nombre,
apellido:apellido,
rut:rut,
sueldobruto:sueldoBruto


  },
  cache: false,
  success: function(data){
   console.log(data)

   Swal(
      'Trabajador registrado!',
      'Finalizado',
      timer: 1000,
      'success'
    )
$('#nombre').val('');
$('#apellido').val('');
$('#rut').val('');
$('#sueldobruto').val('');

  }
});

}
</script>
</html>



