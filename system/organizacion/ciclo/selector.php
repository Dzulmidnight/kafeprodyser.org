<?php 


if(isset($_GET['padron'])){
	include('padron/index.php');
}
if(isset($_GET['actividades'])){
	include('actividad/index.php');
}
if(isset($_GET['fotografias'])){
	include('fotografia/index.php');
}
 ?>
<!--<a class="btn <?php if($menu == 'ciclo'){ echo 'btn btn-primary';}else{ echo 'btn btn-default'; } ?>" href="?menu=ciclo">Ciclo</a>
<a class="btn <?php if($menu == 'padron'){ echo 'btn btn-primary';}else{ echo 'btn btn-default'; } ?>" href="?menu=padron">Padron</a>
<a class="btn <?php if($menu == 'actividades'){ echo 'btn btn-primary';}else{ echo 'btn btn-default'; } ?>" href="?menu=actividades">Actividades</a>
<a class="btn <?php if($menu == 'fotografias'){ echo 'btn btn-primary';}else{ echo 'btn btn-default'; } ?>" href="?menu=fotografias">Fotografías</a>
-->

