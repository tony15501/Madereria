<?php

	include('php_conexion.php');

	
	//Conectar a la base de datos
	$linkBaseDatos=conectarse();

	$Id_producto=$_GET['Id'];
				
	$borrar=mysql_query("DELETE  FROM inventario WHERE Id_producto='".$Id_producto."'");
	if ($borrar)
	{

		echo "

			<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=ListaTabla.php'>
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