<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'admin':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'usuario':
        header("Location: /Inventario_RosyWar/Index.php/inicio");
      break;
    }
  }else{
  	include 'plantillas/menu/menu_publico.php';
  } ?>
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Mision</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<p align="justify"><font size="4" color="#072102">
						Somos una Compañía que orienta los recursos de la empresa hacia la plena satisfacción de las necesidades
						de nuestro cliente, elaborando productos de excelente calidad, a través de la realización de diferentes
						actividades basado en el trabajo en equipo, la responsabilidad y el cumplimiento, mejorando continuamente
						en cada uno de los procesos que contribuyan a elevar los niveles de calidad.</font>
					</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="../Imagenes/logoRosyWar.png" class="img-responsive" alt="Fajas Rosy War">
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>