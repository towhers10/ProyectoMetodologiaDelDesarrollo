<?php
$conexion = new mysqli("localhost", "admBicis", "123456", "bicicletas");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$folio=$_GET['folio'];

$query="DELETE FROM bicicleta where folio=".$folio."";

mysqli_query($conexion,$query);


?>
<script type="text/javascript">
       window.location="cargarDatos.php?eliminar=1";
</script>