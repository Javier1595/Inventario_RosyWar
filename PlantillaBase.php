<?php
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION['Tipo']){
      case 'Administrador':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'Usuario':
        include 'plantillas/menu/menu_usuario.php';
      break;
    }
  }else{
  	include 'plantillas/menu/menu_publico.php';
  } ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<style type="text/css">
	body {
		background-image:url(/Inventario_RosyWar/Imagenes/fondo.jpg);
	}
	</style>
	<title>Fajas Rosy War</title>
	<link href="/Inventario_RosyWar/bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Inventario_RosyWar/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
	<script language="javascript" type="text/javascript" src="/Inventario_RosyWar/javascript/Javascript_Usuario.js"></script>
	<script src="/Inventario_RosyWar/bootstrap-3.2.0-dist/js/jquery-1.11.1.js"></script>
	<script src="/Inventario_RosyWar/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="/Inventario_RosyWar/Imagenes/logoRosyWar1.png" />
</head>
<body>
	<header class="img-responsive" role="banner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="test">
				<?php echo $menu;?>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<?php echo $contenido;?>
	</div>
</body>
</html>