<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'Administrador':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'Usuario':
        header("Location: /Sistemas_2/Index.php/inicio");
      break;
    }
  }else{
  	header("Location: /Sistemas_2/Index.php/inicio");
  } ?>
<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	</div>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Lista de usuarios</center></b></h1>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th><center><font size="3">Cedula</center></th>
							<th><center><font size="3">Nombre</center></th>
							<th><center><font size="3">Primer Apellido</center></th>
							<th><center><font size="3">Segundo Apellido</center></th>
							<th><center><font size="3">Email</center></th>
							<th><center><font size="3">Telefono</center></th>
							<th><center><font size="3">Direccion</center></th>
							<th><center><font size="3">Ciudad</center></th>
							<th><center><font size="3">Usuario</center></th>
							<th><center><font size="3">Rol</center></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($usuarios as $usuarios):?>
						<tr>
							<td><center><font size="3"><?php echo $usuarios["Cedula"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Nombre"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Apellido1"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Apellido2"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Email"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Telefono"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Direccion"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Ciudad"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Usuario"];?></center></td>
							<td><center><font size="3"><?php echo $usuarios["Tipo"];?></center></td>
						</tr>
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