<?php
$Id_usuario=rand(100000,999999);
$Nombre=$_POST['Nombre'];
$Apellido_p=$_POST['Apellido_p'];
$Apellido_m=$_POST['Apellido_m'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Tipo_usuario=$_POST['Tipo_usuario'];
$Pregunta=$_POST['Pregunta'];
$Respuesta=$_POST['Respuesta'];



if ($Nombre and $Apellido_p and $Apellido_m and $Username and $Password and $Tipo_usuario and $Pregunta and $Respuesta)
{
 include('php_conexion.php');
//Conectarse a la BD
 $linkBaseDatos=conectarse();

	$queryInsertaUsuario="INSERT INTO usuario (Id_usuario, Nombre, Apellido_p, Apellido_m, Username, Password, Tipo_usuario, Pregunta, Respuesta) Values ('$Id_usuario','$Nombre','$Apellido_p','$Apellido_m','$Username','$Password','$Tipo_usuario','$Pregunta','$Respuesta')";
	$resultadoConsultaInsertarUsuario = mysql_query($queryInsertaUsuario,$linkBaseDatos);

	if ($queryInsertaUsuario)
	{
	    echo"
		<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=ListaUsuarios.php'>
				<script>
					alert('Gracias por registrar un usuario ')
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