<?php
 		
		include "../dompdf/dompdf_config.inc.php";
		include "php_conexion.php";





		$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 		$hoy=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
		$fech=date('d')."".$meses[date('n')-1]."".date('y');
		//Salida: Viernes 24 de Febrero del 2012

$codigoHTML=' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte</title>
<style type="text/css">
.text {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
}
</style>
</head>

<body>
<div align="center">
<table width="100%" border="0">
<caption class="text">
<strong>Listado de Productos</strong>
</caption>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="17"><center><img src="img/logo.jpg" width="114" height="65" alt="" /></center></td>
    <td width="83%" colspan="2">
      <div align="center">
        <span class="text">Soft Unicorn</span> <span class="text">Nit. 1234567899</span><br />
        <span class="text">Ciudad: Cartagena Direccion: Caracoles Manzana 36 lote 10 2da etapa. </span><br />
        <span class="text">TEL: 6679159 CEL: 3167658276</span><br />
       
      </div>
    </td>
  </tr>
</table><br />
<table width="100%" border="1">
  <tr>
    <td width="4%" bgcolor="#A4DBFF">&nbsp;</td>
    <td width="3%" bgcolor="#A4DBFF"><strong class="text">Codigo</strong></td>
    <td width="18%" bgcolor="#A4DBFF"><strong class="text">Nombre del Producto</strong></td>
    <td width="11%" bgcolor="#A4DBFF"><strong class="text">Descripción</strong></td>
    <td width="12%" bgcolor="#A4DBFF"><strong class="text">Tipo de producto</strong></td>
    <td width="8%" bgcolor="#A4DBFF"><strong class="text">Categoria</strong></td>
    <td width="10%" bgcolor="#A4DBFF"><strong class="text">Cantidad</strong></td>
    <td width="9%" bgcolor="#A4DBFF"><strong class="text">Medidas</strong></td>
    <td width="8%" bgcolor="#A4DBFF"><strong class="text">Precio Compra</strong></td>
    <td width="8%" bgcolor="#A4DBFF"><strong class="text">Precio Venta</strong></td>
    </tr>'; 
  	$num=0;
	$can=mysql_query("SELECT * FROM inventario");	
	while($dato=mysql_query($can)){	
		$num=$num+1;
		$resto = $num%2; 
  		if ((!$resto==0)) { 
        	$color="#CCCCCC"; 
   		}else{ 
        	$color="#FFFFFF";
   		}
		$codigo=$dato['Id_producto']; 
		
		}
$codigoHTML.='
  <tr>
    
    <td bgcolor="'.$color.'"><center><span class="text">'.$dato['Id_producto'].'</span></center></td>
    <td bgcolor="'.$color.'"><span class="text">'.$dato['Nombre'].'</span></td>
    <td bgcolor="'.$color.'"><span class="text">'.$dato['Descripcion'].'</span></td>
    <td bgcolor="'.$color.'"><span class="text">'.$dato['Tipo_producto'].'</span></td>
    <td bgcolor="'.$color.'"><span class="text">'.$dato['Categoria'].'</span></td>
    <td bgcolor="'.$color.'"><span class="text">'.$dato['Cantidad'].'</span></td>
    <td bgcolor="'.$color.'"><span class="text">'.$dato['Medidas'].'</span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($dato['Precio_compra'],2,",",".").'</span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($dato['Precio_venta'],2,",",".").'</span></td>
    
  
  </tr>';
  
$codigoHTML.='
</table><br />
<div align="right"><span class="text">Registros Encontrados '.$num.'</span></div>
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Listado_Productos_".$fech.".pdf");
?>