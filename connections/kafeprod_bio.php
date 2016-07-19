<?php
$hostname_kafeprod_bio = "localhost";
//$database_kafeprod_bio = "fa000006_dspp";
$username_kafeprod_bio = "root";
$password_kafeprod_bio = "";


$database_kafeprod_bio = "kafeprod_bio";
/*$username_kafeprod_bio = "kafeprod_user";
$password_kafeprod_bio = "SV(miXSO.rph";*/
$kafeprod_bio = mysql_connect($hostname_kafeprod_bio, $username_kafeprod_bio, $password_kafeprod_bio) or trigger_error(mysql_error(),E_USER_ERROR); 

?>
