<?php 
	include'conexion.php';
	if(isset($_POST['actualizar'])){ 
		$id=$_POST['id'];
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$U_O=$_POST['U_O'];
		$rol=$_POST['rol'];

		if($nombre!=null || $correo!=null){

			$sql="UPDATE clientes SET
			nombre='$nombre', 
			correo='$correo', 
			U_O='$U_O',
			WHERE id='$id'";
		mysqli_query($con,$sql);

	}else{
		echo "Por favor, complete los campos";
	}

		if ($nombre=1){
			header('location:index.php');
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<form action="index.php" class="formulario" method="post"><br>
		<input type="text" name="id" placeholder="Ingresar ID">
		<input type="text" name="nombre" placeholder="Ingrese su nombre">
		<input type="text" name="correo" placeholder="Ingrese su email">
		<div class="form-group">
			<select name="U_O" placeholder="Unidades Organizativas:" class="input__text" >
				<option>Administracion</option>
				<option>Recursos humanos</option>
				<option>Auditoria</option>
				<option>Legal</option>
				<option>Operacion</option>
				<option>Desarrollador</option>
			</select>
		</div>
		<div class="form-group">
				<select name="rol" placeholder="Rol:" class="input__text" >
					<option>Coordinador</option>
					<option>Supervisor</option>
					<option>Colaborador</option>
					<option>Tecnico</option>
					<option>Profesional</option>
					<option>Analista</option>
				</select>
		</div>
			<a href="index.php" class="btn btn__actualizar">Actualizar</a>
	</form>
</body>
</html>