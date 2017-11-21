<?php 
//conectamos con el servidor
//$conectar = mysqli_connect('127.0.0.1','root','123456');
//verificamos la conexión
$mysqli = new mysqli("localhost", "admBicis", "123456", "bicicletas");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//recuperar las variables
//$folio=$_POST['folio'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$estado = NULL;
$status = NULL;
$folio=$_POST['folio'];
$fichero_subido="";

//COPIAR LA IMAGEN A LA CARPETA DE IMAGENES
if($_FILES['img']['size']>0){


$dir_subida = 'C:\\xampp\\htdocs\\ProyectoBicicletas\\img\\Bicicletas\\';
$fichero_subido = $dir_subida . basename($_FILES['img']['name']);
if (!move_uploaded_file($_FILES['img']['tmp_name'], $fichero_subido))
  {
    echo "Ocurrio un problema al guardar la imagen.";
    exit();
  }
}

if($folio!=""){
$sql="UPDATE bicicleta set modelo='".$modelo."',marca='".$marca."'";
if($fichero_subido!=""){
  $sql=$sql.",img='".mysqli_escape_string($mysqli,$fichero_subido)."'";
}
$sql=$sql." WHERE folio=".$folio;
$ejecutar=mysqli_query($mysqli, $sql);
if(!$ejecutar){
     echo "Hubo algún error".$sql;
  }else{
     ?>
     <script type="text/javascript">
       window.location="inicio.php?resultado=2";
     </script>
     <?php
  }
}
else{
 $sql="INSERT INTO bicicleta (modelo, marca,estatus,img) VALUES('$modelo','$marca',1,'".mysqli_escape_string($mysqli,$fichero_subido)."')";
}
$ejecutar=mysqli_query($mysqli, $sql);
  if(!$ejecutar){
     echo "Hubo algún error".$sql;
  }else{
     ?>
     <script type="text/javascript">
       window.location="inicio.php?resultado=1";
     </script>
     <?php
  }

?>

</body>
</html>
