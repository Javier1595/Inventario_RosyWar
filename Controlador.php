<?php
	require_once "Modelos/Modelo_usuarios.php";
	require_once "Modelos/Modelo_productos.php";
	session_start();
	function inicio_action(){
		require "plantillas/inicio.php";
	}
	function mision_action(){
		require "plantillas/mision.php";
	}
	function vision_action(){
		require "plantillas/vision.php";
	}
	function contactenos_action(){
		require "plantillas/contactenos.php";
	}
	function iniciar_sesion_action(){
		require "plantillas/iniciar_sesion.php";
	}
	function login_action(){
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$usuario=$_POST['usuario'];
			$contrasena=$_POST['contrasena'];
			$login=login($usuario,$contrasena);
		}
	}
	function cerrar_sesion_action(){
		session_unset();
		session_destroy();
		header("Location: /Inventario_RosyWar/Index.php/inicio");
	}
	function listarusuarios_action(){
		$usuarios=listarusuarios();
		require "plantillas/listarusuarios.php";
	}
	function listar_inventario_action(){
		$inventario=listarinventario();
		require "plantillas//menu/busqueda.php";
	}
	function ingresar_inventario_action($string){
		$inventario=listarinventario();
		require "plantillas/menu/busqueda2.php";
	}
	function restar_inventario_action($string){
		$inventario=listarinventario();
		require "plantillas/menu/busqueda3.php";
	}
	function ingreso_inventario_action(){
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$nombre_faja=$_POST['EstiloFaja'];
			$cantidad=$_POST['Cantidad'];
			$string=ingreso_inventario($nombre_faja,$cantidad);
		}
		ingresar_inventario_action($string);
	}
	function resto_inventario_action($string){
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$nombre_faja=$_POST['EstiloFaja'];
			$cantidad=$_POST['Cantidad'];
			$string=resto_inventario($nombre_faja,$cantidad);
		}
		restar_inventario_action($string);
	}
	function buscar_en_inventario_action($string){
		$faja=array();
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$ColorFaja=$_POST['ColorFaja'];
			$TallaFaja=$_POST['TallaFaja'];
		}
	$inventario=buscar_inventario($ColorFaja, $TallaFaja);
	require "plantillas/menu/busqueda.php";
	}
	function ingreso_busqueda_en_inventario_action($string){
		$faja=array();
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$ColorFaja=$_POST['ColorFaja'];
			$TallaFaja=$_POST['TallaFaja'];
		}
	$inventario=buscar_inventario($ColorFaja, $TallaFaja);
	require "plantillas/menu/busqueda2.php";
	}
	function resto_busqueda_en_inventario_action($string){
		$faja=array();
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$ColorFaja=$_POST['ColorFaja'];
			$TallaFaja=$_POST['TallaFaja'];
		}
	$inventario=buscar_inventario($ColorFaja, $TallaFaja);
	require "plantillas/menu/busqueda3.php";
	}
?>