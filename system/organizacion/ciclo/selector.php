<?php 



if(isset($_GET['padron'])){
	include('padron/index.php');
}
else
if(isset($_GET['actividad'])){
	include('actividad/index.php');
}else
if(isset($_GET['fotografia'])){
	include('fotografia/index.php');
}
	
	
	

 ?>