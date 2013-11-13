<?php
//Recibo la captcha y lo mantengo con la sesion para que no sea borrada
session_start();
$captcha=$_SESSION['verifica'];

//recibo mis variables
$recibe_captcha=$_POST['txtcaptcha'];
$recibe_usuario=$_POST['txtusuario'];



//realizo la condicion de la captcha si coinciden
if($recibe_captcha==$captcha){
//::::::::::::::::::::Realizamos la conexion y consulta

// Conectar con el servidor de base de datos
$conexion = mysql_connect ("localhost", "root", "root") or die ("No se puede conectar con el servidor");
// Seleccionar base de datos
mysql_select_db ("madereria") or die ("No se puede seleccionar la base de datos");
// Enviar consulta
$instruccion = "select Username from usuario where Username='$recibe_usuario'";
$consulta = mysql_query ($instruccion, $conexion) or die ("Fallo en la consulta");
// Mostrar resultados de la consulta
$resultado = mysql_fetch_array ($consulta);   
$usuario=$resultado['Username'];
//validamos usuario si coinciden

if($recibe_usuario==$usuario){
//redirigimos a la siguiente pagina
echo "<form action='Pregunta_Secreta.php' method='post' name='pago' id='pago'>";
echo "<input type='hidden' name='usuario' value='$recibe_usuario'>";
echo "</form>";




}else{

echo('<script language="JavaScript" >');
echo('alert("Error. El Usuario no Existe");');
echo('location.replace("Validacion_captcha.php")');
echo('</script>');


}



}else{

echo('<script language="JavaScript" >');
echo('alert("Error. Captcha Incorrecto");');
echo('location.replace("Validacion_captcha.php")');
echo('</script>');


}


?>

<script>
function someter(){
document.pago.submit();
}
someter();
</script>