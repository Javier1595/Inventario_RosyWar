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
	  <li><a href='#'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-bookmark'></span> Nosotros <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href='/Inventario_RosyWar/Index.php/mision'><span class='glyphicon glyphicon-bookmark'></span> Mision</a></li>
		      <li><a href='/Inventario_RosyWar/Index.php/vision'><span class='glyphicon glyphicon-bookmark'></span> Vision</a></li>
          <li><a href='/Inventario_RosyWar/Index.php/contactenos'><span class='glyphicon glyphicon-bookmark'></span> Contactenos</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='/Inventario_RosyWar/Index.php/iniciar_sesion'><span class='glyphicon glyphicon-log-in'></span>  Ingresar</a></li>
  	</ul>
  </div>
</nav>
<?php $menu = ob_get_clean(); ?>

<?php ob_start(); ?>
<h1 class='panel-title'><center><b>MENU</b></center></h1>
<ul class='nav nav-pills nav-stacked'>
	<li><a href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span><font color="#072102"> Inicio</font></a></li>
	<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span><font color="#072102"> Productos</font></a></li>
	<li><a href='/Sistemas_2/Index.php/mision'><span class='glyphicon glyphicon-bookmark'></span><font color="#072102"> Nosotros</font></a></li>
	<li><a href='/Sistemas_2/Index.php/iniciar_sesion'><span class='glyphicon glyphicon-log-in'><font color="#072102"> Iniciar sesion</font></a></li>
</ul>
<?php $menu1 = ob_get_clean(); ?>

<?php ob_start(); ?>
<ul class='nav nav-pills nav-stacked'>
	<li><a href='http://localhost/Sistemas_2/Index.php/mision'><span class='glyphicon glyphicon-ok'></span> Mision</a></li>
	<li><a href='http://localhost/Sistemas_2/Index.php/vision'><span class='glyphicon glyphicon-ok'></span> Vision</a></li>
</ul>
<?php $submenu1 = ob_get_clean(); ?>