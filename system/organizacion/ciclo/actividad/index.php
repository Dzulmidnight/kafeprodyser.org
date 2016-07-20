<?php
if (isset($_GET['recordID'])) {
  $_GET['idciclo'] = $_GET['recordID'];
}
?>
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
  $insertSQL = sprintf("INSERT INTO actividad (idciclo, actividad, descripcion, fecha_inicio, fecha_fin, beneficio_biodiversidad, fotografia) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idciclo'], "int"),
                       GetSQLValueString($_POST['actividad'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['fecha_inicio'], "text"),
                       GetSQLValueString($_POST['fecha_fin'], "text"),
                       GetSQLValueString($_POST['beneficio_biodiversidad'], "text"),
                       GetSQLValueString($_POST['fotografia'], "text"));

  mysql_select_db($database_organizacion, $organizacion);
  $Result1 = mysql_query($insertSQL, $organizacion) or die(mysql_error());
}

$colname_actividad_list = "-1";
if (isset($_GET['idciclo'])) {
  $colname_actividad_list = $_GET['idciclo'];
}
mysql_select_db($database_organizacion, $organizacion);
$query_actividad_list = sprintf("SELECT * FROM actividad WHERE idciclo = %s ORDER BY fecha_inicio ASC", GetSQLValueString($colname_actividad_list, "int"));
$actividad_list = mysql_query($query_actividad_list, $organizacion) or die(mysql_error());
$row_actividad_list = mysql_fetch_assoc($actividad_list);
$totalRows_actividad_list = mysql_num_rows($actividad_list);


?>

<div class="col-lg-4">
<div class="col-lg-2">Actividades agregadas a este ciclo</div>
<div class="col-lg-1">
<form id="form1" name="form1" method="post" action="">
    <input class="btn btn-primary form-control" type="submit" name="button" id="button" value="Agregar actividad" />
    <input name="add_actividad" type="hidden" value="1" />
  </form>
</div>
<table  class="table table-bordered">
  <tr>
    <td>actividad</td>
    <td>descripcion</td>
    <td>fecha_inicio</td>
    <td>fecha_fin</td>
    <td>beneficio_biodiversidad</td>
    <td>fotografia</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_actividad_list['actividad']; ?></td>
      <td><?php echo $row_actividad_list['descripcion']; ?></td>
      <td><?php echo $row_actividad_list['fecha_inicio']; ?></td>
      <td><?php echo $row_actividad_list['fecha_fin']; ?></td>
      <td><?php echo $row_actividad_list['beneficio_biodiversidad']; ?></td>
      <td><?php echo $row_actividad_list['fotografia']; ?></td>
    </tr>
    <?php } while ($row_actividad_list = mysql_fetch_assoc($actividad_list)); ?>
</table>
</div>
<div class="col-lg-4">
<?php if(isset($_POST['add_actividad'])){?>
Agregar actividad
<form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
  <table class="table table-bordered" >
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Actividad:</td>
      <td><input class="form-control" type="text" name="actividad" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right" valign="top">Descripcion:</td>
      <td><textarea class="form-control" name="descripcion" cols="50" rows="5"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fecha_inicio:</td>
      <td><input type="date" class="form-control" name="fecha_inicio" value=""/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fecha_fin:</td>
      <td><input type="date" class="form-control" name="fecha_fin" value=""/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right" valign="top">Beneficio_biodiversidad:</td>
      <td><textarea class="form-control" name="beneficio_biodiversidad" ></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fotografia:</td>
      <td><input type="file" name="fotografia" value=""  /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input class="form-control btn btn-primary" type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="idciclo" value="<?php echo $_GET['idciclo']; ?>" />
  <input type="hidden" name="MM_insert" value="form2" />
</form>
<p>&nbsp;</p>
<?php }?>
</div>

<?php
mysql_free_result($actividad_list);
?>
