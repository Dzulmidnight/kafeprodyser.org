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
	                    <li><a href="#HOME">Inicio</a></li>
	                    <li><a href="#">Tienda</a></li>
                      <li><a href="#SERVICE">Servicios</a></li>
	                    <li><a href="#ABOUT">¿Quiénes Somos?</a></li>
	                    <li><a href="#TESTIMONIAL">Organizaciones</a></li>
	                    <li><a href="#WORK">Nuestro Trabajo</a></li>
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
<form  class=" inline-form" action=""  method="post">
<div class="form-group">
<label for="nombre">Nombre completo</label>
<input required class="form-control" type="text" name="nombre" placeholder="Nombre completo o empresa">
</div>
<div class="form-group">
<label for="nombre">Email</label>
<input required class="form-control" type="email" name="email" placeholder="Email de contacto">
</div>
<div class="form-group">
<img class=" img-thumbnail" width="100" src="images/producto1.png" alt="">
<label for="producto1">Kafe prodyser<br>Presentación 1Kg, Gourmet Tostado y molido</label>
</div>
<div class="form-group">
<label for="nombre">Cantidad</label>
<input  class="form-control" type="number" name="cantidad" placeholder="Cantidad">
</div>
<div class="form-group">
<label for="nombre">Información de envio:</label>
<textarea class="form-control"  name="envio"></textarea>
</div>
<div class="form-group">
<label for="nombre">Detalles especiales:</label>
<textarea class="form-control"  name="detalles"></textarea>
</div>

<button class=" form-control bnt btn-primary">Enviar orden</button> 
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
            
            
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i><img src="images/fruto.png" alt=""></i>
                        <h2 style="margin-top:80px;">Cereza</h2>
                        <p>El rendimiento  de cereza a  pergamino es:
245:57.5</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i><img src="images/grano.png" alt=""></i>
                        <h2 style="margin-top:90px;">Tostado</h2>
                        <p>El rendimiento  de  oro a tostado es:
aprox. 46:37</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i><img src="images/molido7.jpg" alt=""></i>
                        <h2>Molido</h2>
                        <p>El rendimiento  de  tostado a  molido es prácticamente de 100 %</p>
                    </div>
                </div>
                
                
                
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i><a href="index.php?order=true"><img src="images/taza4.jpg" alt="" border="0"></a></i>
                      <h2>Black Coffee</h2>
                        <p>From Chiapas 100%<br>
                        <a href="index.php?order=true">ORDER NOW!</a></p>
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
                    <p class="about_us_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sed quia non numquam eius modi tempora.</p>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
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
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores<br/> eos qui ratione voluptatem sequi nesciunt.</p>
                    <h4>-JOHN DOE</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius<br/> modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <h4>-JOHN SMITH</h4>
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
	                                    <i class="icon-toolbox"></i>
	                                    <h3>300</h3>
	                                    <p>Project Done</p>
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-clock"></i>
	                                    <h3>1700+</h3>
	                                    <p>Hours Worked</p>
	                                </div>                            
	                            </div>
	                            <div class="col-md-4">
	                                <div class="single_count">
	                                    <i class="icon-trophy"></i>
	                                    <h3>37</h3>
	                                    <p>Awards Won</p>
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