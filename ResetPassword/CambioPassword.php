<?php
$usuario=$_POST['user'];
$nueva_contraseņa=$_POST['txtnuevacontra'];
$confirma_contraseņa=$_POST['txtconfirmacontra'];

if($nueva_contraseņa==$confirma_contraseņa){

//realizamos la actualizacion de la contraseņa
mysql_connect('localhost','root','root')or die ('Ha fallado la conexi?n: '.mysql_error());
mysql_select_db('madereria')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

$query = "update usuario set Password='$nueva_contraseņa' WHERE 	Username='$usuario'";
mysql_query($query) or die(mysql_error());

echo('<script language="JavaScript" >');
echo ('alert("La Contraseņa se ha Cambiado Correctamente.");');
echo('location.replace("../index.php")');
echo('</script>');



}else{
echo('<script language="JavaScript" >');
echo('alert("Error. El Respuesta Incorrecta");');
echo('</script>');

echo "<form action='ResetPassword.php' method='post' name='incorrecto' id='incorrecto'>";
echo "<input type='hidden' name='usuario' value='$usuario'>";
echo "</form>";


}



?>

<script>
function someter(){
document.incorrecto.submit();
}
someter();
</script>
