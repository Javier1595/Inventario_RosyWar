<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'Administrador':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'Usuario':
        include 'plantillas/menu/menu_usuario.php';
      break;
    }
  }else{
  	header("Location: /Inventario_RosyWar/Index.php/inicio");
  } ?>
<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	</div>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <div class="panel panel-primary">
			<?php echo $menulist;?>
		</div>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Inventario</center></b></h1>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<?php if(isset($_SESSION["Tipo"])){
							    switch($_SESSION["Tipo"]){
							      case 'Administrador':?>
							<th><center><font size="5">Codigo interno</font></center></th>
							<?php break;
								}
							}?>
							<th><center><font size="5">Codigo de venta</center></th>
							<th><center><font size="5">Nombre</center></th>
							<th><center><font size="5">Cantidad</center></th>
							<th><center><font size="5">Talla</center></th>
							<th><center><font size="5">Color</center></th>
							<?php if(isset($_SESSION["Tipo"])){
							    switch($_SESSION["Tipo"]){
							      case 'Administrador':?>
							<th><center><font size="5">Precio 1</center></th>
							<th><center><font size="5">Precio 2</center></th>
							<?php break;
								}
							}
							?>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($inventario as $inventario):?>
						<?php if($inventario["cantidad"]<="5"):?>
							<tr>
							<?php if(isset($_SESSION["Tipo"])){
								    switch($_SESSION["Tipo"]){
								      case 'Administrador':?>
								<td><center><font size="5" color="red"><?php echo $inventario["codigo_interno"];?></center></td>
									<?php break;}
								}?>
								<td><center><font size="5" color="red"><?php echo $inventario["codigo"];?></center></td>
								<td><center><font size="5" color="red"><?php echo $inventario["nombre"];?></center></td>
								<td><center><font size="5" color="red"><?php echo $inventario["cantidad"];?></center></td>
								<td><center><font size="5" color="red"><?php echo $inventario["talla"];?></center></td>
								<td><center><font size="5" color="red"><?php echo $inventario["color"];?></center></td>
								<?php if(isset($_SESSION["Tipo"])){
								    switch($_SESSION["Tipo"]){
								      case 'Administrador':?>
								<td><center><font size="5" color="red"><?php echo $inventario["precio1"];?></center></td>
								<td><center><font size="5" color="red"><?php echo $inventario["precio2"];?></center></td>
								<?php break;}
								}?>
							</tr>
						<?php else:?>
						<tr>
							<?php if(isset($_SESSION["Tipo"])){
							    switch($_SESSION["Tipo"]){
							      case 'Administrador':?>
							<td><center><font size="5"><?php echo $inventario["codigo_interno"];?></center></td>
								<?php break;}
							}?>
							<td><center><font size="5"><?php echo $inventario["codigo"];?></center></td>
							<td><center><font size="5"><?php echo $inventario["nombre"];?></center></td>
							<td><center><font size="5"><?php echo $inventario["cantidad"];?></center></td>
							<td><center><font size="5"><?php echo $inventario["talla"];?></center></td>
							<td><center><font size="5"><?php echo $inventario["color"];?></center></td>
							<?php if(isset($_SESSION["Tipo"])){
							    switch($_SESSION["Tipo"]){
							      case 'Administrador':?>
							<td><center><font size="5"><?php echo $inventario["precio1"];?></center></td>
							<td><center><font size="5"><?php echo $inventario["precio2"];?></center></td>
							<?php break;}
							}?>
						</tr>
						<?php endif;?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>