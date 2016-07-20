<?php require_once('../../../Connections/organizacion.php'); ?><?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE ciclo SET ciclo=%s, fecha=%s, descripcion=%s, produccion_volumen=%s, produccion_superficie=%s, numero_productores=%s, hombres=%s, mujeres=%s WHERE idciclo=%s",
                       GetSQLValueString($_POST['ciclo'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['produccion_volumen'], "text"),
                       GetSQLValueString($_POST['produccion_superficie'], "text"),
                       GetSQLValueString($_POST['numero_productores'], "int"),
                       GetSQLValueString($_POST['hombres'], "int"),
                       GetSQLValueString($_POST['mujeres'], "int"),
                       GetSQLValueString($_POST['idciclo'], "int"));

  mysql_select_db($database_organizacion, $organizacion);
  $Result1 = mysql_query($updateSQL, $organizacion) or die(mysql_error());
}

$colname_DetailRS1 = "-1";
if (isset($_GET['recordID'])) {
  $colname_DetailRS1 = $_GET['recordID'];
}
mysql_select_db($database_organizacion, $organizacion);
$query_DetailRS1 = sprintf("SELECT * FROM ciclo WHERE idciclo = %s ORDER BY ciclo ASC", GetSQLValueString($colname_DetailRS1, "int"));
$DetailRS1 = mysql_query($query_DetailRS1, $organizacion) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<div>
<form id="form1" name="form1" method="post" action="listado_ciclo.php">
    <input type="submit" name="button" id="button" value="Listado de ciclos" />
  </form>
</div>
<br />
inicio menu horizontal<br />
Poner en forma de botones:<br />
<ul>
<li>
<div>
<form id="form1" name="form1" method="post" action="?recordID=<? echo $_GET['recordID'];?>&padron=true">
    <input type="submit" name="button" id="button" value="Padron" />
    <input name="add_ciclo" type="hidden" value="1" />
  </form>
</div>
</li>
<li>
<div>
<form id="form1" name="form1" method="post" action="?recordID=<? echo $_GET['recordID'];?>&actividad=true">
    <input type="submit" name="button" id="button" value="Actividades" />
    <input name="add_ciclo" type="hidden" value="1" />
  </form>
</div>
</li>
<li>
<div>
<form id="form1" name="form1" method="post" action="?recordID=<? echo $_GET['recordID'];?>&fotografia=true">
    <input type="submit" name="button" id="button" value="Fotografias" />
    <input name="add_ciclo" type="hidden" value="1" />
  </form>
</div>
</li>
</ul>
Fin menu horizontal</div>
<div class="col-lg-4">
div laretal izquierdo col-4
<form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
  <table >
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ciclo:</td>
      <td><input type="text" name="ciclo" value="<?php echo htmlentities($row_DetailRS1['ciclo'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fecha:</td>
      <td><input type="text" name="fecha" value="<?php echo htmlentities($row_DetailRS1['fecha'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Descripcion:</td>
      <td><input type="text" name="descripcion" value="<?php echo htmlentities($row_DetailRS1['descripcion'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Produccion_volumen:</td>
      <td><input type="text" name="produccion_volumen" value="<?php echo htmlentities($row_DetailRS1['produccion_volumen'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Produccion_superficie:</td>
      <td><input type="text" name="produccion_superficie" value="<?php echo htmlentities($row_DetailRS1['produccion_superficie'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Numero_productores:</td>
      <td><input type="text" name="numero_productores" value="<?php echo htmlentities($row_DetailRS1['numero_productores'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Hombres:</td>
      <td><input type="text" name="hombres" value="<?php echo htmlentities($row_DetailRS1['hombres'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Mujeres:</td>
      <td><input type="text" name="mujeres" value="<?php echo htmlentities($row_DetailRS1['mujeres'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form2" />
  <input type="hidden" name="idciclo" value="<?php echo $row_DetailRS1['idciclo']; ?>" />
</form>


<div class="col-lg-8">

<?php 
include("selector.php");
?>
<br />
incluir selector para opciones:<br />
-

</div>


</body>
</html><?php
mysql_free_result($DetailRS1);
?>