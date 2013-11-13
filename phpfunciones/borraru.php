<?php

	include('php_conexion.php');

	
	//Conectar a la base de datos
	$linkBaseDatos=conectarse();

	$Id_usuario=$_GET['Id'];
				
	$borrar=mysql_query("DELETE  FROM usuario WHERE Id_usuario='".$Id_usuario."'");
	if ($borrar)
	{

		echo "

			<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=ListaUsuarios.php'>
				<script>
					alert('Borrado con exito');
				</script>
			</head>
		</html>

			";
	}

	else 
	{
		echo"
		<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=Usuarios.php'>
				<script>
					alert('fallo el borrado');
				</script>
			</head>
		</html>
		
		";
	}
?>