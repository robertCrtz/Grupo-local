<?php
	include 'conexion.php';

	$sql="SELECT *FROM clientes ORDER BY id DESC";
	$resultado=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<center><h1>Listado</h1></center>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<a href="insert.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table>
			<tr class="head">
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Teléfono</td>
				<td>Ciudad</td>
				<td>Correo</td>
				<td>U. Organizativa</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['ciudad']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><?php echo $fila['U_O']; ?></td>
					<td><a href="update.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>