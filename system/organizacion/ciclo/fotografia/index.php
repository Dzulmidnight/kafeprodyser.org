<?php
if (isset($_GET['recordID'])) {
  $_GET['idciclo'] = $_GET['recordID'];
}
?>
<?php require_once('../../Connections/organizacion.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO fotografia (idciclo, url, titulo, descripcion, fecha) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['idciclo'], "int"),
                       GetSQLValueString($_POST['url'], "text"),
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"));

  mysql_select_db($database_organizacion, $organizacion);
  $Result1 = mysql_query($insertSQL, $organizacion) or die(mysql_error());
}

$colname_fotografia_list = "-1";
if (isset($_GET['idciclo'])) {
  $colname_fotografia_list = $_GET['idciclo'];
}
mysql_select_db($database_organizacion, $organizacion);
$query_fotografia_list = sprintf("SELECT * FROM fotografia WHERE idciclo = %s ORDER BY fecha ASC", GetSQLValueString($colname_fotografia_list, "int"));
$fotografia_list = mysql_query($query_fotografia_list, $organizacion) or die(mysql_error());
$row_fotografia_list = mysql_fetch_assoc($fotografia_list);
$totalRows_fotografia_list = mysql_num_rows($fotografia_list);


?>

<div class="col-lg-4">
<div class="col-lg-2">Fotografias agregadas a este ciclo</div>
<div class="col-lg-1">
<form id="form1" name="form1" method="post" action="">
    <input class="btn btn-primary form-control" type="submit" name="button" id="button" value="Agregar fotografia" />
    <input name="add_fotografia" type="hidden" value="1" />
  </form>
</div>
<table  class="table table-bordered">
  <?php do { ?>
    <tr>
      <td rowspan="4"><?php echo $row_fotografia_list['url']; ?></td>
    </tr>
    <tr>
      <td><?php echo $row_fotografia_list['fecha']; ?></td>
    </tr>
    <tr>
      <td><h3><?php echo $row_fotografia_list['titulo']; ?></h3></td>
    </tr>
    <tr>
      <td><?php echo $row_fotografia_list['descripcion']; ?></td>
    </tr>
    <?php } while ($row_fotografia_list = mysql_fetch_assoc($fotografia_list)); ?>
</table>
</div>
<div class="col-lg-4">
<?php if(isset($_POST['add_fotografia'])){?>
Agregar fotografia
<form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
  <table class="table table-bordered">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Url:</td>
      <td><input type="file" name="url" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Titulo:</td>
      <td><input class="form-control" type="text" name="titulo" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right" valign="top">Descripcion:</td>
      <td><textarea class="form-control" name="descripcion" cols="50" rows="5"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fecha:</td>
      <td><input type="date" class="form-control" name="fecha" value=""/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" class="form-control btn btn-primary" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="idciclo" value="<?php echo $_GET['idciclo']; ?>" />
  <input type="hidden" name="MM_insert" value="form2" />
</form>
<p>&nbsp;</p>
<?php }?>
</div>

<?php
mysql_free_result($fotografia_list);
?>
