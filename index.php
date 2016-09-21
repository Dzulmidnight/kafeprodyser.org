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
	                    <li><a href="index.php?order=true">Tienda</a></li>
                      <li><a href="#SERVICE">Servicios</a></li>
	                    <li><a href="#ABOUT">¿Quiénes Somos?</a></li>
	                    <li><a href="#TESTIMONIAL">Organizaciones</a></li>
	                    <li><a href="nuestro_trabajo.php">Nuestro Trabajo</a></li>
	                    <li><a href="#CONTACT">Contactanos</a></li>
                      <li><a href="login.php">Mi Cuenta</a></li>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 

	         
	                <!--<div class="row">
	                    <div class="col-md-12 text-center">
	                        <!--<div class="home_text wow fadeInUp animated" >
                               
                                    <h2>KAFE PRODYSER</h2>
                                    <p>a user interface and user experience specialist</p>
                                    <img src="images/shape.png" alt="">   
                                                   
	                        </div>



	                    </div>
	                </div>-->

                <div id="banner" style="padding:0px;">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                      </ol>

					
                     <?php if(isset($_GET['order'])){?>
	  								 

<section>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="container" style="color:#333">
<div class="row">
<h4>Coffee from Chiapas - Orden de compra</h4>
<br>
</div>
<div class="row">
<div class="col-lg-6">
<br>
<p>&nbsp;</p><p>&nbsp;</p>
<img width="360" src="images/14u.jpg" alt="">
</div>
<div class="col-lg-6">
<?php

if (!isset($_POST['email_orden'])) {
?>		
<form  class=" inline-form" action=""  method="post">
<div class="form-group">
<label for="nombre">Nombre completo</label>
<input required class="form-control" type="text" name="nombre_orden" placeholder="Nombre completo o empresa">
</div>
<div class="form-group">
<label for="nombre">Email</label>
<input required class="form-control" type="email" name="email_orden" placeholder="Email de contacto">
</div>
<div class="form-group">
<img class=" img-thumbnail" width="100" src="images/producto1.png" alt="">
<label for="producto1">Kafe prodyser<br>Presentación 1Kg, Gourmet Tostado y molido</label>
</div>
<div class="form-group">
<label for="nombre">Cantidad</label>
<input  class="form-control" type="number" name="cantidad_orden" placeholder="Cantidad">
</div>
<div class="form-group">
<label for="nombre">Información de envio:</label>
<textarea class="form-control"  name="envio_orden"></textarea>
</div>
<div class="form-group">
<label for="nombre">Detalles especiales:</label>
<textarea class="form-control"  name="detalles_orden"></textarea>
</div>

<button type="submit" value="enviar" class="btn btn-primary submit-btn form_submit">Enviar orden</button>

<?php } else{
	?><label for="nombre"><h5>ORDEN ENVIADA</h5></label> <?						   
$destino1="contacto@inforganic.net,kafeprodyser@outlook.com";
$remitente = "kafeprodyser.org<kafeprodyser@outlook.com>";
$asunto= "Orden de compra";
$mensaje='
<table width="99%" border="0" align="center">
  <tr>
    <td bgcolor="#E59866" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FDFEFE; font-size: 18px; text-align: center;">Coffee from Chiapas - Orden de compra</td>
  </tr>
  <tr>
    <td height="200" bgcolor="#FFFFFF" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; color: #D35400; font-weight: bold; text-align: center;">
	Correo enviado desde la sección Orden de compra de la pagina [www.kafeprodyser.org].<br>
	
	<table border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
  
    <td>
      <table  border="1" align="center" >
      <tr>
        <td colspan="2" align="center" style="font-size: 18px">Información de contacto:</td>
        
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Nombre completo:</td>
        <td align="center" bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['nombre_orden'].'</td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Email:</td>
        <td align="center" bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['email_orden'].'</td>
      </tr>
      <tr>
	  <td colspan="2" bgcolor="#17202A" style="color: #FFF"> Kafe prodyser<br>Presentación 1Kg, Gourmet Tostado y molido</td>
	  </tr>
	  <tr>
	 
        <td bgcolor="#E59866" style="color: #FFF">Cantidad:</td>
        <td bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['cantidad_orden'].'</td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Información de envio:</td>
        <td bgcolor="#FDFEFE  " style="color: ##17202A">'.$_POST['envio_orden'].'</td>
      </tr>
	  <tr>
        <td bgcolor="#E59866" style="color: #FFF">Detalles especiales:</td>
        <td bgcolor="#FDFEFE  " style="color: ##17202A">'.$_POST['detalles_orden'].'</td>
      </tr>
    </table></td>
  </tr>
</table>
    </td>
  </tr>
  
</table>
';
$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html; charset=iso-8859-1";
mail($destino1, $asunto, $mensaje, $encabezados) or die ("Su mensaje no se envio.");	
//FIN NOTIFICACION POR CORREO
?>
 
<?php
}
?>              
</form>
</div>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</section>
<?
											 
											 
											 
											 //include("order.php");
											 }?>
						
						
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                      
                     
                      
                        <div class="item active ">
                          <img src="images/carousel/cerazasCafe.jpg" alt="servicio agricola sajiem s.c">
                          <div class="carousel-caption">
                            <h2>LOREM</h2>
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/carousel/cafeManos.jpg" alt="servicio agricola sajiem s.c">
                          <div class="carousel-caption">
                            <h2>LOREM</h2>
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/carousel/granosCafe.jpg" alt="servicio agricola sajiem s.c">
                          <div class="carousel-caption">
                            <h2>LOREM</h2>
                            <small>Tenemos a la venta cafè tostado y molido ORGANICO, informes a los telefonos 961 611 0563 o directamente en nuestras oficinas en 15 Oriente Sur 370, Col. Santa Cruz Tuxtla Gutierrez, Chiapas.</small>
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/carousel/guacamaya.jpg" alt="servicio forestal sajiem s.c">
                          <div class="carousel-caption">
                            <h2>LOREM</h2>
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/carousel/flor.jpg" alt="servicio forestal sajiem s.c">
                          <div class="carousel-caption">
                            <h2>LOREM</h2>
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/carousel/jaguar.jpg" alt="servicio forestal sajiem s.c">
                          <div class="carousel-caption">
                            <h2>LOREM</h2>
                          </div>
                        </div>



                      </div>


                      
                    </div>                  
                </div>

	         
           
	        </div>  
	    </section>         
    </header>


    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
            <a name="order"></a>
            
            
                <div class="col-md-2 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i><img src="images/fruto.png" alt=""></i>
                        <h2 style="margin-top:80px;">Cereza</h2>
                        <p>El rendimiento  de cereza a  pergamino es:
