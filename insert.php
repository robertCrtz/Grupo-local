<?php 
	include 'conexion.php';
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$telefono=$_POST['telefono'];
		$ciudad=$_POST['ciudad'];
		$correo=$_POST['correo'];
		$U_O=$_POST['U_O'];
		$rol=$_POST['rol'];

		if($nombre!=null || $apellidos!=null || $telefono!=null ||
			$ciudad!=null || $correo!=null || $U_V!=null){


			$sql="INSERT INTO clientes(
			nombre,
			apellidos,
			telefono,
			ciudad,
			correo,
			U_O,
			rol)
			VALUES(
			'".$nombre."',
			'".$apellidos."',
			'".$telefono."',
			'".$ciudad."',
			'".$correo."',
			'".$U_O."',
			'".$rol."')";
				mysqli_query($con,$sql);
				if($nombre=1){
				header('Location:index.php');
				}
		}else{
			echo "Alerta: Los campos estan vacios";
	}
	 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>Nuevo empleado</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
				<input type="text" name="apellidos" placeholder="Apellidos" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="telefono" placeholder="Teléfono" class="input__text">
				<input type="text" name="ciudad" placeholder="Ciudad" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="correo" placeholder="Correo electrónico" class="input__text">
			</div>
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
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
