<?php
$captcha=rand(100000000000,1000000000);

session_start();
$_SESSION['verifica'] = $captcha;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<html>
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


<body>
<div class="TabbedPanelsContentGroup">
<form name="frmLogin" method="post" action="Verifica_captcha.php">
  <p>&nbsp;</p>
  <table width="556" height="131" border="0" align="center" cellpadding="0" cellspacing="0" class="down">
<tr><td  height="15" colspan="1" class="menumain">
 <legend><font size="+3">Validacion de captcha</legend>
</td></tr>

<tr>
  <td>
    <p>&nbsp;</p>
    <table width="75%" border="0" align="center" class="down">
    <tr>
      <td width="33%" class="menumain"><center><legend><font size="3">Usuario:</td>
      <td width="67%"><label><span id="sprytextfield1">
        <input name="txtusuario" class="input-block-level"" type="text" id="txtusuario" placeholder="Escribe Usuario" required="required" /><span class="textfieldRequiredMsg"></span></span>
      </label></td>
    </tr>
    <tr>
      <td class="menumain"><center><legend><font size="3">Captcha:</font></td>
      <td><font size="3"><?php echo $captcha; ?></font></td>
    </tr>
    <tr>
      <td class="menumain"><center><legend><font size="3"> Verificación:</td>
      <td><label><span id="sprytextfield2">
        <input name="txtcaptcha" type="text" class="input-block-level" id="txtcaptcha" maxlength="10" placeholder="Escribe Verificación" required="required" />
        <span class="textfieldRequiredMsg"></span></span>
      </label></td>
    </tr>
    
  </table>
 <center> <table><td>
   
      <input name="valida" type="submit" class="btn btn-primary btn-block btn-large" id="valida" value=" VALIDAR " />
      
    </p></td></table>
  </center>
</tr>
</table>
</form>
<center>

<img src="../images/logo.jpg" width="280" height="280" alt="logo"></center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br/>
  
</p>
</div>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.: RESETEAR PASSWORD</title>
</head>


  <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
