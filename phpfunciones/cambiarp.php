<?php


include('php_conexion.php');


	//Conectar a la base de datos
	$linkBaseDatos=conectarse();


	$Id_producto=$_GET['Id'];
	 $Nombre=$_GET['Nombre'];
	 $Descripcion=$_GET['Descripcion'];
	 $Cantidad=$_GET['Cantidad'];
	$Medidas=$_GET['Medidas'];
	 $Precio_compra=$_GET['Precio_compra'];
	 $Precio_venta=$_GET['Precio_venta'];
	 echo"
	 
	 <html>
	 <head>
	 
	 <meta content='UFT-8'>

	 <link rel='stylesheet' type='text/css' href='../jquery/bootstrap.css'>

	 <style type='text/css'>
  body {
	padding-top: 80px;
	padding-bottom: 60px;
	background-color: #fff;
  }

  .form-signin {
	max-width: 400px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	
  }
  .form-signin .form-signin-heading,
  .form-signin .checkbox {
	margin-bottom: 10px;
  }
  .form-signin input[type='text'],
  .form-signin input[type='password'] {
	font-size: 16px;
	height: auto;
	margin-bottom: 10px;
	padding: 7px 9px;
  }

</style>
	 </head>
	 <BODY>
	 <form  action='comprobarcambio.php' method='POST' class='form-signin'>
	 <table>
	 <tr>
	
<th><label>Id</label></th>
	 <th> <input name='Id_producto'type='text' value=$Id_producto readonly='readonly'> </th></tr>

	 </tr>
	 <tr>
<th><label>Nombre:</label></th>
<th><input name='Nombre' type='text' value='$Nombre'></th>
</tr>
<tr>
<th><label>Descripcion:</label></th>
<th><input name='Descripcion'type='text' value='$Descripcion'></th>
</tr>
<tr>
<th><label>Cantidad:</label></th>
<th><input name='Cantidad'type='text' value='$Cantidad'></th>
<tr>
<th><label>Medidas:</label></th>
<th> <input name='Medidas' type='text' value='$Medidas'></th>
</tr>
</r>
<th><label>Precio_compra:</label></th>
<th><input name='Precio_compra' type='text' value='$Precio_compra'></th>
</tr>
<tr>
<th><label>Precio_venta:</label></th>
<th> <input name='Precio_venta' type='text' value='$Precio_venta'></th>
</tr>
<tr>
<th></th>
<th><input type='submit' value='Cambiar' class='btn btn-primary btn-block btn-large'></th>

	 </tr>
	 
	 
	 

	 
	 
	 </tanle>
	 </form>
	 
	 </BODY>
	 
	 </html>
	 
	 
	 
	 ";
	

?>
