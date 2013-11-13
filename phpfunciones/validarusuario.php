<?php
	session_start();
	include('php_conexion.php');
	
	$usuario=$_POST['Username'];
	//$contrasena=encriptar($_POST['Password'],"madereria");
	$contrasena=$_POST['Password'];
	//Conectar a la base de datos
	$linkBaseDatos=conectarse();
	
	//Consulta para validar al usuario
	$queryValidaUsuario="SELECT * FROM usuario WHERE Username='". $usuario . "' AND Password = '". $contrasena . "'";
	$resultadoConsultaValidarUsuario = mysql_query($queryValidaUsuario,$linkBaseDatos);
	$existeUsuario=mysql_num_rows($resultadoConsultaValidarUsuario);
	
	if ($existeUsuario <> 0)
	{
		$renglonUsuario=mysql_fetch_array($resultadoConsultaValidarUsuario);
		
		
		//asigno un nombre a la sesión para poder guardar diferentes datos
		session_name("Username");
		
		// inicio la sesión
				
		//defino la sesión que demuestra que el usuario está autorizado
	 $_SESSION["autentica"] = "SIP";
		
		
		$_SESSION['Username']=$usuario;
		
		
		//validar usuario
		if($renglonUsuario['Tipo_usuario']=='administrador')
		{
			
			header('Location:../administrador/Index.php');
			exit;
		}
		else
		{
			header('Location: ../cajero/Index.php');
			exit;
		}
	}
	else
	{
		header('Location: ../index.php?numError=1');
		exit;
	}
	
?>
