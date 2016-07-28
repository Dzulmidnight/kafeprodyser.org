<?php if(isset($_POST['email'])) {


						   
$destino1="Amirv90@gmail.com";
$remitente = "Orden de compra Kafeprodyser<donotreply@kafeprodyser.org>";
$asunto= "Orden de compra";
$mensaje='
<table width="99%" border="0" align="center">
  <tr>
    <td bgcolor="#E59866" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FDFEFE; font-size: 18px; text-align: center;">Coffee from Chiapas - Orden de compra</td>
  </tr>
  <tr>
    <td height="200" bgcolor="#FFFFFF" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; color: #D35400; font-weight: bold; text-align: center;">
	Correo enviado desde la sección Orden de compra de la pagina [www.prodyser.org].<br>
	
	<table border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
  
    <td>
      <table  border="1" align="center" >
      <tr>
        <td colspan="2" align="center" style="font-size: 18px">Información de contacto:</td>
        <td align="center"></td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Nombre completo:</td>
        <td align="center" bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['nombre_orden'].'</td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Email:</td>
        <td align="center" bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['email_orden'].'</td>
      </tr>
      <tr>
	  <td colspan="2" bgcolor="#17202A" style="color: #FFF"> Kafe prodyser<br>Presentación 1Kg, Gourmet Tostado y molido</td>
	  </tr>
	  <tr>
	 
        <td bgcolor="#E59866" style="color: #FFF">Cantidad:</td>
        <td bgcolor="#FDFEFE  " style="color: #17202A">'.$_POST['cantidad_orden'].'</td>
      </tr>
      <tr>
        <td bgcolor="#E59866" style="color: #FFF">Información de envio:</td>
        <td bgcolor="#FDFEFE  " style="color: ##17202A">'.$_POST['envio_orden'].'</td>
      </tr>
	  <tr>
        <td bgcolor="#E59866" style="color: #FFF">Detalles especiales:</td>
        <td bgcolor="#FDFEFE  " style="color: ##17202A">'.$_POST['detalles_orden'].'</td>
      </tr>
    </table></td>
  </tr>
</table>
    </td>
  </tr>
  
</table>
';
$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html; charset=iso-8859-1";
mail($destino1, $asunto, $mensaje, $encabezados) or die ("Su mensaje no se envio.");	
//FIN NOTIFICACION POR CORREO
?>
 
<?php
}
?>              
