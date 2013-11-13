<?php
$usuario=$_POST['usuario'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.: CAMBIAR CONTRASE&Ntilde;A</title>

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
  
  background: #FFFFFF url(images/flowers-left.png) no-repeat  bottom ;
    background-position:left;
    background-position: -9px 220px;
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

</head>
<body>

<div class="TabbedPanelsContentGroup">
<br/>
<table width="500" align="center" class="down">
<tr><td class="menumain"><div align="center"> <legend><font size="+3">Cambiar Contraseña</legend></div></td></tr>
</table>
<table width="500" align="center" class="down">
  <tr><td>
    <p>&nbsp;</p><form name="cambia" method="post" action="CambioPassword.php">
    <table width="95%" border="0" align="center" class="down">
      <tr>
        <td width="37%" class="menumain"><center><legend><font size="3">Usuario:
          <input type="hidden" name="user" value="<? echo $usuario;?>" /></td>
        <td width="63%"><label>
          <input type="text" name="txtusuario" disabled="disabled" class="input-block-level" value="<? echo $usuario; ?>" />
        </label></td>
        </tr>
      <tr>
        <td class="menumain"><center><legend><font size="3">Nueva Contrase&ntilde;a: </td>
        <td><label><span id="sprytextfield1">
          <input type="password" name="txtnuevacontra" class="input-block-level" placeholder="Escribe La Contraseña" required="required" /><span class="textfieldRequiredMsg"></span></span>
        </label></td>
        </tr>
      <tr>
        <td class="menumain"><center><legend><font size="3">Confirmar Contrase&ntilde;a: </td>
        <td><label><span id="sprytextfield2">
          <input type="password" name="txtconfirmacontra" class="input-block-level" placeholder="Confirma La Contraseña" required="required" /><span class="textfieldRequiredMsg"></span></span>
        </label></td>
      </tr>
    </table>
   <center> <table><td>
    <p align="center">
      <label>
      <input name="btncambiar" type="submit" id="btncambiar" class="btn btn-primary btn-block btn-large" value="  CAMBIAR CONTRASE&Ntilde;A  " />
      </label></p></td></table></center>

    </form>
    <p>&nbsp;    </p></td></tr></table>

<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<center>

<img src="../images/logo.jpg" width="280" height="280" alt="logo"></center>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");

//-->
</script>

</body>
</html>
