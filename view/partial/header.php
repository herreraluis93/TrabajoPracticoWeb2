<!DOCTYPE html>
<html lang="en">
<title>Infonete</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url?>view/css/estilos.css" />
<link rel="stylesheet" href="<?=base_url?>view/css/estilosContenidista.css" />
<link rel="stylesheet" href="<?=base_url?>view/css/estilosNoticia.css" />
<link rel="stylesheet" href="<?=base_url?>view/css/estilosSeccion.css" />
<link rel="stylesheet" href="<?=base_url?>view/css/estilosHabilitar.css" />
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUaKDrKqot3_HqieO1CBktUN-O2D5c69Q&callback=initMap&libraries=&v=weekly" defer></script>
<script src="<?=base_url?>view/js/javascript.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<body>

<!-- Navbar -->
<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']->rol == 'lector'): ?>
    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card" style="z-index:5;">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large" style="float:left;">InfoNete</a>
            <a href="<?=base_url?>usuario/logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cerrar Sesión</a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-small">Bienvenido, <?php echo $_SESSION['usuario']->nombre ?></a> 
        </div>
        <nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:0;width:300px;font-weight:bold;margin-top:45px;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-bar-block">
    <u>Secciones</u> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ultimas Noticias</a> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Deportes</a> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Economia</a> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Politica</a> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Politica</a> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sociedad</a>
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">El Mundo</a> 
    <u>Revistas</u> 
    <a href="<?=base_url?>noticia/revistas" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Jardin</a>
  </div>
</nav>
    </div>
  
<?php elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']->rol == 'contenidista'): ?>
    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cerrar Sesión</a>          
            <a href="<?=base_url?>seccion/crearSeccion" class="w3-bar-item w3-button w3-padding-large">Crear Seccion</a>
            <a href="<?=base_url?>contenidista/crearNoticia" class="w3-bar-item w3-button w3-padding-large">Crear Noticia</a>
            <a href="<?=base_url?>contenidista/crearPublicacion" class="w3-bar-item w3-button w3-padding-large">Crear Publicación</a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large" style="float:left">InfoNete</a>
        </div>
    </div>
<?php elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']->rol == 'administrador'): ?>
    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cerrar Sesión</a>
            <a href="<?=base_url?>publicacion/habilitar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Habilitar Publicación</a>
            <a href="<?=base_url?>noticia/habilitar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Habilitar Noticia</a>
            <a href="<?=base_url?>seccion/habilitar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Habilitar Sección</a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large" style="float:left">InfoNete</a>
        </div>
    </div>
<?php elseif(isset($_GET['page']) && $_GET['page'] == 'usuario' && ($_GET['action'] == 'login' || $_GET['action'] == 'registrar')): ?> 
<?php else: ?>
    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card" style="z-index:5;">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="<?=base_url?>usuario/index" class="w3-bar-item w3-button w3-padding-large" style="float:left;">InfoNete</a>
            <a href="<?=base_url?>usuario/login" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Ingresar</a>
        </div>
        <nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:0;width:300px;font-weight:bold;margin-top:45px;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-bar-block">
    <u>Secciones</u> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ultimas Noticias</a> 
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Deportes</a>
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Economia</a>
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Politica</a>
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Politica</a>
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sociedad</a>
    <a href="<?=base_url?>lector/diarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">El Mundo</a>
    <u>Revistas</u> 
    <a href="<?=base_url?>noticia/revistas" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Jardin</a>
  </div>
</nav>
    </div>
<?php endif; ?>

<!-- <div class="w3-main" style="margin-left:340px;margin-right:40px;"> -->