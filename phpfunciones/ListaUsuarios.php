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
	$consulta="SELECT SQL_CALC_FOUND_ROWS * FROM usuario LIMIT $offset, $maximosRenglones";
	$consultaTotales="SELECT FOUND_ROWS() as total";
	
	$resultadoConsulta = mysql_query($consulta,$linkBaseDatos);
	$resultadoConsultaTotal = mysql_query($consultaTotales,$linkBaseDatos);
	
	$rowTotal = mysql_fetch_assoc($resultadoConsultaTotal);
	// Total de registros sin limit
	$total = $rowTotal["total"];

	?>

<link rel="stylesheet" type="text/css" href="../jquery/csstablas.css">
	<center><table  class="table table-hover" border="0"  width="100%" >
    <caption><h3>Tabla de usuarios registrados</h3></caption>
   <thead>
      <tr>
        <td scope="col"><h4><center> Nombre</center></h4></td> 
         <td ><h4><center>Apellidos</center></h4></td>
          <td><h4><center>Usuario</center></h4></td>
          <td><h4><center>Tipo de Usuario</center></h4></td>
          <td><h4><center>Eliminar</center></h4></td>
      </tr>
   </thead>
   <tbody>
      <?php
         while ($row = mysql_fetch_assoc($resultadoConsulta))
         {
            $Id_usuario = $row["Id_usuario"];
            $Nombre = $row["Nombre"];
            $Apellidos = $row["Apellido_p"];
			$Username = $row["Username"];
			$Tipo_usuario = $row["Tipo_usuario"];
         ?>
         <tr>
            <td><center><?php echo $Nombre; ?></center></td>
            <td><center><?php echo $Apellidos; ?></center></td>
            <td><center><?php echo $Username; ?></ceneter></td>
            <td><center><?php echo $Tipo_usuario; ?></center></td>
           <?php echo " <td><center><a href='borraru.php?Id=$Id_usuario'><img src='../images/trash.png'height='25' width='25'></a></center></td> "?>
         </tr>
         <?php
         }
      ?>
   </tbody>
   <tfoot>
      <tr>
         <td >
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
</table></center>
	