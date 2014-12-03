<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'admin':
        header("Location: /Inventario_RosyWar/Index.php/inicio");
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
				<h1 class="panel-title"><b><center>Iniciar sesion</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="col-sm-1 col-md-1 col-lg-1">
				</div>
				<div class="col-sm-10 col-md-10 col-lg-10">
					<form action="/Inventario_RosyWar/Index.php/Login" method="post" name="formInicioSesion">
						  	<div class="form-group" action="login.php" method="post">
					          <label><b><font size="4">Usuario: </font></b></label>
					          <div class="input-group">
					            <input type="text" class="form-control" id="ejemplo_text_3" placeholder="Usuario" name="usuario" required>
					            <span class="input-group-btn">
					              <button class="btn btn-default" type="button" id="filter-clear" disabled><span class="glyphicon glyphicon-user"></span></button>
					            </span>
					          </div>
					          <label><b><font size="4">Contraseña: </font></b></label>
					          <div class="input-group">
					            <input type="password" class="form-control" id="ejemplo_password_3" placeholder="Contraseña" name="contrasena" required>
					            <span class="input-group-btn">
					              <button class="btn btn-default" type="button" id="filter-clear" disabled><span class="glyphicon glyphicon-lock"></span></button>
					            </span>
					          </div>
					        </div>
					        <div class="input-group">
						        	<center><a class="btn btn-primary" href="javascript:enviar_formInicioSesion()"><span class='glyphicon glyphicon-ok-sign'></span> Ingresar</a></center>
							</div>
					</form>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1">
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>