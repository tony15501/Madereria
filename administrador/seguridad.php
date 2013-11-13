<?php
session_start();


	$_SESSION['Username'] = $nombrebd;
				$_SESSION['Id_usuario']= $idusuario;

if ($nombrebd and $idusuario)

{
	header("Location: ../index.php");
	exit();
}
?>	