<?php
$hostname_kafeprod_bio = "localhost";
$database_kafeprod_bio = "kafeprod_bio";
$username_kafeprod_bio = "root";
$password_kafeprod_bio = "";

/*$username_kafeprod_bio = "dspporg_user";
$password_kafeprod_bio = "]ng@XX(4R6iM";
*/
$kafeprod_bio = mysql_connect($hostname_kafeprod_bio, $username_kafeprod_bio, $password_kafeprod_bio) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
