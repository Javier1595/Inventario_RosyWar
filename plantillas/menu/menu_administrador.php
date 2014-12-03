<?php ob_start(); ?>
<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/Inventario_RosyWar/Index.php/inicio"> Inventario Fajas Rosy War</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    <li><a href='/Inventario_RosyWar/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Catalogo</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-bookmark'></span> Inventario <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href='/Inventario_RosyWar/Index.php/ingresar_inventario'><span class='glyphicon glyphicon-bookmark'></span> Ingresar</a></li>
          <li><a href='/Inventario_RosyWar/Index.php/restar_inventario'><span class='glyphicon glyphicon-bookmark'></span> Venta</a></li>
          <li><a href='/Inventario_RosyWar/Index.php/listar_inventario'><span class='glyphicon glyphicon-bookmark'></span> Listar inventario</a></li>
        </ul>
      </li>
      <li><a href='/Inventario_RosyWar/Index.php/listarusuarios'><span class='glyphicon glyphicon-user'></span> Usuarios</a></li>
    </ul>
    <ul class='nav navbar-nav navbar-right'>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> <?php echo "".$_SESSION["Nombre"];?><b class='caret'></b></a>
          <ul class='dropdown-menu'>
            <li><a href='/Inventario_RosyWar/Index.php/configuracion_cuenta'><span class='glyphicon glyphicon-cog'> Configuracion de Cuenta</span></a></li>
            <li><a href='/Inventario_RosyWar/Index.php/cambio_contrasena'><span class='glyphicon glyphicon-wrench'> Cambio contrasena</span></a></li>
        <li><a href='/Inventario_RosyWar/Index.php/cerrar_sesion'><span class='glyphicon glyphicon-log-out'> Salir</span></a></li>
          </ul>
        </li>
      </ul>
  </div>
</nav>
<?php $menu = ob_get_clean(); ?>

<?php ob_start(); ?>
<h1 class='panel-title'><center><b>MENU</b></center></h1>
<ul class='nav nav-pills nav-stacked'>
  <li><a href='/Inventario_RosyWar/Index.php/inicio'><span class='glyphicon glyphicon-home'></span> Inicio</a></li>
  <li><a href='/Inventario_RosyWar/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
  <li><a href='/Inventario_RosyWar/Index.php/mision'><span class='glyphicon glyphicon-bookmark'></span> Nosotros</a></li>
  <li><a href='/Inventario_RosyWar/Index.php/iniciar_sesion'><span class='glyphicon glyphicon-log-in'> Iniciar sesion</a></li>
</ul>
<?php $menu1 = ob_get_clean(); ?>

<?php ob_start(); ?>
<ul class='nav nav-pills nav-stacked'>
  <li><a href='http://localhost/Inventario_RosyWar/Index.php/mision'><span class='glyphicon glyphicon-ok'></span> Mision</a></li>
  <li><a href='http://localhost/Inventario_RosyWar/Index.php/vision'><span class='glyphicon glyphicon-ok'></span> Vision</a></li>
</ul>
<?php $submenu1 = ob_get_clean(); ?>