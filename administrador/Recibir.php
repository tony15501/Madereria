<?php
$id=rand(100000,999999);
$nombre=$_POST['Nombre'];
$paterno=$_POST['Apellido_p'];
$materno=$_POST['Apellido_m'];
$usuario=$_POST['Username'];
$password=$_POST['Password'];
$tipousuario=$_POST['Tipo_usuario'];
$pregunta=$_POST['Pregunta'];
$respuesta=$_POST['Respuesta'];


//echo"<br>tu nombre es:".$nombre;
//echo"<br>tu apellido Paterno es:".$paterno;
//echo"<br>tu apellido materno es:".$materno;
//echo"<br>tu contraseña es:".$contraseña;

if ($nombre and $paterno and $materno and $usuario and $password and $tipousuario and $pregunta and $respuesta)
{
 include "../phpfunciones/php_conexion.php";
	$insertar=mysql_query("INSERT INTO usuario Values ('".$id."','".$nombre."','".$paterno."','".$materno."','".$usuario."','".$password."','".$tipousuario."','".$pregunta."','".$respuesta."')");

	if ($insertar)
	{
	    echo"
		<html> 
			<head>
					<meta http-equiv='REFRESH' content='0 ; url=../Registrar.html'>
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