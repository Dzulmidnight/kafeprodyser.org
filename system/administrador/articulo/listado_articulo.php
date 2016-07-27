<h3>Listado Articulos</h3>
<?php 
	$query = "SELECT nota.*,  usuario.username FROM nota INNER JOIN usuario ON nota.idusuario = usuario.idusuario";
	$row_nota = mysql_query($query,$kafeprod_bio) or die(mysql_error());
?>
<table class="table" style="font-size:12px;">
	<thead>
		<tr>
			<th></th>
			<th>Id</th>
			<th>Tipo</th>
			<th>Fecha</th>
			<th>Usuario</th>
			<th>Contenido_titulo</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		while($datos_nota = mysql_fetch_assoc($row_nota)){
			$fecha = date('d/m/Y',$datos_nota['fecha']);
		?>
			<tr>
				<td>
					<button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $datos_nota['idnota'];?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</td>
				<td><?php echo $datos_nota['idnota']; ?></td>
				<td><?php echo $datos_nota['tipo']; ?></td>
				<td><?php echo $fecha; ?></td>
				<td><?php echo $datos_nota['username']; ?></td>
				<td><?php echo $datos_nota['contenido_titulo']; ?></td>
			</tr>


			<!-- Modal -->
			<div class="modal fade" id="myModal<?php echo $datos_nota['idnota'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title text-center" id="myModalLabel" style="color:#2c3e50"><?php echo $datos_nota['contenido_titulo']; ?></h4>
			      </div>
			      <div class="modal-body" style="color:#34495e">
			      	<div class="row">
			      		<div class="col-md-12">
					      <?php //nl2br

					      	echo "<div class='col-xs-12'><p class='text-justify'>".$datos_nota['contenido_descripcion']."</p></div>";


					      	$nota = "SELECT contenido_titulo, contenido_descripcion, descripcion_img FROM nota WHERE idnota = $datos_nota[idnota]";
					      	$ejecutar = mysql_query($nota,$kafeprod_bio) or die(mysql_error());
					      	$titulo_nota = mysql_fetch_assoc($ejecutar); 

					      	$query = "SELECT * FROM nota_segmento WHERE idnota = $datos_nota[idnota]";
					      	$row_nota_segmento = mysql_query($query,$kafeprod_bio) or die(mysql_error());

					      /*$nota = sprintf("SELECT contenido_titulo,contenido_descripcion,descripcion_img  FROM nota WHERE idnota = %s",
					        GetSQLValueString($datos_nota['idnota'],"int"));
					      $ejecutar = mysql_query($nota,$kafeprod_bio) or die(mysql_error());
					      $titulo_nota = mysql_fetch_assoc($ejecutar);

					      $query_segmento = sprintf("SELECT * FROM nota_segmento WHERE idnota  = %s",
					      GetSQLValueString($datos_nota['idnota'],"int"));

					      $ejecutar = mysql_query($query_segmento,$kafeprod_bio) or die(mysql_error());*/


					      	while($nota_segmento = mysql_fetch_assoc($row_nota_segmento)){
					            if($nota_segmento['tipo'] == 1){
					            ?>
					          <div class="col-xs-6" >

					              <img style="padding:10px;"class="img-responsive" src="<?php echo $nota_segmento['img']; ?>" alt="<?php echo $titulo_nota['descripcion_img']; ?>"> 
					     
					          </div>
					          <div class="col-xs-6">
					   
					              <p class="estilo_noticia text-justify"><?php echo $nota_segmento['texto2']; ?></p> 
					  
					          </div>
					            <?php
					            }
					            if($nota_segmento['tipo'] == 2){
					            ?>
					              <div class="col-xs-12" style="margin-top:10px;">
					             
					                  <img style="padding:10px; display:block;margin:0 auto 0 auto;" class="img-responsive"  src="<?php echo $nota_segmento['img']; ?>" alt=""> 
					      
					              </div>
					            <?php
					            }
					            if($nota_segmento['tipo'] == 3){
					            ?>
					              <div class="col-xs-12">
					           
					                  <h4 class="subtitulo_noticia text-justify"><?php echo $nota_segmento['texto1']; ?></h4> 
					          
					              </div>
					              <div class="col-xs-12">
					       
					                  <p class="estilo_noticia text-justify"><?php echo nl2br($nota_segmento['texto2']); ?></p> 
					   
					              </div>        
					            <?php
					            }
					            if($nota_segmento['tipo'] == 4){
					            ?>
					              <div class="col-xs-12" >
					            
					                  <p class="estilo_noticia text-justify"><?php echo nl2br($nota_segmento['texto2']); ?></p> 
					     
					              </div>
					            <?php
					            }
					      	}
					       ?>	
			      		</div>
			      	</div>
			      </div>
			      <div class=" modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>
		<?php
		}
		 ?>
	</tbody>
</table>