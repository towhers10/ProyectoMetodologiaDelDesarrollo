<?php
	$conexionBorrar = new mysqli("localhost", "admBicis", "123456", "bicicletas");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

	$query="SELECT * FROM bicicleta";

    $resultados=mysqli_query($conexionBorrar,$query);
    $fila=mysqli_fetch_row($resultados);
    $fila=mysqli_fetch_row($resultados);
    $fila=mysqli_fetch_row($resultados);
    $fila=mysqli_fetch_row($resultados);
    $fila=mysqli_fetch_row($resultados);
	$queryBorrar="DELETE FROM bicicleta WHERE folio=".$fila[0].";";
	$ejecutar=mysqli_query($conexionBorrar,$queryBorrar);
	if(!$ejecutar){
     echo "Hubo algún error".$query;
  }else{
     ?>
     <script type="text/javascript">
       window.location="inicio.php";
     </script>
     <?php
  }
?>