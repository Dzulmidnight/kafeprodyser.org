<?php 
if(isset($_GET['nota'])){
	$idnota = $_GET['nota'];
}
if(isset($_POST['agregar_segmento']) && $_POST['agregar_segmento'] == 1){

		$idnota = $idnota;
		$tipo_segmento = $_POST['tipo_segmento'];
		$texto1 = $_POST['texto1'];
		$texto2 = $_POST['texto2'];

		
		if(!empty($_FILES['img']['name'])){
			$ruta_img = "../img/notas/";
			$ruta_img = $ruta_img . basename( $_FILES['img']['name']); 
			if(move_uploaded_file($_FILES['img']['tmp_name'], $ruta_img)){ 
				//echo "El archivo ". basename( $_FILES['img']['name']). " ha sido subido";
			} /*else{
				echo "Ha ocurrido un error, trate de nuevo!";
			}*/
		}else{
			$ruta_img = '';
		}


		$query = "INSERT INTO nota_segmento (idnota, tipo, texto1, texto2, img) VALUES($idnota, '$tipo_segmento', '$texto1', '$texto2', '$ruta_img')";
		$insertar = mysql_query($query,$kafeprod_bio) or die(mysql_error());

		$mensaje = "Segmento Agregado Correctamente";
}

	$query = "SELECT nota.*, usuario.username FROM nota LEFT JOIN usuario ON nota.idusuario = usuario.idusuario";
	$row_nota = mysql_query($query,$kafeprod_bio) or die(mysql_errno());
 ?>

