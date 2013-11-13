<?php
include"../fpdf/fpdf.php";
include "php_conexion.php";



$linkBaseDatos=conectarse();


class MiPDF extends FPDF {
	
	public function Header(){
		$this  -> image("../images/logo.jpg", 10, 10, 35, 35);
		$this ->  SetFont ('arial','B', 10);
		#$this -> Cell(250,10, "Isidro juarez Sanchez", 0, 70, 'C');
		#$this -> Cell(250,10, "R.F.C JUSI870515TKA", 0, 70, 'C');
		#$this -> Cell(250,10, "C.U.R.P JUSI870515HOCRNS02", 0, 70, 'C');
		$this -> Cell(250,10, "COD.IDENTIFICACION R-21-085-IJS-001/10", 0, 70, 'C');
		$this -> Cell(250,10, "Matriz:20 de noviembre s/n", 0, 70, 'C');
		$this -> Cell(250,10, " Hidalgo Santa Cruz Itundujia,Oaxaca cp.71190", 0, 70, 'C');
		$this -> Cell(250,10, "sucursal:Carretera Internacional entre ", 0, 70, 'C');
		$this -> Cell(250,10, "Aquiles serdan y Morelos #135 Col.Centro.Izucar de Matamoros Pue", 0, 70, 'C');
		$this -> Cell(250,10, "CP.74400 Tel 243-4328725", 0, 70, 'C');
		$this -> Ln(10);
		
		
			
		}
	
	
	}
	
	$cabeceraT=array(
	"Nombre", "Descripcion", "Producto", "Categoria", "Cantidad", "Medidas", "Precio compra", "Precio venta"
	);
	
	$mipdf=new MiPDF();
	
  $mipdf -> addPage();
  
  for ($i = 0; $i <count($cabeceraT) ; $i++ )
  {
  	$mipdf -> setFillColor(255,255,255);
	  $mipdf -> SetFont('courier','B',8);
	  $mipdf -> SetTextColor(0,0,0);
	$mipdf -> Cell(24,10,$cabeceraT[$i],1,0,'C', true);  
  }

  $mipdf -> Ln(10);
  	$consulta=mysql_query("SELECT * FROM inventario ORDER BY Tipo_producto ");

  	while($datos = mysql_fetch_array( $consulta ))
  	{

  		$Nombre = $datos ['Nombre'];
  		$Descripcion = $datos ['Descripcion'];
  		$Tipo_producto = $datos ['Tipo_producto'];
  		$Categoria = $datos ['Categoria'];
  		$Cantidad = $datos ['Cantidad'];
  		$Medidas = $datos ['Medidas'];
  		$Precio_compra = $datos ['Precio_compra'];
  		$Precio_venta = $datos ['Precio_venta'];

  		/*color que se le da al pdf*/
  		$mipdf -> setFillColor(255,255,255);

  		$mipdf -> Cell (24, 10, $Nombre, 1, 0, 'C', true);
  		$mipdf -> Cell (24, 10, $Descripcion, 1, 0, 'C', true);
  		$mipdf -> Cell (24, 10, $Tipo_producto, 1, 0, 'C', true);
  		$mipdf -> Cell (24, 10, $Categoria, 1, 0, 'C', true);
  		$mipdf -> Cell (24, 10, $Cantidad, 1, 0, 'C', true);
  		$mipdf -> Cell (24, 10, $Medidas, 1, 0, 'C', true);
  		$mipdf -> Cell (24, 10, $Precio_compra, 1, 0, 'C', true);
  		$mipdf -> Cell (24, 10, $Precio_venta, 1, 0, 'C', true);
  		$mipdf -> Ln(10);

  	}
	
	
	
	 $mipdf -> Output();
	
	
	
	
	
	
	
	
?>