245:57.5</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i><img src="images/grano.png" alt=""></i>
                        <h2 style="margin-top:90px;">Tostado</h2>
                        <p>El rendimiento  de  oro a tostado es:
aprox. 46:37</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i><img src="images/molido7.jpg" alt=""></i>
                        <h2>Molido</h2>
                        <p>El rendimiento  de  tostado a  molido es prácticamente de 100%</p>
                    </div>
                </div>
                
                
                
                <div class="col-md-2 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i><a href="index.php?order=true"><img src="images/taza4.jpg" alt="" border="0"></a></i>
                      <h2>Black Coffee</h2>
                        <p>From Chiapas 100%<br>
                        <a href="index.php?order=true">ORDER NOW!</a>
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="5s">
                        <i><a href="http://www.facebook.com/profile.php?id=100011481371856" target="_blank"><img src="images/facebook.jpg" alt=""></a></i>
                        <h2>Facebook!</h2>
                        <p>Visitanos en nuestras redes sociales</p>
                    </div>
                </div>
                
                
            </div>            
        </div>
    </section>
    <section class="about_us_area" id="ABOUT">
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
            
                <div class="col-md-4  wow fadeInLeft animated">
                    <div class="single_progress_bar">
                        <h2>DESIGN - 90%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>DEVELOPMENT - 60%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>MARKETING - 75%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>SEO - 95%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Descripción de Kafeprodyser, historia, misión, visión</p>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Descripción de Kafeprodyser, historia, misión, visión</p>
                </div>
            </div>
        </div>
    </section>
    

    <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
        <div class="container">
            <div class="icon">
                <i class="icon-quote"></i>
            </div>
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>Pequeños productores organizados y comprometidos con la biodiversidad.</p>
                    <h4>www.Kafeprodyser.org</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>Café orgánico de alta calidad</p>
                    <h4>www.Kafeprodyser.org</h4>
                </div>
            </div>            
        </div>
    </section>


    <div class="fun_facts">
    	<section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
	        <div class="section_overlay">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6 wow fadeInLeft animated">
	                        <div class="row">
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <h3>15</h3>
	                                    <p>Organizaciones de Pequeños Productores</p>
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <h3>3,401</h3>
	                                    <p>Productores Orgánicos<br>&nbsp;</p>
	                                </div>                            
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <h3>8,606</h3>
	                                    <p>Hectáreas<br>&nbsp;</p>
	                                </div>                            
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
	                        <div class="imac">
	                            <img src="images/jaguar.png" alt="">
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>
	    </section>    
    </div>
    <section class="work_area" id="WORK">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title  wow fadeInUp animated">
                        <h1>Latest Works</h1>
                        <img src="images/shape.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna <br> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w1.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w2.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w3.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
            </div>      
        </div>
    </section>
    <section class="call_to_action">
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
    </section>
    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>mantente en contacto</h1>
                        <img src="images/shape.png" alt="">
                        <p>Si quieres saber más sobre nuestro trabajo en apoyo y conservación de la biodiversidad, producción de café orgánico o estás interesado en comprar nuestro producto, dejanos un mensaje utilizando el formulario a continuación:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Llama</h2>
                        <p>+52 1 965 104 3252</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Escribe</h2>
                        <p>kafeprodyser@outlook.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Visita</h2>
                        <p>15 Oriente Sur 370, Col. Santa Cruz, Tuxtla Gutiérrez, Chiapas. C.P. 29073D</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                <iframe name="destino" width="1" height="1" ></iframe>
             <?php
