<head>

	</head>

	<?
	//Renglones por pagina
	$maximosRenglones=5;
	
	//Pagina solicitada
	$pag = (int) $_GET["pag"];
	if ($pag < 1)
	{
		$pag = 1;
	}
	$offset = ($pag-1) * $maximosRenglones;
	include('php_conexion.php');

	
	//Conectar a la base de datos
	$linkBaseDatos=conectarse();
	
	//consulta para obtener los clientes
	$consulta="SELECT SQL_CALC_FOUND_ROWS * FROM inventario where Tipo_producto ='Triplay' LIMIT $offset, $maximosRenglones";
	$consultaTotales="SELECT FOUND_ROWS() as total";
	
	$resultadoConsulta = mysql_query($consulta,$linkBaseDatos);
	$resultadoConsultaTotal = mysql_query($consultaTotales,$linkBaseDatos);
	
	$rowTotal = mysql_fetch_assoc($resultadoConsultaTotal);
	// Total de registros sin limit
	$total = $rowTotal["total"];

	?>


<link rel="stylesheet" type="text/css" href="../jquery/csstablas.css">
   <center><table  class="table table-hover" border="0"  width="100%" >   <thead>
      <tr>
         <td><h4>Nombre</h4></td>
         <td><h4>Descripción</h4></td>
          <td><h4>Cantidad</h4></td>
          <td><h4>Medidas</h4></td>
          <td><h4>Precio Compra</h4></td>
          <td><h4>Precio Venta</h4></td>
          <td><h4>Eliminar</h4></td>
          <td><h4>Editar</h4></td>
      </tr>
   </thead>
   <tbody>
      <?php
         while ($row = mysql_fetch_assoc($resultadoConsulta))
         {
            $Id_producto = $row["Id_producto"];
            $Nombre = $row["Nombre"];
            $Descripcion = $row["Descripcion"];
			$Cantidad = $row["Cantidad"];
			$Medidas = $row["Medidas"];
         $Precio_compra = $row["Precio_compra"];
         $Precio_venta = $row["Precio_venta"];
         ?>
         <tr>
            <td><?php echo $Nombre; ?></td>
            <td><?php echo $Descripcion; ?></td>
            <td><?php echo $Cantidad; ?></td>
            <td><?php echo $Medidas; ?></td>
            <td><?php echo $Precio_compra; ?></td>
            <td><?php echo $Precio_venta; ?></td>
            <?php echo " <td><center><a href='borrarp.php?Id=$Id_producto'><img src='../images/trash.png'height='25' width='25'></a></center></td> "?>
         <?php echo " <td> <a href='cambiarp.php?Id=$Id_producto&Nombre=$Nombre&Descripcion=$Descripcion&Cantidad=$Cantidad&Medidas=$Medidas&Precio_compra=$Precio_compra&Precio_venta=$Precio_venta'><img src='../images/edit.png'height='25' width='25'></a></td> "?>
         </tr>
         <?php
         }
      ?>
   </tbody>
   <tfoot>
      <tr>
         <td colspan="2">
      <?php
         $totalPag = ceil($total/$maximosRenglones);
         $links = array();
         for( $i=1; $i<=$totalPag ; $i++)
         {
            $links[] = "P&aacute;gina <a href=\"?pag=$i\">$i</a>"; 
         }
		 
         echo implode(" - ", $links);
		 echo "<br />Total de p&aacute;ginas $totalPag";
      ?>
         </td>
      </tr>
   </tfoot>
</table>