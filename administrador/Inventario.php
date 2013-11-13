<!doctype html>

<html>
<head>
	<meta charset="utf-8">
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <style>
		body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
    </style>
    <link href="../../css/bootstrap-responsive.css" rel="stylesheet">

    <script src="../jquery/lightbox/js/jquery-1.10.2.min.js"></script>
    <script src="../jquery/lightbox/js/lightbox-2.6.min.js"></script>
    <link href="../jquery/lightbox/css/lightbox.css" rel="stylesheet" />
</head>

<body>

 

	<!-- inicio de la barra de navegación -->
	<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
    <div class="container">
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    	<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
	</button>
    <a class="brand" href="Index.php">Inicio</a>
    <div class="nav-collapse collapse">
    <ul class="nav">
        
	</ul>
    <ul class="nav pull-right">
            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrador <b class="caret"></b></a>
        	<ul class="dropdown-menu">
       		  
              <li><a href="../../salir.php"><i class="icon-off"></i> Salir</a></li>
			</ul>
		</li>
	</ul>
	</div>
    </div>
    </div>
    </div>
    
    <!-- fin de barra navegación -->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3"><!-- inicio del menú -->
    <div class="sidebar-nav">
      
    <div class="well" style="padding: 8px 0;">

    <ul class="nav nav-list"> 
    <li class="nav-header"> MenÚ</li>        
   		<li class="active"><a href="Index.php"><i class="icon-home"></i> Inicio</a></li>
        <li></li>
        <li class="divider"></li>
       <li class="nav-header">Navegación</li>
        
        <li><a href="Ventas.php"><i class="icon-user"></i> Ventas</a></li>
        <li><a href="#"><i class="icon-user"></i> Inventario</a></li>
        <li><a href="Usuarios.php"><i class="icon-user"></i> Usuarios</a></li>

        <li></li>
        <li class="divider"></li>
        <li class="nav-header">Opciones</li>
        <li><a href="../phpfunciones/cerrarsesion.php"><i class=" icon-off"></i> Salir</a></li>
	</ul>
	</div>
    </div>
	<!-- fin del menú -->
    </div><!--/span-->
        <div class="span9">
          <div class="well">
           <h1>Lista de Productos</h1>
          
    
  </div>


        <p>
      
      <div class="row-fluid">
         <ul class="thumbnails">
<li class="span4"
        <p align="center"><a href="RegistrarProducto.html" class="btn  btn-block btn-large" target="frameproducto" > Agregar producto » </a>
          </div>
    </p>




          <div class=>
         <table border="0" cellpadding="5" cellspacing="0" width="100%">
          <tr>
           <td> <p align="center"><a href="../phpfunciones/ListaTabla.php" class="btn  btn-block btn-large" target="frameproducto" >Tablas</a></p></td>
           <td><p align="center"><a href="../phpfunciones/ListaTriplay.php" class="btn  btn-block btn-large" target="frameproducto" >Triplay</a></p></td>
           <td> <p align="center"><a href="../phpfunciones/ListaMoldura.php" class="btn  btn-block btn-large" target="frameproducto" >Molduras</a></p></td>
           <td> <p align="center"><a href="../phpfunciones/ListaPolines.php" class="btn  btn-block btn-large" target="frameproducto" >Polines</a></p></td>
           <td><p align="center"><a href="../phpfunciones/ListaTablon.php" class="btn  btn-block btn-large" target="frameproducto" >Tablon</a></p></td>
           <td><p align="center"><a href="../phpfunciones/ListaAserrin.php" class="btn  btn-block btn-large" target="frameproducto" >Aserrin</a></p></td>


         </tr></table>
  
     

      

     

     

      

      
<div>
      <object type="text/html" data="../phpfunciones/ListaTabla.php" width="950" height="400" name="frameproducto"></object>
   </div>   
  </div>


</ul>
       </div>
 
 
       <!--/span-->
      </div><!--/row-->

      <hr>

      

    </div>
    <img src="../images/logo.jpg" width="200" height="20"  style="padding: 1px 640px;" alt="ALT NAME">
    <footer>
        <p>© TOUR | Maderería Juárez 2013</p>
      </footer>
    <!-- fin del contenido -->
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
</html>