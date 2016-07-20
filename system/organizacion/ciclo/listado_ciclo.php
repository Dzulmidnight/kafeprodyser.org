<?php require_once('../../../Connections/organizacion.php'); ?>
<?php
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO ciclo (idorganizacion, ciclo, fecha, descripcion, produccion_volumen, produccion_superficie, numero_productores, hombres, mujeres) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idorganizacion'], "int"),
                       GetSQLValueString($_POST['ciclo'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['produccion_volumen'], "text"),
                       GetSQLValueString($_POST['produccion_superficie'], "text"),
                       GetSQLValueString($_POST['numero_productores'], "int"),
                       GetSQLValueString($_POST['hombres'], "int"),
                       GetSQLValueString($_POST['mujeres'], "int"));

  mysql_select_db($database_organizacion, $organizacion);
  $Result1 = mysql_query($insertSQL, $organizacion) or die(mysql_error());
}

mysql_select_db($database_organizacion, $organizacion);
$query_ciclo = "SELECT * FROM ciclo ORDER BY ciclo ASC";
$ciclo = mysql_query($query_ciclo, $organizacion) or die(mysql_error());
$row_ciclo = mysql_fetch_assoc($ciclo);
$totalRows_ciclo = mysql_num_rows($ciclo);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<div>Listado de ciclos</div>
<div>
<form id="form1" name="form1" method="post" action="">
    <input type="submit" name="button" id="button" value="Agregar ciclo" />
    <input name="add_ciclo" type="hidden" value="1" />
  </form>
</div>
<?php if(isset($_POST['add_ciclo'])){ ?>
<form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
  <table >
  <tr><td colspan="2">Agregar ciclo</td></tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ciclo:</td>
      <td><input type="text" name="ciclo" value=""  /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fecha:</td>
      <td><input type="date" name="fecha" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Descripcion:</td>
      <td><input type="text" name="descripcion" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Produccion_volumen:</td>
      <td><input type="text" name="produccion_volumen" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Produccion_superficie:</td>
      <td><input type="text" name="produccion_superficie" value=""  /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Numero_productores:</td>
      <td><input type="number" name="numero_productores" value=""  /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Hombres:</td>
      <td><input type="number" name="hombres" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Mujeres:</td>
      <td><input type="number" name="mujeres" value=""  /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="idorganizacion" value="session_idorganizacion" />
  <input type="hidden" name="MM_insert" value="form2" />
</form>
<p>&nbsp;</p>
<?php } ?>
<table border="1" cellpadding="5" cellspacing="0">
   <tr>
    <td>idciclo</td>
    <td>ciclo</td>
    <td>fecha</td>
    <td>descripcion</td>
    <td>produccion_volumen</td>
    <td>produccion_superficie</td>
    <td>numero_productores</td>
    <td>hombres</td>
    <td>mujeres</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><a href="detail_ciclo.php?recordID=<?php echo $row_ciclo['idciclo']; ?>"> <?php echo $row_ciclo['idciclo']; ?>&nbsp;cambiar a boton &quot;VER&quot;</a></td>
      <td><?php echo $row_ciclo['ciclo']; ?>&nbsp; </td>
      <td><?php echo $row_ciclo['fecha']; ?>&nbsp; </td>
      <td><?php echo $row_ciclo['descripcion']; ?>&nbsp; </td>
      <td><?php echo $row_ciclo['produccion_volumen']; ?>&nbsp; </td>
      <td><?php echo $row_ciclo['produccion_superficie']; ?>&nbsp; </td>
      <td><?php echo $row_ciclo['numero_productores']; ?>&nbsp; </td>
      <td><?php echo $row_ciclo['hombres']; ?>&nbsp; </td>
      <td><?php echo $row_ciclo['mujeres']; ?>&nbsp; </td>
    </tr>
    <?php } while ($row_ciclo = mysql_fetch_assoc($ciclo)); ?>
</table>
<?php ?>

</body>
</html>
<?php
mysql_free_result($ciclo);
?>
