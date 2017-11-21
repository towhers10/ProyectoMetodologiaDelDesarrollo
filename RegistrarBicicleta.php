<?php
include "Conexion.php";

$folio="";
$marca="";
$modelo="";
$img="";
if(isset($_GET['folio'])){
$folio=$_GET['folio'];

$query="SELECT * FROM bicicleta where folio=".$folio."";
$resultados=mysqli_query($conexion,$query);
if($datos=mysqli_fetch_row($resultados)){
$modelo=$datos[1];
$marca=$datos[2];
$img=$datos[5];


}else{
  header('Location: /ProyectoBicicletas/CargarDatos.php');  
}
}else{

}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Registrar Bicicleta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/rentar.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger title" href="#page-top">Bicicletas INC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">

        <h3 class="title">Registrar bicicleta</h3>

        <section class="main row">
            <div class="col-md-7">
                <img src="img/bicicletas/<?php echo basename($img); ?>" class="img-rounded img-thumbnail" height="90%" width="90%">
              </div>

            <div class="col-md-5">
                <div class="alert alert-info alert-dismissible">
                  <a href="#" data-dismiss="alert" aria-label="close"></a>
                  <span class="color">Todos los campos deben ser llenados</span>
                </div>

              <div class="container " >
                <form id="formulario" enctype="multipart/form-data" method="POST" action="enviar.php" class="color">
                Modelo: <br>
                <input type="hidden" value=<?php echo $folio; ?> name="folio">
                <input class="form-control" name="modelo" id="texto" type="text" placeholder="ej: MountainRoad" value="<?php echo $modelo; ?>"><br>
                Marca: <br>
                <input class="form-control" name="marca" id="texto2" type="text" placeholder="ej: F-sg-der" value="<?php echo $marca; ?>"><br>
                Inserta una imagen: <br>
                <br>
                <input name="img" id="input-ru" type="file" value="<?php echo $img; ?>">
                <br>
                <br>
                <br>
                 <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-2 pad-adjust" > 
                    </div>
                      <div class="col-md-4 col-sm-4 col-xs-4 pad-adjust" >
                        <input id="botonRegistrar" type="submit"  class="btn btn-primary btn-block title" value="RENTAR" />
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4 pad-adjust">
                          <button type="button"  class="btn btn-primary btn-block title">
                            <a href="index.php" style="text-decoration: none; color: white; ">CANCELAR </a>
                          </button>
                      </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 pad-adjust" > 
                    </div>
                  </div>  
              </form>
              </div>  
              
              </div>          
       
        </section>

     </div>
    </header>

   
    <!-- Bootstrap core JavaScript -->
    <script src="scripts.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

  <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Localizacion</h3>
              <p>Xalapa, Veracruz
                <br>Facultad de Informatica y Estadistica</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Social</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>Equipo 1</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; FEI 2017
            </div>
          </div>
        </div>
      </div>
    </footer>


</html>

<?php
if(isset($_GET['resultado'])){
  if($_GET['resultado']=='1'){
    ?>
      <script type="text/javascript">
        alert('Se guardo correctamente.');
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