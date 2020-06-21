<!DOCTYPE html>
<html lang="en">
<title>Infonete</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url?>view/css/estilos.css" />

<body>

<!-- Navbar -->
<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']->rol == 'lector'): ?>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
            <a href="<?=base_url?>usuario/logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cerrar Sesión</a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-small">Bienvenido, <?php echo $_SESSION['usuario']->nombre ?></a>
        </div>
    </div>
<?php elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']->rol == 'contenidista'): ?>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
            <a href="<?=base_url?>usuario/logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cerrar Sesión</a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-small">Bienvenido, <?php echo $_SESSION['usuario']->nombre ?></a>
        </div>
    </div>
<?php elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']->rol == 'administrador'): ?>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
            <a href="<?=base_url?>usuario/logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cerrar Sesión</a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-small">Bienvenido, <?php echo $_SESSION['usuario']->nombre ?></a>
        </div>
    </div>
<?php else: ?>

    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card" style="z-index:5;">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
            <a href="<?=base_url?>usuario/registrar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Registrar</a>
        </div>
        <nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:0;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Index</a> 
    <a href="insta-gramo.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Insta-gramo</a> 
    <a href="insta-reciclando.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Insta-reciclando</a> 
    <a href="lanzarDados.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Lanzar Dados</a> 
    <a href="contadorDeVisitas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contador de Visitas</a> 
    <a href="mostrandoConfiguraciones.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mostrando Configuraciones</a>
    <a href="laMatriz.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">La Matriz</a> 
    <a href="palabraEnString.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Palabras en un pajar</a> 
    <a href="piedraPapelOTijera.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Piedra papel o tijera</a> 
    <a href="calculaDoris.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Calcula Doris</a> 
    <a href="packman.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packman</a> 
  </div>
</nav>
    </div>
  
<?php endif; ?>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">