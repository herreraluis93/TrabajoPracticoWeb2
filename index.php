<?php
session_start();
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'helper/database.php';
require_once 'helper/utils.php';
include_once("view/partial/header.php");


function show_error(){
	$error = new errorController();
	$error->index();
}

if(isset($_GET['page'])){
	$nombre_controlador = $_GET['page'].'Controller';
}elseif(!isset($_GET['page']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
}else{
	show_error();
	exit();
	
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['page']) && !isset($_GET['action'])){
		$default = action_default;
		$controlador->$default();
	}else{
		show_error();
	}
}else{
	show_error();
}
 
include_once("view/partial/footer.php");