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
       		  <li><a href="#"><i class="icon-user"></i> Perfil</a></li>
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
        <li class="divider"></li>
       <li class="nav-header">Navegación</li>
        <li><a href="#"><i class="icon-user"></i> Ventas</a></li>
        <li><a href="Inventario.php"><i class="icon-user"></i> Inventario</a></li>
        <li><a href="Usuarios.php"><i class="icon-user"></i> Usuarios</a></li>
        <li class="divider"></li>
        <li class="nav-header">Opciones</li>
        <li></li>
        <li><a href="../phpfunciones/cerrarsesion.php"><i class=" icon-off"></i> Salir</a></li>
	</ul>
	</div>
    </div>
	<!-- fin del menú -->
    </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h1>Lista de Usuarios</h1>
    <p>
      
    </p>
  </div>
          <div class="row-fluid">
         <ul class="thumbnails">
<li class="span4">
  
      <p align="center"><a href="Registrar.html" class="btn btn-block btn-large" target="frameusuario" >Registrar Usuario »</a></p>

  </div>
</li>
  
      <div  id="tabLista">
 <object type="text/html" data="../phpfunciones/ListaUsuarios.php" width="950" height="400" name="frameusuario"></object>
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