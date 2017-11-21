<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="CargarDatos.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="CargarDatos.css">-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Datos De Bicicletas</title>
</head>
<body>


<?php
    $conexion = new mysqli("localhost", "admBicis", "123456", "bicicletas");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

    $query="SELECT * FROM bicicleta";

    $resultados=mysqli_query($conexion,$query);

    echo "<div class='container'> <h2 class='page-header'>Bicicletas Registradas</h2><hr> <table class='table table-responsive table-bordered table-condensed'> <thead> <tr> ";
    echo "<th>Folio</th> <th>Modelo</th> <th>Marca</th> <th>Estado</th> <th>Estatus</th> <th>Imagen</th><th>Opciones</th> </tr>  </thead>";
    echo "<tbody>";

    while ($fila=mysqli_fetch_row($resultados)) {
    	//$fila=mysqli_fetch_row($resultados);
    	# code...
    	
    	echo "<tr>";
    	echo "<td>".$fila[0]."</td>";
    	echo "<td>".$fila[1]."</td>";
    	echo "<td>".$fila[2]."</td>";
    	echo "<td>".$fila[3]."</td>";
    	echo "<td>".$fila[4]."</td>";
    	echo "<td> <img style='max-height:45px' src='img/bicicletas/".basename($fila[5])."' class='img-responsive img-thumbnail ' /> </td>";
        echo "<td><a class='btn btn-warning' href='/ProyectoBicicletas/eliminar.php?folio=".$fila[0]."'>Borrar</a><a class='btn btn-primary' href='/ProyectoBicicletas/RegistrarBicicleta.php?folio=".$fila[0]."'>Editar</a></td>";
    	//echo "<br>";
    	echo "</tr>";
    	
    	
    }
    echo "</tbody>  </table> </div>";
    echo "<div class='container'>";
    echo "<a id='botonAlert' href='inicio.php'  class='btn btn-success'><i class='fa fa-fw fa-send'></i>Inicio</a>";
    echo "</div>";

    $conexion=null;
    $query=null;

?>

</body>
</html>

<?php
if(isset($_GET['eliminar'])){
  if($_GET['eliminar']=='1'){
    ?>
      <script type="text/javascript">
        alert('Se Elimino correctamente.');
      </script>
    <?php
  }
  else{
    ?>
      <script type="text/javascript">
        alert('Ocurrio un problema.');
      </script>
    <?php
  }
}
?>