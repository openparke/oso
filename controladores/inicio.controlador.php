<?php


class InicioControlador
{
	private $modelo;

	

	public function Inicio(){
		require_once "vistas/encabezado.php";
		require_once "vistas/Inicio/principal.php";
		require_once "vistas/pie.php";
	}

}