<div class="row">
	<div class="col-lg-12">
 		<?php 
 		if(isset($mensaje)){
 		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $mensaje; ?>
			</div>
		<?php
 		}
 		 ?>
	</div>
	
	<div class="col-md-4" style="padding:0px;">
		<div class="col-xs-12" style="padding:0px;">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Listado Notas</h3>
			  </div>
				  <table class="table table-hover" style="font-size:12px;">
				  	<thead>
				  		<tr>
				  			<th>Id</th>
				  			<th>Titulo</th>
				  			<th>Username</th>
				  			<th>Segmento(s)</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  	<?php 
				  	while($nota = mysql_fetch_assoc($row_nota)){
				  		$query = "SELECT idnota_segmento FROM nota_segmento WHERE idnota = $nota[idnota]";
				  		$row_nota_segmento = mysql_query($query,$kafeprod_bio) or die(mysql_error());
				  		$total_segmentos = mysql_num_rows($row_nota_segmento);
				  	?>
				  		<tr <?php if(isset($idnota) && $idnota == $nota['idnota']){echo 'class="alert alert-info"';} ?> >
				  			<td><?php echo $nota['idnota']; ?></td>
				  			<td><?php echo $nota['contenido_titulo']; ?></td>
				  			<td><?php echo $nota['username']; ?></td>
				  			<td>
				  				<?php 
				  				if($total_segmentos == 0){
				  					echo 0;
				  				}else{
				  				?>
					  				<a class="btn btn-sm btn-success" data-toggle="tooltip" title="Visualizar Segmento(s)" href="?menu=articulo&add_segmento&detail=<?php echo $nota['idnota']; ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> <span class="badge"><?php echo $total_segmentos; ?></span></a>

				  				<?php
				  				}
				  				 ?>
				  			</td>
				  			<td>
				  				<a class="btn btn-xs btn-success" href="?menu=articulo&add_segmento&nota=<?php echo $nota['idnota']; ?>">Añadir<br> Segmento</a>
				  			</td>
				  		</tr>
					<?php
				  	}
				  	 ?>
				  	</tbody>
				  </table>
			</div>
		</div>
		<div class="col-xs-12" style="padding:0px;">
		<?php 
		if(isset($_GET['segmento']) && $_GET['segmento'] != 0){
			$idnota = $_GET['detail'];
			$idnota_segmento = $_GET['segmento'];
			$query_segmento = "SELECT * FROM nota_segmento WHERE idnota = $idnota";
			$row_nota_segmento = mysql_query($query_segmento,$kafeprod_bio) or die(mysql_error());


		?>
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Listado Notas</h3>
			  </div>
				  <table class="table table-hover" style="font-size:12px;">
				  	<thead>
				  		<tr>
				  			<th>Id</th>
				  			<th>Tipo</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  	<?php 
				  	while($segmento = mysql_fetch_assoc($row_nota_segmento)){
				  	?>
				  		<tr <?php if($segmento['idnota_segmento'] == $idnota_segmento){ echo 'class="alert alert-info"'; } ?> >
				  			<td><?php echo $segmento['idnota_segmento']; ?></td>
				  			<td><?php echo $segmento['tipo']; ?></td>
				  			<td>
				  				<a class="btn btn-sm btn-warning" href="?menu=articulo&add_segmento&detail=1&segmento=<?php echo $segmento['idnota_segmento']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
				  			</td>
				  		</tr>
					<?php
				  	}
				  	 ?>
				  	</tbody>
				  </table>
			</div>
		<?php
		}
		 ?>
		</div>
	</div>

	<?php 
	if(isset($_GET['nota']) && $_GET['nota'] != ''){
	?>
		<div class="col-md-8" style="padding:0px;">
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Agregar Segmento1</h3>
				  </div>
				  <div class="panel-body">
					<div class="col-md-6">
						<label for="tipo_segmento">Tipo Segmento</label>
						<select class="form-control" name="tipo_segmento" id="tipo_segmento" onchange="myFunction()">
							<option value="">...</option>
							<option value="1">Tipo 1</option>
							<option value="2">Tipo 2</option>
							<option value="3">Tipo 3</option>
							<option value="4">Tipo 4</option>
						</select>
					</div>
					<div id="img_segmento" class="col-md-6" style="display:block">
						<div class="row">
							<label for="img">Imagen</label>
							<input class="form-control" type="file" id="img" name="img">	
						</div>		
					</div>
					<div id="texto1_segmento" class="col-md-12" style="display:block">
						<div class="row">
							<label for="texto1">Texto 1</label>
							<textarea class="textarea form-control" id="texto1" name="texto1"></textarea>	
						</div>					
					</div>
					<div id="texto2_segmento" class="col-md-12" style="display:block">
						<div class="row">
							<label for="texto2">Texto 2</label>
							<textarea class="textarea form-control" id="texto2" name="texto2"></textarea>	
						</div>
					</div>
				  </div>
				</div>
				<input type="hidden" name="agregar_segmento" value="1">
				<input class="btn btn-success" type="submit" value="Agregar">
			</form>
		</div>
	<?php
	}
	if(isset($_GET['detail'])){
		$idnota = $_GET['detail'];
		$query = "SELECT nota_segmento.*, nota.fecha, nota.contenido_titulo FROM nota_segmento INNER JOIN nota ON nota_segmento.idnota = nota.idnota WHERE nota_segmento.idnota = $idnota";
		$row_nota_segmento = mysql_query($query,$kafeprod_bio) or die(mysql_error());

		$query = "SELECT nota.contenido_titulo FROM nota WHERE idnota = $idnota";
		$row_nota = mysql_query($query,$kafeprod_bio) or die(mysql_error());
		$nota = mysql_fetch_assoc($row_nota);
	?>
		<div class="col-md-8" style="padding:0px;">
			<?php 
			if(isset($_GET['segmento']) && $_GET['segmento'] != 0){
				$idnota_segmento = $_GET['segmento'];
				$query = "SELECT * FROM nota_segmento WHERE idnota_segmento = $idnota_segmento";
				$consultar = mysql_query($query,$kafeprod_bio) or die(mysql_error());
				$datos_segmento = mysql_fetch_assoc($consultar);
			?>
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Agregar Segmento2</h3>
				  </div>
				  <div class="panel-body">
					<div class="col-md-6">
						<label for="tipo_segmento">Tipo Segmento</label>
						<select class="form-control" name="tipo_segmento" id="tipo_segmento">
							<option value="">...</option>
							<option value="1" <?php if($datos_segmento['tipo'] == 1){ echo "selected"; } ?> >Tipo 1</option>
							<option value="2" <?php if($datos_segmento['tipo'] == 2){ echo "selected"; } ?> >Tipo 2</option>
							<option value="3" <?php if($datos_segmento['tipo'] == 3){ echo "selected"; } ?> >Tipo 3</option>
							<option value="4" <?php if($datos_segmento['tipo'] == 4){ echo "selected"; } ?> >Tipo 4</option>
						</select>
					</div>
					<div class="col-md-6">

						<?php 
						if(!empty($datos_segmento['img'])){
						?>
							<div class="col-xs-6">
								<label for="img_actual">Imagen Actual</label>
								<img id="img_actual" width="100" height="100" src="<?php echo $datos_segmento['img']; ?>" alt="">
							</div>
							<div class="col-xs-6">
								<label for="img">Reemplazar</label>
								<input class="form-control" type="file" id="img" name="img">	
							</div>
							
						<?php
						}else{
						?>
							<input class="form-control" type="file" id="img" name="img">
						<?php
						} 
						?>
									
					</div>
					<div class="col-md-12">
						<label for="texto1">Texto 1</label>
						<textarea class="textarea form-control" id="texto1" name="texto1"><?php echo $datos_segmento['texto1']; ?></textarea>
						
						<label for="texto2">Texto 2</label>
						<textarea class="textarea form-control" id="texto2" name="texto2"><?php echo $datos_segmento['texto2']; ?></textarea>
					</div>
				  </div>
				</div>
				<input type="hidden" name="agregar_segmento" value="1">
				<input class="btn btn-success" type="submit" value="Agregar">
			</form>
			<?php
			}else{
			?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><?php echo "Listado Segmento(s): ".$nota['contenido_titulo']; ?> </h3>
					  </div>
					  <table class="table" style="font-size:12px;">
					  	<thead>
					  		<tr>
					  			<th>Id</th>
					  			<th>Nota</th>
					  			<th>Tipo</th>
					  			<th>Texto1</th>
					  			<th>Texto2</th>
					  			<th>Imagen</th>
					  		</tr>
					  	</thead>
					  	<tbody>
					  		<?php 
					  		while($nota_segmento = mysql_fetch_assoc($row_nota_segmento)){
					  		?>
					  			<tr>
					  				<td><?php echo $nota_segmento['idnota_segmento']; ?></td>
					  				<td><?php echo $nota_segmento['idnota']; ?></td>
					  				<td><?php echo $nota_segmento['tipo']; ?></td>
					  				<td><?php echo $nota_segmento['texto1']; ?></td>
					  				<td><?php echo $nota_segmento['texto2']; ?></td>
					  				<td>
					  					<?php 
					  					if(empty($nota_segmento['img'])){
					  					?>
											No Disponible
										<?php
					  					}else{
					  					?>
											<a href="<?php echo $nota_segmento['img']; ?>" target="_blank"><img  class="img-thumbnail" style="width:80px;height:80px;" src="<?php echo $nota_segmento['img']; ?>" alt=""></a>
					  					<?php
					  					}
					  					 ?>
					  				</td>
					  				<td>
					  					<a class="btn btn-warning" data-toggle="tooltip" title="Editar Segmento" href="?menu=articulo&add_segmento&detail=1&segmento=<?php echo $nota_segmento['idnota_segmento']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					  					<button class="btn btn-danger" data-toggle="tooltip" title="Eliminar Segmento" type="submit" onclick="return confirm('¿Está seguro ?, los datos se eliminaran permanentemente');"><span aria-hidden="true" class="glyphicon glyphicon-trash"></span></button>
					  				</td>
					  			</tr>
					  		<?php
					  		}
					  		 ?>
					  	</tbody>
					  </table>
					</div>
					<input type="hidden" name="agregar_segmento" value="1">
					<input class="btn btn-success" type="submit" value="Agregar">
				</form>
			<?php
			}
			 ?>
		</div>
	<?php
	}
	?>