if (!isset($_POST['email'])) {
?>
  <form class="contact-form" action="" method="post"  >
                    
                    
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre o empresa">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email de contacto">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="message" id="message" rows="25" cols="10" placeholder="  Mensaje..."></textarea>
                        <button type="submit" value="enviar" class="btn btn-default submit-btn form_submit">Enviar mensaje</button> 
                       <?php } else{
						   
$destino1="contacto@inforganic.net,kafeprodyser@outlook.com";
$remitente = "kafeprodyser.org<kafeprodyser@outlook.com>";
$asunto= $_POST['subject'];
$mensaje='
<table width="99%" border="0" align="center">
  <tr>
    <td bgcolor="#E59866" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FDFEFE; font-size: 18px; text-align: center;">Kafeprodyser, Notificación automatica</td>
  </tr>
  <tr>
    <td height="200" bgcolor="#FFFFFF" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; color: #D35400; font-weight: bold; text-align: center;">
	Hola este es un correo enviado desde la sección de contacto de la pagina [www.kafeprodyser.org].<br>
	
	<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td>
      <table  border="0" align="center" >
      <tr>
        <td style="font-size: 18px">Formulario de contacto:</td>
        <td align="center"></td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Nombre:</td>
        <td align="center" bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['name'].'</td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Email:</td>
        <td align="center" bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['email'].'</td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Asunto:</td>
        <td bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['subject'].'</td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Mensaje:</td>
        <td bgcolor="#FDFEFE  " style="color: ##17202A">'.$_POST['message'].'</td>
      </tr>
    </table></td>
  </tr>
</table>
    </td>
  </tr>
  
</table>
';
$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html; charset=iso-8859-1";
mail($destino1, $asunto, $mensaje, $encabezados) or die ("Su mensaje no se envio.");	
//FIN NOTIFICACION POR CORREO
?>
 
<?php
}
?>              
                                     
 
                          
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
                        <h3>Gracias por visitar kafeprodyser.org!</h3>
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
                            <li><a href="http://www.facebook.com/kafeprodyser"target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; Kafe Prodyser 2016.All Right Reserved</p>
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