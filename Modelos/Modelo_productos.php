<?php
	require_once "Conexion.php";
	function listarinventario(){
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM producto";
		$resultado = mysqli_query($conexion,$consulta);
		$inventario=array();

		while ($fila = $resultado->fetch_assoc()) {
			$inventario[]=$fila;
		}
		cerrar_conexion_base_de_datos($conexion);
		return $inventario;
	}
	function consultar_nombre_faja($nombre_faja){
		$faja=array();
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM producto";
		$resultado = mysqli_query($conexion,$consulta);
		while ($fila = $resultado->fetch_assoc()) {
			if($fila["nombre"]==$nombre_faja){
				$faja[]=$fila;
			}
		}
		cerrar_conexion_base_de_datos($conexion);
		return $faja;
	}
	function sumarinventario($faja,$nombre_faja,$cantidad){
		$string="";
		foreach ($faja as $faja) {
				$cant=$faja["cantidad"];
		}
		$Canti=$cant+$cantidad;
		$conexion = conectar_base_de_datos();
			$actualizar="UPDATE producto SET  cantidad = '$Canti' WHERE nombre= '$nombre_faja';";
			if (!mysqli_query($conexion,$actualizar)) {
				 return $string="".mysqli_error($conexion);
			}
			else{return $string="Producto actualizado";}
		cerrar_conexion_base_de_datos($conexion);
	}
	function restarinventario($faja,$nombre_faja,$cantidad){
		$string="";
		foreach ($faja as $faja) {
				$cant=$faja["cantidad"];
		}
		if($cant>$cantidad){
		$Canti=$cant-$cantidad;
		$conexion = conectar_base_de_datos();
			$actualizar="UPDATE producto SET  cantidad = '$Canti' WHERE nombre= '$nombre_faja';";
			if (!mysqli_query($conexion,$actualizar)) {
				 return $string="".mysqli_error($conexion);
			}
			else{return $string="Producto actualizado";}
		}
		else {return $string="Solo hay ".$cant." de ".$nombre_faja."";}
		cerrar_conexion_base_de_datos($conexion);
	}
	function ingreso_inventario($nombre_faja,$cantidad){
		$string="";
		$faja=consultar_nombre_faja($nombre_faja);
		if(empty($faja)){
			$string="El producto no existe";
		}else{
			$string=sumarinventario($faja,$nombre_faja,$cantidad);
		}
		return $string;
		cerrar_conexion_base_de_datos($conexion);
	}
	function resto_inventario($nombre_faja,$cantidad){
		$string="";
		$faja=consultar_nombre_faja($nombre_faja);
		if(empty($faja)){
			$string="El producto no existe";
		}else{
			$string=restarinventario($faja,$nombre_faja,$cantidad);
		}
		return $string;
		cerrar_conexion_base_de_datos($conexion);
	}
	function buscar_inventario($buscar_color_faja, $buscar_talla_faja){
		$faja=array();
		$string;
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM producto WHERE color='$buscar_color_faja' && talla='$buscar_talla_faja'";
		$resultado = mysqli_query($conexion,$consulta);
		while ($fila = $resultado->fetch_assoc()) {
				$faja[]=$fila;
		}
		return $faja;
		cerrar_conexion_base_de_datos($conexion);
	}
?>