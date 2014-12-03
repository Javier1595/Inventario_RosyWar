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
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Contactenos</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p align="justify">
							<font size="4" color="#072102">
								Nos puedes encontrar en:
								<ul>
									<li><b>Direccion:</b> Calle 22 n° 1B - 33 Santa Barbara</li>
									<li><b>Ciudad:</b> Fusagasuga (Cundinamarca, Colombia)</li>
									<li><b>Telefono:</b> 3124390162 - 3118263825</li>
									<li><b>Email:</b> fajasrosyware@hotmail.com</li>
								</ul>
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