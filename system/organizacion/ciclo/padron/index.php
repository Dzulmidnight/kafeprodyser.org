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
  $insertSQL = sprintf("INSERT INTO padron (idciclo, url, fecha, descripcion) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['idciclo'], "int"),
                       GetSQLValueString($_POST['url'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"));

  mysql_select_db($database_organizacion, $organizacion);
  $Result1 = mysql_query($insertSQL, $organizacion) or die(mysql_error());
}

$colname_padron_list = "-1";
if (isset($_GET['idciclo'])) {
  $colname_padron_list = $_GET['idciclo'];
}
mysql_select_db($database_organizacion, $organizacion);
$query_padron_list = sprintf("SELECT * FROM padron WHERE idciclo = %s", GetSQLValueString($colname_padron_list, "int"));
$padron_list = mysql_query($query_padron_list, $organizacion) or die(mysql_error());
$row_padron_list = mysql_fetch_assoc($padron_list);
$totalRows_padron_list = mysql_num_rows($padron_list);
?>

<div class="col-lg-4">

    Padrones agregados a este ciclo

  <div>
    <form id="form1" name="form1" method="post" action="">
      <input class="btn btn-primary form-control" type="submit" name="button" id="button" value="Agregar padron" />
      <input name="add_padron" type="hidden" value="1" />
    </form>
  </div>
  <div>
    <table class="table table-bordered">
      <tr>
        <td>descargar</td>
        <td>fecha</td>
        <td>descripcion</td>
      </tr>
      <?php do { ?>
        <tr>
          <td>icono descarga y link<?php echo $row_padron_list['url']; ?></td>
          <td><?php echo $row_padron_list['fecha']; ?></td>
          <td><?php echo $row_padron_list['descripcion']; ?></td>
        </tr>
        <?php } while ($row_padron_list = mysql_fetch_assoc($padron_list)); ?>
    </table>    
  </div>
</div>
<div class="col-lg-4">
  <?php if(isset($_POST['add_padron'])){?>
  Agregar padron
  <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
    <table class="table table-bordered">
      <tr valign="baseline">
        <td nowrap align="right">Url:</td>
        <td><input class="form-control" type="file" name="url" value=""></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Fecha:</td>
        <td><input class="form-control" type="date" name="fecha" value="" ></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Descripcion:</td>
        <td><textarea class="form-control" name="descripcion"></textarea></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input class="form-control btn btn-primary" type="submit" value="Insert record"></td>
      </tr>
    </table>
    <input type="hidden" name="idciclo" value="<?php echo $_GET['idciclo']; ?>">
    <input type="hidden" name="MM_insert" value="form2">
  </form>
  <?php }?>
</div>

<?php
mysql_free_result($padron_list);
?>
