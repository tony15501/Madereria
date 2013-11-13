<?php

 $nombre=$_POST['Username'];
 $contraseña=$_POST['Password'];
 
 if ($nombre and $contraseña)
 {
 		include "php_conexion.php";
		
		$consulta=mysql_query("SELECT * FROM usuario WHERE Username = '".$nombre."' AND Password ='".$contraseña."' ");
		
		
		
		$filas = mysql_fetch_array($consulta);
		
		$nombrebd = $filas['Username'];
		$contraseñabd = $filas['Password'];
		$idusuario=$filas['Id_usuario'];
		
		
		
		
		if ($nombre == $nombrebd and $contraseña == $contraseñabd)
		
		{
		
				session_start();
				$_SESSION['Username'] = $nombrebd;
				$_SESSION['Id_usuario']= $idusuario;
				
				
		
		echo  "
		<html>
		
		 	<head>
		 			<meta http-equiv='REFRESH' content = '0 ; url=../Administrador/Index.php'>
		 		
		 
			 </head>
		
		</html>
		
		
		";
		
		}
		else
		{
			echo  "
		<html>
		
		 	<head>
		 			<meta http-equiv='REFRESH' content = '0 ; url=../index.html'>
					
		 		<script>  
		 
		 			alert ('Usuario No Existe')
		 
				 </script>
		 
			 </head>
		
		</html>
		
		
		";
		}
 }

else
{
	echo  "
		<html>
		
		 	<head>
		 			<meta http-equiv='REFRESH' content='0 ; url=../index.html'>
		 		<script>  
		 
		 			alert ('LLena el formulario')
		 
				 </script>
		 
			 </head>
		
		</html>
		
		
		";
}

?>