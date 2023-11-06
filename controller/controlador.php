<?php
	require_once("../model/modelo.php");
	$menu = new Bebida();
	$pd = $menu->lista_Bebidas();
	require_once("../view/vista.php");
?>