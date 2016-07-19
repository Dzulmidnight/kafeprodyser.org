<?php 
	if($_SESSION["autentificado"] == false){
		header("Location: ../../login.php");
	}
	mysql_select_db($database_kafeprod_bio, $kafeprod_bio);



	if(isset($_POST['agregar_usuario']) && $_POST['agregar_usuario'] == 1){
		$clase = $_POST['clase'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];

		$query = "INSERT INTO usuario(clase, username, password, nombre, email) VALUES('$clase', '$username', '$password', '$nombre', '$email')";
		$insertar = mysql_query($query,$kafeprod_bio) or die(mysql_error());
		$mensaje = "Usuario Agregado Correctamente";

	}
	if(isset($_POST['eliminar_usuario']) && $_POST['eliminar_usuario'] == 1){
		$idusuario = $_POST['idusuario'];
		$query = "DELETE FROM usuario WHERE idusuario = '$idusuario'";
		$borrar = mysql_query($query,$kafeprod_bio) or die(mysql_error());
		$mensaje = "Usuario Eliminado Correctamente";
	}
	if(isset($_POST['actualizar_usuario']) && $_POST['actualizar_usuario'] == 1){
		$idusuario = $_POST['idusuario'];
		$clase = $_POST['clase'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];

		$query = "UPDATE usuario SET clase = '$clase', username = '$username', password = '$password', nombre = '$nombre', email = '$email' WHERE idusuario = $idusuario";
		$actualizar = mysql_query($query,$kafeprod_bio) or die(mysql_error());
		$mensaje = "Usuario Actualizado Correctamente";

	}

	$query = "SELECT * FROM usuario";
	$row_usuario = mysql_query($query,$kafeprod_bio) or die(mysql_error());

 ?>
 <div class="row">
 	<div class="col-md-12">
 		<h3>Usuarios</h3>
 		<hr>
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
 		<!--<button class="btn btn-default">Listado</button>
 		<button class="btn btn-default">Agregar Usuario</button>-->
 	</div>

 	<div class="col-md-6">
 		<h4 style="display:inline;">Listado Usuarios</h4> <?php if(isset($_GET['detalle'])){ echo '<a class="btn btn-primary btn-sm" href="?menu=usuarios"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Nuevo Usuario</a>';} ?>
 		<table class="table" style="font-size:12px;">
 			<thead>
 				<tr>
 					<th>Clase</th>
 					<th>Username</th>
 					<th>Password</th>
 					<th>Nombre</th>
 					<th>Email</th>
 				</tr>
 			</thead>
 			<form action="" method="POST">
 	 			<tbody>
	 				<?php 
	 				while($usuario = mysql_fetch_assoc($row_usuario)){
	 				$idusuario = $usuario['idusuario'];
	 				
	 				if(isset($_GET['detalle']) && ($_GET['detalle'] == $idusuario)){
	 					$clase = 'class="alert alert-info"';
	 				}else{
	 					$clase = '';
	 				}
	 				?>

	 				<tr <?php echo $clase; ?>>
	 					<td><?php echo $usuario["clase"]; ?></td>
	 					<td><?php echo $usuario["username"]; ?></td>
	 					<td><?php echo $usuario["password"]; ?></td>
	 					<td><?php echo $usuario["nombre"]; ?></td>
	 					<td><?php echo $usuario["email"]; ?></td>
	 					<td>
	 						<a class="btn btn-warning" href="?menu=usuarios&detalle=<?php echo $idusuario; ?>">
	 							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
	 						</a>
							<button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro ?, los datos se eliminaran permanentemente');">
							  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</button>
							<input type="hidden" name="eliminar_usuario" value="1">
							<input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
	 					</td>
	 				</tr>
	 				<?php
	 				}
	 				 ?>
	 			</tbody>
 			</form>
 		</table>
 	</div>
 	<?php 
	if(isset($_GET['detalle'])){
		$idusuario = $_GET['detalle'];
		$query = "SELECT * FROM usuario WHERE idusuario = $idusuario";
		$row_usuario = mysql_query($query,$kafeprod_bio) or die(mysql_errno());
		$detail_usuario = mysql_fetch_assoc($row_usuario);
	?>
		<div class="col-md-6">
			<h4>Detalle Usuario</h4>
			<form action="" method="POST">
				<label for="clase">Clase</label>
				<input type="text" class="form-control" id="clase" name="clase" value="<?php echo $detail_usuario['clase'];?>">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username" value="<?php echo $detail_usuario['username'];?>">
				<label for="password">Password</label>
				<input type="text" class="form-control" id="password" name="password" value="<?php echo $detail_usuario['password'];?>">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $detail_usuario['nombre'];?>">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" value="<?php echo $detail_usuario['email'];?>">
				<input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
				<input type="hidden" class="form-control" name="actualizar_usuario" value="1">
				<input type="submit" class="btn btn-success" value="Actualizar">
			</form>
		</div>
	<?php
	}else{
	?>
		<div class="col-md-6">
			<h4>Agregar Usuario</h4>
			<form action="" method="POST">
				<label for="clase">Clase</label>
				<input type="text" class="form-control" id="clase" name="clase">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username">
				<label for="password">Password</label>
				<input type="text" class="form-control" id="password" name="password">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email">
				<input type="hidden" class="form-control" name="agregar_usuario" value="1">
				<input type="submit" class="btn btn-success" value="Agregar">
			</form>
		</div>
	<?php
	}
	 ?>
 </div>