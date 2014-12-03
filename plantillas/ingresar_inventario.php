<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'admin':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'usuario':
        include 'plantillas/menu/menu_usuario.php';
      break;
    }
  }else{
  	header("Location: /Inventario_RosyWar/Index.php/inicio");
  } ?>
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<?php if(empty($string)):?>
		<?php else:?>
			<center><h4><?php echo "".$string;?></h4></center>
		<?php endif ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Nuevo inventario</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="col-sm-1 col-md-1 col-lg-1">
				</div>
				<div class="col-sm-10 col-md-10 col-lg-10">
						<form action="/Inventario_RosyWar/Index.php/ingreso_inventario" method="post" name="formNuevoPedido" class="form-horizontal">
							<div class="form-group">
				                <label for="ejemplo_text_3" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label"><font size="5">Estilo de faja</label>
				                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				                  <select class="form-control" name="EstiloFaja" required>
				                  	<option></option>
				                  	<?php foreach($inventario as $inventario):?>
				                    <option><?php echo $inventario["nombre"]; ?></option>
				                    <?php endforeach ?>
				                  </select>
				                </div>
				            </div>
				            <div class="form-group">
					            <label for="ejemplo_number_3" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label"><font size="5">Cantidad</label>
				                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				                  <input type="number" class="form-control" id="ejemplo_number_3" placeholder="Cantidad" name="Cantidad" value="1" required>
				                </div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				                	<center><a class="btn btn-primary" href="javascript:enviar_formNuevoPedido()"><span class="glyphicon glyphicon-plus"></span> Ingresar</a></center>
								</div>
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