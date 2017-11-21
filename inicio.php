<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="inicio.js"></script>

  </head>

  <body id="page-top">

    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Bicicletas INC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Modelos</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="img/iconwhite.png" alt="">
        <div class="intro-text">
          <span class="name">Inventario</span>
          <hr class="star-light">
          <span class="skills">Selecciona tu modelo favorito</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Modelos Disponibles</h2>
        <hr class="star-primary">
        <p> - </p>
        <div class="row">
          
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#modal1" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php
              $conexion = new mysqli("localhost", "admBicis", "123456", "bicicletas");
                if (mysqli_connect_errno()) {
                      printf("Connect failed: %s\n", mysqli_connect_error());
                        exit();
                  } 

    $query="SELECT * FROM bicicleta";

    $resultados=mysqli_query($conexion,$query);
    $fila=mysqli_fetch_row($resultados);
              echo "<img id='imagen1' class='img-fluid' src='img/bicicletas/".basename($fila[5])."' >";
              ?>
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#modal2" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
               <?php
              $fila=mysqli_fetch_row($resultados);
              echo "<img class='img-fluid' src='img/bicicletas/".basename($fila[5])."' />";

              
              ?>
              
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#modal3" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php
              $fila=mysqli_fetch_row($resultados);
              echo "<img class='img-fluid' src='img/bicicletas/".basename($fila[5])."' />";

              
              ?>
              
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#modal4" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php
              $fila=mysqli_fetch_row($resultados);
              echo "<img class='img-fluid modalImg' src='img/bicicletas/".basename($fila[5])."' />";

              
              ?>
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#modal5" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php
              $fila=mysqli_fetch_row($resultados);
              echo "<img class='img-fluid' src='img/bicicletas/".basename($fila[5])."' />";

              
              ?>
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#modal6" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php
              $fila=mysqli_fetch_row($resultados);
              echo "<img class='img-fluid modalImg' src='img/bicicletas/".basename($fila[5])."' />";
              $fila=null;
              $query=null;
              $conexion=null;
              $resultados=null;
              ?>

            </a>
            <a id='botonAlert' href='CargarDatos.php'  class='btn btn-success'><i class='fa fa-fw fa-send'></i>Mostrar Todas</a>
          </div>

        </div>

      </div>
            
    </section>
     <h2 class ="text-center">
              <a href="registrarBicicleta.php" type="button" class= "btn btn-primary">Agregar Nuevo</a>
      

             </h2>

    
   
      

    

  
    
    <!-- About Section -->
   

    <!-- Contact Section -->
    

    <!-- Footer -->
    <section id="about">

   
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
              <p>Freelance is a free to use, open source Bootstrap theme created by
                <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
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
     </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Bicicleta</h2>
                  <hr class="star-primary">
              <!--Imagen-->
              <?php
              $conexion = new mysqli("localhost", "admBicis", "123456", "bicicletas");
                if (mysqli_connect_errno()) {
                      printf("Connect failed: %s\n", mysqli_connect_error());
                        exit();
                  } 

    $query="SELECT * FROM bicicleta";

    $resultados=mysqli_query($conexion,$query);
    $fila=mysqli_fetch_row($resultados);
              echo "<img id='imagen1' class='img-fluid' src='img/bicicletas/".basename($fila[5])."' >";
              ?>
                  
                  <p> DESCRIPCION DEL MODELO</p>
                  <ul class="list-inline item-details">
                    
                    <li>Folio:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[0]."</a>";
                    ?>
                        
                      </strong>
                    </li>
                    <li>Modelo:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[1]."</a>";
                    ?>
                        
                      </strong>
                    </li>
                    <li>Marca:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[2]."</a>";
                    ?>
                        
                      </strong>
                    </li>
                  </ul>
                  <a href="borrar.php" type="button" class= "btn btn-primary fa fa-times">Eliminar</a>
                  

                    <a class='btn btn-primary' href='/ProyectoBicicletas/RegistrarBicicleta.php?folio="<?php echo $fila[0]; ?>"'>Editar</a>
                    <p></p>
                    <p>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                  </P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Bicicleta</h2>
                  <hr class="star-primary">
                   <?php $fila=mysqli_fetch_row($resultados);
              echo "<img id='imagen1' class='img-flu<li>Folio:id' src='img/bicicletas/".basename($fila[5])."' >";
              ?>
            
                  
                  <p> DESCRIPCION DEL MODELO</p>
                  <ul class="list-inline item-details">
                    <li>Folio:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[0]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Modelo:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[1]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Marca:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[2]."</a>";
                    ?>
                        
                      </strong>
                    </li>
                  </ul>
                  <a href="borrar1.php" type="button" class= "btn btn-primary fa fa-times">Eliminar</a>
                     <a class='btn btn-primary' href='/ProyectoBicicletas/RegistrarBicicleta.php?folio="<?php echo $fila[0]; ?>"'>Editar</a>
                    <p></p>
                    <p>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                  </P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="modal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Modelo 1</h2>
                  <hr class="star-primary">
                 <?php $fila=mysqli_fetch_row($resultados);
              echo "<img id='imagen1' class='img-fluid' src='img/bicicletas/".basename($fila[5])."' >";
              ?>
            
                  
                  <p> DESCRIPCION DEL MODELO</p>
                  <ul class="list-inline item-details">
                    <li>Folio:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[0]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Modelo:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[1]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Marca:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[2]."</a>";
                    ?>
                      </strong>
                    </li>
                  </ul>
                  <a href="borrar2.php" type="button" class= "btn btn-primary fa fa-times">Eliminar</a>
                    <a class='btn btn-primary' href='/ProyectoBicicletas/RegistrarBicicleta.php?folio="<?php echo $fila[0]; ?>"'>Editar</a>
                    <p></p>
                    <p>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                  </P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="modal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Modelo 1</h2>
                  <hr class="star-primary">
              <?php $fila=mysqli_fetch_row($resultados);
              echo "<img id='imagen1' class='img-fluid' src='img/bicicletas/".basename($fila[5])."' >";
              ?>
            
                  
                  <p> DESCRIPCION DEL MODELO</p>
                  <ul class="list-inline item-details">
                    <li>Folio:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[0]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Modelo:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[1]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Marca:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[2]."</a>";
                    ?>
                      </strong>
                    </li>
                  </ul>
                  <a href="borrar3.php" type="button" class= "btn btn-primary fa fa-times">Eliminar</a>
                    <a class='btn btn-primary' href='/ProyectoBicicletas/RegistrarBicicleta.php?folio="<?php echo $fila[0]; ?>"'>Editar</a>
                    <p></p>
                    <p>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                  </P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="modal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Modelo 1</h2>
                  <hr class="star-primary">
              
              <?php $fila=mysqli_fetch_row($resultados);
              echo "<img id='imagen1' class='img-fluid' src='img/bicicletas/".basename($fila[5])."' >";
              ?>
                  
                  <p> DESCRIPCION DEL MODELO</p>
                  <ul class="list-inline item-details">
                    <li>Folio:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[0]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Modelo:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[1]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Marca:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[2]."</a>";
                    ?>
                      </strong>
                    </li>
                  </ul>
                  <a href="borrar4.php" type="button" class= "btn btn-primary fa fa-times">Eliminar</a>
                     <a class='btn btn-primary' href='/ProyectoBicicletas/RegistrarBicicleta.php?folio="<?php echo $fila[0]; ?>"'>Editar</a>
                    <p></p>
                    <p>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                  </P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="modal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Modelo 1</h2>
                  <hr class="star-primary">
              
            <?php $fila=mysqli_fetch_row($resultados);
              echo "<img id='imagen1' class='img-fluid' src='img/bicicletas/".basename($fila[5])."' >";
              ?>
                  
                  <p> DESCRIPCION DEL MODELO</p>
                  <ul class="list-inline item-details">
                    <li>Folio:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[0]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Modelo:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[1]."</a>";
                    ?>
                      </strong>
                    </li>
                    <li>Marca:
                      <strong>
                        <?php
                    echo "<a href=''>".$fila[2]."</a>";
                    ?>
                      </strong>
                    </li>
                  </ul>
                  <a href="borrar5.php" type="button" class= "btn btn-primary fa fa-times">Eliminar</a>
                    <a class='btn btn-primary' href='/ProyectoBicicletas/RegistrarBicicleta.php?folio="<?php echo $fila[0]; ?>"'>Editar</a>
                    <p></p>
                    <p>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                  </P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <!-- Bootstrap core JavaScript -->
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
  if($_GET['resultado']=='2'){
    ?>
      <script type="text/javascript">
        alert('Se edito correctamente.');
      </script>
    <?php
  
    
  }
}
?>