</div>

<script>
	/* SEGMENTO TIPO 1
		*img_segmento
		*texto2_segmento
	*/
	function myFunction() {
	    var x = document.getElementById("tipo_segmento").value;
	    if(x == 1){
			document.getElementById('img_segmento').style.display = 'none';
			document.getElementById('texto2_segmento').style.display = 'none';
	    }
	    if(x == 1){
		document.getElementById('img_segmento').style.display = 'block';
		document.getElementById('texto2_segmento').style.display = 'block';
	    }

	    if(x == 1){
		document.getElementById('img_segmento').style.display = 'block';
		document.getElementById('texto2_segmento').style.display = 'block';
	    }

	    if(x == 1){
			document.getElementById('img_segmento').style.display = 'none';
			document.getElementById('texto2_segmento').style.display = 'none';
	    }
	    
	}


	/* SEGMENTO TIPO 2
		*img_segmento
	*/


	/* SEGMENTO TIPO 3
		*texto1_segmento
		*texto2_segmento
	*/


	/* SEGMENTO TIPO 4
		*texto2_segmento
	*/

	function segmento4(){
		document.getElementById('img_segmento').style.display = 'block';
		document.getElementById('texto2_segmento').style.display = 'block';
	}

  /*function administrador(){
    document.getElementById('btn_administrador').style.background = '#f74d65';
    document.getElementById('btn_organizacion').removeAttribute("style");

    document.getElementById('frm_administrador').style.display = 'block';
    document.getElementById('frm_organizacion').style.display = 'none';
  }
  function organizacion()
  {
    document.getElementById('btn_administrador').removeAttribute("style");
    document.getElementById('btn_organizacion').style.background = '#f74d65';

    document.getElementById('frm_organizacion').style.display = 'block';
    document.getElementById('frm_administrador').style.display = 'none';
  }
*/

</script>
