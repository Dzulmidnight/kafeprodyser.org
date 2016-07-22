<!DOCTYPE html>
<html lang="es">
<?php
// *** Validate request to login to this site.
  require_once("connections/sesion.php");
  //require_once("connections/mail.php");
  require_once("connections/kafeprod_bio.php");

if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }

    $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

    switch ($theType) {
      case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;    
      case "long":
      case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
      case "double":
        $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
        break;
      case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
  }
}

  mysql_select_db($database_kafeprod_bio, $kafeprod_bio);

  $query = "SELECT nota.*,  usuario.username FROM nota INNER JOIN usuario ON nota.idusuario = usuario.idusuario";
  $row_nota = mysql_query($query,$kafeprod_bio) or die(mysql_error());
 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KAFEPRODYSER</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>




    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a style="margin-top:-11px;" class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt=""></a>
	                </div>
	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
	                    <li><a href="index.php#HOME">Inicio</a></li>
	                    <li><a href="index.php#">Tienda</a></li>
                      <li><a href="index.php#SERVICE">Servicios</a></li>
	                    <li><a href="index.php#ABOUT">¿Quiénes Somos?</a></li>
	                    <li><a href="index.php#TESTIMONIAL">Organizaciones</a></li>
	                    <li class="active"><a href="index.php#WORK">Nuestro Trabajo</a></li>
	                    <li><a href="index.php#CONTACT">Contactanos</a></li>
                      <li><a href="login.php">Mi Cuenta</a></li>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 
	        </div>  
	    </section>         
    </header>
    <hr>
    <?php 
    if(isset($_GET['articulo'])){

  /*$insertSQL = sprintf("INSERT INTO actividad (idciclo, actividad, descripcion, fecha_inicio, fecha_fin, beneficio_biodiversidad, fotografia) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idciclo'], "int"),
                       GetSQLValueString($_POST['actividad'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['fecha_inicio'], "text"),
                       GetSQLValueString($_POST['fecha_fin'], "text"),
                       GetSQLValueString($_POST['beneficio_biodiversidad'], "text"),
                       GetSQLValueString($ruta_img, "text"));

  mysql_select_db($database_organizacion, $organizacion);
  $Result1 = mysql_query($insertSQL, $organizacion) or die(mysql_error());*/

      $nota = sprintf("SELECT contenido_titulo FROM nota WHERE idnota = %s",
        GetSQLValueString($_GET['articulo'],"int"));
      $ejecutar = mysql_query($nota,$kafeprod_bio) or die(mysql_error());
      $titulo_nota = mysql_fetch_assoc($ejecutar);

      $query_segmento = sprintf("SELECT * FROM nota_segmento WHERE idnota  = %s",
      GetSQLValueString($_GET['articulo'],"int"));

      $ejecutar = mysql_query($query_segmento,$kafeprod_bio) or die(mysql_error());
      
    ?>
    <section class="about_us_area" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2><?php echo $titulo_nota['contenido_titulo']; ?></h2>
                        <img src="images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row">
          <?php 
          while($row_segmento = mysql_fetch_assoc($ejecutar)){
                    if($row_segmento['tipo'] == 1){
                    ?>
                  <div class="col-xs-6" style="background-color:#95a5a6">
                    <p>IMAGEN</p>
                    <img class="img-responsive" src="<?php echo $row_segmento['img']; ?>" alt="">
                  </div>
                  <div class="col-xs-6" style="background-color:#bdc3c7">
                    <p>TEXTO 2</p>
                    <?php echo $row_segmento['texto2']; ?>
                  </div>
                    <?php
                    }
                    if($row_segmento['tipo'] == 2){
                    ?>
                        <div class="col-xs-12 text-center" style="background-color:#1abc9c">
                          <p>IMAGEN</p>
                          <img class="img-responsive"  src="<?php echo $row_segmento['img']; ?>" alt="">
                        </div>
                    <?php
                    }
                    if($row_segmento['tipo'] == 3){
                    ?>
                        <div class="col-xs-12" style="background-color:#27ae60">
                          <p>TEXTO 1</p>
                          <?php echo $row_segmento['texto1']; ?>
                        </div>
                        <div class="col-xs-12" style="background-color:#2980b9">
                          <p>TEXTO 2</p>
                          <?php echo $row_segmento['texto2']; ?>
                        </div>        
                    <?php
                    }
                    if($row_segmento['tipo'] == 4){
                    ?>
                        <div class="col-xs-12" style="background-color:#e74c3c">
                          <p>TEXTO 2</p>
                          <?php echo $row_segmento['texto2']; ?>
                        </div>
                    <?php
                    }
          ?>
          <?php
          }
          ?>

        </div>

    </section>
    <?php
    }
     ?>

    <h2 class="text-center" style="color:#e67e22;margin-top:2em;">NUESTRO TRABAJO</h2>
    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
              <!-------------------------- INICIA SECCIÓN ARTICULOS ---------------------------->
              <?php 
              while($detalle_nota = mysql_fetch_assoc($row_nota)){
                $query_segmento = mysql_query("SELECT img FROM nota_segmento WHERE idnota = $detalle_nota[idnota] LIMIT 1",$kafeprod_bio) or die(mysql_error());
                $img_segmento = mysql_fetch_assoc($query_segmento);
                //retiramos las etiquetas html que contiene la descripción para despues solo mostrar 200 caracteres
                $descripcion = strip_tags($detalle_nota['contenido_descripcion']);
              ?>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                      <!----- INICIA SECCION DE LA NOTICIA ---->
                      <div class="col-xs-12">
                        <div class="row">
                          <img style="height:100px;" class="" src="system/<?php echo $img_segmento['img']; ?>" alt="<?php echo $detalle_nota['descripcion_img']; ?>">
                          
                        </div>
                      </div>
                        <div class="col-xs-12">
                          <div class="col-xs-8">
                            <div class="row">
                              <h4 class="text-left"><?php echo "<p style='color:#e74c3c'>".$detalle_nota['contenido_titulo']."</p>"; ?></h4>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="row">
                              <h5><?php echo date('d/m/Y',$detalle_nota['fecha']); ?></h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="row">
                            <p style="text-align:justify"><?php echo substr($descripcion, 0, 200)." ..."; ?></p>    
                          </div>
                        </div>
                        <div class="col-xs-12 text-left">
                          <div class="row">
                            <a  class="btn btn-primary cs-btn" href="?articulo=<?php echo $detalle_nota['idnota'];?>">Leer Más</a>
                              
                          </div>
                        </div>
                      <!----- TERMINA SECCION DE LA NOTICIA ---->
                    </div>
                </div>      
              <?php
              } 
              ?>

                <!--<div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
  
                      <div class="col-xs-12">
                        <div class="row">
                          <img style="height:100px;" class="" src="images/fruto.png" alt="">
                        </div>
                      </div>
                        <div class="col-xs-12">
                          <div class="col-xs-6">
                            <div class="row">
                              <h4 class="text-left" style="color:#e74c3c">Titulo noticia</h4>
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="row">
                              <h5>Fecha</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="row">
                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, error, eos. Ea voluptatem et corporis atque, inventore quos iure odit pariatur sunt id, quidem rem delectus incidunt accusamus libero. Voluptatibus.im.</p>    
                          </div>
                        </div>
                        <div class="col-xs-12 text-left">
                          <div class="row">
                            <button type="submit" class="btn btn-primary cs-btn">Leer Más</button>   
                          </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
  
                      <div class="col-xs-12">
                        <div class="row">
                          <img style="height:100px;" class="" src="images/fruto.png" alt="">
                        </div>
                      </div>
                        <div class="col-xs-12">
                          <div class="col-xs-6">
                            <div class="row">
                              <h4 class="text-left" style="color:#e74c3c">Titulo noticia</h4>
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="row">
                              <h5>Fecha</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="row">
                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, error, eos. Ea voluptatem et corporis atque, inventore quos iure odit pariatur sunt id, quidem rem delectus incidunt accusamus libero. Voluptatibus.im.</p>    
                          </div>
                        </div>
                        <div class="col-xs-12 text-left">
                          <div class="row">
                            <button type="submit" class="btn btn-primary cs-btn">Leer Más</button>   
                          </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
  
                      <div class="col-xs-12">
                        <div class="row">
                          <img style="height:100px;" class="" src="images/fruto.png" alt="">
                        </div>
                      </div>
                        <div class="col-xs-12">
                          <div class="col-xs-6">
                            <div class="row">
                              <h4 class="text-left" style="color:#e74c3c">Titulo noticia</h4>
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="row">
                              <h5>Fecha</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="row">
                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, error, eos. Ea voluptatem et corporis atque, inventore quos iure odit pariatur sunt id, quidem rem delectus incidunt accusamus libero. Voluptatibus.im.</p>    
                          </div>
                        </div>
                        <div class="col-xs-12 text-left">
                          <div class="row">
                            <button type="submit" class="btn btn-primary cs-btn">Leer Más</button>   
                          </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                  
                      <div class="col-xs-12">
                        <div class="row">
                          <img style="height:100px;" class="" src="images/fruto.png" alt="">
                        </div>
                      </div>
                        <div class="col-xs-12">
                          <div class="col-xs-6">
                            <div class="row">
                              <h4 class="text-left" style="color:#e74c3c">Titulo noticia</h4>
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="row">
                              <h5>Fecha</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="row">
                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, error, eos. Ea voluptatem et corporis atque, inventore quos iure odit pariatur sunt id, quidem rem delectus incidunt accusamus libero. Voluptatibus.im.</p>    
                          </div>
                        </div>
                        <div class="col-xs-12 text-left">
                          <div class="row">
                            <button type="submit" class="btn btn-primary cs-btn">Leer Más</button>   
                          </div>
                        </div>
                ---->
                    </div>
                </div>
              <!-------------------------- TERMINA SECCIÓN ARTICULOS ---------------------------->
            </div>            
        </div>
    </section>

    


    <!--<section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated">
                    <div class="left">
                        <h2>LOOKING FOR EXCLUSIVE DIGITAL SERVICES?</h2>
                        <p>Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. 
                        Integer non dapibus diam, ac eleifend lectus.</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                    <div class="baton">
	                    <a href="#CONTACT">
	                        <button type="button" class="btn btn-primary cs-btn">Let's Talk</button>
	                    </a>    
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>get in touch</h1>
                        <img src="images/shape.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Me</h2>
                        <p>+88 00 123 456 01</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Me</h2>
                        <p>Hello@abdullahnoman.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Address</h2>
                        <p>216 Street Address, Barisal, BD</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="images/logo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href="http://www.facebook.com/abdullah.noman99"target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/absconderm"target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://www.dribbble.com/abdullahnoman"target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; Kafe Prodyser 2016.All Right Reserved. Design by <a href="http://inforganic.net/">Inforganic</a></p>
                        <!--<p>Made with love for creative people.</p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>











<!-- =========================
     SCRIPTS 
============================== -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>




</body>

</html>