<?php 
if(isset($_GET['menu'])){
	$menu = $_GET['menu'];
}
switch ($menu) {
	case 'cuenta':
		include('cuenta/detalle.php');
		break;
	case 'usuarios':
		include("users/users.php");
		break;
	
	default:

		break;
}
 ?>