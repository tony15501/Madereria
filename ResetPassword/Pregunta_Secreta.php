<?php require_once('../phpfunciones/mostrar.php'); ?>
<?php

$user=$_POST['usuario'];

mysql_select_db($database_mostrar, $mostrar);
$query_pregunta_secreto = "SELECT Pregunta FROM usuario WHERE Username='$user'";
$pregunta_secreto = mysql_query($query_pregunta_secreto, $mostrar) or die(mysql_error());
$row_pregunta_secreto = mysql_fetch_assoc($pregunta_secreto);
$totalRows_pregunta_secreto = mysql_num_rows($pregunta_secreto);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../jquery/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="jquery/bootstrap-responsive.css">

</head>
<style type="text/css">
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
  .form-signin input[type="text"],
  .form-signin input[type="password"] {
  font-size: 16px;
  height: auto;
  margin-bottom: 10px;
  padding: 7px 9px;
  }

</style>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.: PREGUNTA SECRETA</title>
</head>

<body>
<div class="TabbedPanelsContentGroup"><br/><br/>
<center><table width="551">


  <tr><td class="down">  <legend><font size="+1">Pregunta Secreta Para Resetear Password</legend></div></td></tr><tr><td class="down">
  <p>&nbsp;</p><form name="confirma" method="post" action="Validacion_Secreta.php">
  <table width="86%" border="0" align="center" class="down">
    <tr>
      <td width="26%" class="menumain"><center><legend><font size="3">Usuario:
        <input type="hidden" name="usuario" value="<? echo $user; ?>" /></td>
      <td width="74%"><input name="txtusuario" type="text" disabled="disabled" class="input-block-level" value="<? echo $user; ?>" size="30" /></td>
    </tr>
    <tr>
      <td class="menumain"><center><legend><font size="3">Pregunta Secreta: </td>
      <td><label>
        <input name="txtsecreto" type="text" class="input-block-level" disabled="disabled" value="<?php echo $row_pregunta_secreto['Pregunta']; ?>" size="30" />
      </label></td>
    </tr>
    <tr>
      <td class="menumain"><center><legend><font size="3">Respuesta:</td>
      <td><label><span id="sprytextfield1">
        <input name="txtrespuesta" type="text" class="input-block-level" size="30" placeholder="Escribe La Respuesta" required="required" /><span class="textfieldRequiredMsg"></span></span>
      </label></td>
    </tr>
  </table>
<center>  <table><td> 
  <p align="center">
    <label>
    <input name="btnverificar" type="submit" class="btn btn-primary btn-block btn-large" id="btnverificar" value=" VERIFICAR " />
    </label></td> </table></center>
</p></form></td></tr></table>
  <p>&nbsp;</p>
</center>

</div>
<center>

<img src="../images/logo.jpg" width="280" height="280" alt="logo"></center>
 <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
<?php
mysql_free_result($pregunta_secreto);
?>
