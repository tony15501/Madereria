<?php
$usuario=$_POST['usuario'];
$recibe_respuesta=$_POST['txtrespuesta'];


// Conectar con el servidor de base de datos
$conexion = mysql_connect ("localhost", "root", "root") or die ("No se puede conectar con el servidor");
// Seleccionar base de datos
mysql_select_db ("madereria") or die ("No se puede seleccionar la base de datos");
// Enviar consulta
$instruccion = "select Respuesta from usuario where Username='$usuario'";
$consulta = mysql_query ($instruccion, $conexion) or die ("Fallo en la consulta");
// Mostrar resultados de la consulta
$resultado = mysql_fetch_array ($consulta);   
$respuesta=$resultado['Respuesta'];
//validamos usuario si coinciden

if($recibe_respuesta==$respuesta){
//redirigimos a la siguiente pagina
echo "<form action='ResetPassword.php' method='post' name='pago' id='pago'>";
echo "<input type='hidden' name='usuario' value='$usuario'>";
echo "</form>";




}else{

echo('<script language="JavaScript" >');
echo('alert("Error. Respuesta Incorrecta");');
echo('</script>');

echo "<form action='Pregunta_Secreta.php' method='post' name='incorrecto' id='incorrecto'>";
echo "<input type='hidden' name='usuario' value='$usuario'>";
echo "</form>";


}



?>
<script>
function someter(){
document.pago.submit();
}
someter();
</script>

<script>
function someter(){
document.incorrecto.submit();
}
someter();
</script>

