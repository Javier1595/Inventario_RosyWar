<?php
require_once "Controlador.php";
$url = $_SERVER['REQUEST_URI'];
$uri = explode("?", $url);
switch ($uri[0]) {
	case "/Inventario_RosyWar/":
		header("Location: /Inventario_RosyWar/Index.php/inicio");
		break;
	case "/Inventario_RosyWar/Index.php/inicio":
		inicio_action();
	break;
	case "/Inventario_RosyWar/Index.php/mision":
		mision_action();
	break;
	case "/Inventario_RosyWar/Index.php/vision":
		vision_action();
	break;
	case "/Inventario_RosyWar/Index.php/contactenos":
		contactenos_action();
	break;
	case "/Inventario_RosyWar/Index.php/iniciar_sesion":
		iniciar_sesion_action();
	break;
	case "/Inventario_RosyWar/Index.php/Login":
			login_action();
	break;
	case "/Inventario_RosyWar/Index.php/cerrar_sesion":
		cerrar_sesion_action();
	break;
	case "/Inventario_RosyWar/Index.php/listarusuarios":
		listarusuarios_action();
	break;
	case "/Inventario_RosyWar/Index.php/listar_inventario":
		listar_inventario_action();
	break;
	case "/Inventario_RosyWar/Index.php/ingresar_inventario":
		ingresar_inventario_action("");
	break;
	case "/Inventario_RosyWar/Index.php/ingreso_inventario":
		ingreso_inventario_action();
	break;
	case "/Inventario_RosyWar/Index.php/restar_inventario":
		restar_inventario_action("");
	break;
	case "/Inventario_RosyWar/Index.php/resto_inventario":
		resto_inventario_action("");
	break;
	case "/Inventario_RosyWar/Index.php/buscar_en_inventario":
		buscar_en_inventario_action("");
	break;
	case "/Inventario_RosyWar/Index.php/ingreso_busqueda_en_inventario":
		ingreso_busqueda_en_inventario_action("");
	break;
	case "/Inventario_RosyWar/Index.php/resto_busqueda_en_inventario":
		resto_busqueda_en_inventario_action("");
	break;
	}
?>