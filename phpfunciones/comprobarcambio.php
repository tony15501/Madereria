<?php
include('php_conexion.php');

	
	//Conectar a la base de datos
	$linkBaseDatos=conectarse();

	
$Nombre=$_POST['Nombre'];
$Descripcion=$_POST['Descripcion'];
$Cantidad=$_POST['Cantidad'];
$Medidas=$_POST['Medidas'];
$Precio_compra=$_POST['Precio_compra'];
$Precio_venta=$_POST['Precio_venta'];
$Id_producto=$_POST['Id_producto'];

$actualizar=mysql_query("UPDATE inventario SET Nombre='".$Nombre."',
Descripcion='".$Descripcion."',Cantidad='".$Cantidad."',Medidas='".$Medidas."',Precio_compra='".$Precio_compra."',Precio_venta='".$Precio_venta."' WHERE Id_producto='".$Id_producto."'");

if($actualizar)
{
	
		echo"
		<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=ListaTabla.php'>
				
			</head>
		</html>
		
		";
	
}
else

{
	
	echo"
		<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=perfil.php'>
				<script>
					alert('actualizacion fallida');
				</script>
			</head>
		</html>
		
		";
	}

?>
