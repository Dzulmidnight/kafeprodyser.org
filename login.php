<!DOCTYPE html>
<html lang="es">

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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="index.php#SERVICE">Servicios</a></li>
                <li><a href="index.php#ABOUT">¿Quiénes Somos?</a></li>
                <li><a href="index.php#TESTIMONIAL">Organizaciones</a></li>
                <li><a href="index.php#WORK">Nuestro Trabajo</a></li>
                <li><a href="index.php#CONTACT">Contactanos</a></li>
                <li><a href="login.php">Mi Cuenta</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav> 
     
    </div>  
    </section>         
  </header>

  <section class="about_us_area" id="ABOUT"> <!-- SECCIÓN LOGIN.PHP  -->
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <div class="about_title">
                      <h2>Kafe Prodyser</h2>
                      <img src="images/shape.png" alt="">
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <div class="col-md-12">
                <h3 class="text-center">
                  Tipo de Usuario
                </h3>                
              </div>

              <button id="btn_administrador" class="col-md-12 btn btn-primary cs-btn" onclick="administrador()">Administrador</button>
              <button id="btn_organizacion" class="col-md-12 btn btn-primary cs-btn" onclick="organizacion()">Organización</button>

            </div>
          </div>
          <div class="col-lg-6">
              <form id="frm_administrador" action="connections/autentificar.php" method="POST" style="display:none">

                <div class="col-md-12">
                  <h3 class="text-center">Iniciar Sesión Administrador</h3>
                  <?php
                  if(isset($_GET['error']) && $_GET['error'] == "si"){
                    echo "<div class='col-md-12 text-center alert alert-danger'><p>Datos Incorrectos</p></div>";
                  }
                  ?>

                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu Usuario" autofocus required>
                </div>
                <div class="col-md-12">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu Contraseña" required>
                  <p><a href="">¿Olvidaste tu contraseña?</a></p>
                </div>
                  <input type="hidden" class="form-control" name="clase_usuario" value="administrador" >

                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary cs-btn">Ingresar</button>  
                </div>
                    
              </form>
              <form id="frm_organizacion" action="connections/autentificar.php" method="POST" style="display:none">

                <div class="col-md-12">
                  <h3 class="text-center">Iniciar Sesión Organización</h3>
                  <?php
                  if(isset($_GET['error']) && $_GET['error'] == "si"){
                    echo "<div class='col-md-12 text-center alert alert-danger'><p>Datos Incorrectos</p></div>";
                  }
                  ?>

                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu Usuario" autofocus required>
                </div>
                <div class="col-md-12">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu Contraseña" required>
                  <p><a href="">¿Olvidaste tu contraseña?</a></p>
                </div>
                  <input type="hidden" class="form-control" name="clase_usuario" value="organizacion">

                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary cs-btn">Ingresar</button>  
                </div>
                    
              </form> 

          </div>

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
    <!--<div class="container">
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
    </div>-->
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
                        <p>&copy; Kafe Prodyser 2016.All Design By <a href="http://www.inforganic.net"target="_blank">inforganic.net</a></p>
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

<script>
  function administrador(){
    document.getElementById('btn_administrador').style.background = '#f74d65';
    document.getElementById('btn_organizacion').removeAttribute("style");

    document.getElementById('frm_administrador').style.display = 'block';
    document.getElementById('frm_organizacion').style.display = 'none';
  }
  function organizacion()
  {
    document.getElementById('btn_administrador').removeAttribute("style");
    document.getElementById('btn_organizacion').style.background = '#f74d65';

    document.getElementById('frm_organizacion').style.display = 'block';
    document.getElementById('frm_administrador').style.display = 'none';
  }


</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>




</body>

</html>