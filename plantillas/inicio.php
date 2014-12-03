<?php ob_start();
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
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<?php if(isset($_SESSION["Nombre"])):?>
			<h4><b><font color="#072102">Bienvenido(a) <?php echo "".$_SESSION["Nombre"];?></font></b></h4>
		<?php endif ?>
		<?php if(empty($string)):?>
		<?php else:?>
			<center><h4><?php echo "".$string;?></h4></center>
		<?php endif ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Fajas Rosy War</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p align="justify">
							<font size="4" color="#072102">
								Fajas Rosy War es  una microempresa enfocada a la elaboración de fajas de diferentes tipos que se ajusten a la 
								necesidad que cada mujer pueda tener para mejorar su calidad  de vida, brindando sus productos a todas las 
								mujeres colombianas.
							</font>
						</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
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