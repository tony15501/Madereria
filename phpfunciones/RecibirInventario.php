<?php
$Id_producto=rand(100000,999999);
$Nombre=$_POST['Nombre'];
$Descripcion=$_POST['Descripcion'];
$Tipo_producto=$_POST['Tipo_producto'];
$Categoria=$_POST['Categoria'];
$Cantidad=$_POST['Cantidad'];
$Medidas=$_POST['Medidas'];
$Precio_compra=$_POST['Precio_compra'];
$Precio_venta=$_POST['Precio_venta'];



if ($Nombre and $Descripcion and $Tipo_producto and $Categoria and $Cantidad and $Medidas and $Precio_compra and $Precio_venta)
{
 include('php_conexion.php');
//Conectarse a la BD
 $linkBaseDatos=conectarse();

	$queryInsertaInventario="INSERT INTO inventario (Id_producto, Nombre, Descripcion, Tipo_producto, Categoria, Cantidad, Medidas, Precio_compra, Precio_venta) Values ('$Id_producto','$Nombre','$Descripcion','$Tipo_producto','$Categoria','$Cantidad','$Medidas','$Precio_compra','$Precio_venta')";
	$resultadoConsultaInsertarInventario = mysql_query($queryInsertaInventario,$linkBaseDatos);

	if ($queryInsertaInventario)
	{
	    echo"
		<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=../phpfunciones/ListaTabla.php'>
				<script>
					alert('Producto registrado exitosamente')
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
					<meta http-equiv='REFRESH' content='0 ; url=Registrar.html'>
				<script>
					alert('ha fallado tu registro')
				</script>
			</head>
		</html>
		
		";
	}
}

else
{
 echo"
		<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=Registrar.html'>
				<script>
					alert('llena el registro ')
				</script>
			</head>
		</html>
		
		";
}

?>