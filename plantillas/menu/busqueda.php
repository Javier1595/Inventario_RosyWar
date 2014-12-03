<?php ob_start();?>
<div class="panel-body">
	<form action="/Inventario_RosyWar/Index.php/buscar_en_inventario" method="post" name="formBuscarEnInventario" class="form-inline" role="form">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="form-group">
				<label  class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><h5><b>Color</b></h5></label>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					<select class="form-control" name="ColorFaja" required>
	                  	<option></option>
	                  	<option>Piel</option>
	                  	<option>Caoba</option>
	                  	<option>Negro</option>
	                </select>
	            </div>
			</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="form-group">
				<label  class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><h5><b>Talla</b></h5></label>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					<select class="form-control" name="TallaFaja" required>
	                  	<option></option>
	                  	<option>XXS</option>
	                  	<option>XS</option>
	                  	<option>S</option>
	                  	<option>M</option>
	                  	<option>L</option>
	                  	<option>XL</option>
	                </select>
	            </div>
			</div>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>
		</div>
	</form>
</div>
<?php $menulist = ob_get_clean(); ?>
<?php include "plantillas/listarinventario.php"; ?>