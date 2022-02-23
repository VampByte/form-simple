<?php
require_once dirname(__FILE__) . '/config.php';
include dirname(__FILE__) . "/libs/funciones.php";
require_once dirname(__FILE__) . '/libs/informacion.php';
require_once dirname(__FILE__) . '/libs/mobile-detect/Mobile_Detect.php';

/* Detectar si es mobile */
$detect = new Mobile_Detect;
$isTabletMobile = ($detect->isTablet() || $detect->isMobile()) ? TRUE : FALSE;

$_utm_term = (empty($_GET['utm_term'])) ? 'Undefined' : strtolower($_GET['utm_term']);

//$nombre = $_SESSION["s_post"]['NOMBRES_PROSPECTO'];

/*
if($_GET['msg'] == 'ok'){
	$_msg = '<div id="form" class="form text-center formGracias"><h2 class="graciasH2"> ¡Hola '. $nombre .'!</h2><p class="graciasP">Ya tenemos registrado tus datos.</p> <p class="graciasP">Pronto te enviaremos los accesos al evento.</p></div>';
}
else {
	$_msg = '<div id="form" class="form"><h2 class="graciasH2">Error</h2><p class="graciasP">No pudimos generar tu Premium Pass.<br>Por favor inténtalo nuevamente.</p><p><a href="index.php" class="btn-CTA">Volver a intentar</a></p></div>';
}
*/

$nombre = $_GET['firstname'];


$_msg = ' 
	<div class="text-center">
		<h2 class="graciasH2">'.$nombre.'</h2>
		<p class="graciasP">Ya hemos registrado tus datos, te llamaremos para darte más información.</p>
	</div>
';



$thanksPage = TRUE;
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php include "template_parts/i_scripts_head.php"; ?>
</head>

<body class="REGISTRO">
	<?php include "template_parts/i_GTM_noscript.php";?>
	<div class="main-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="gridContent gridContentGracias">
					<?php include "template_parts/i_portada.php"; ?>
					<?php include "template_parts/i_formulario.php"; ?>
					<?php include "template_parts/i_footer.php"; ?>
				</div><!-- gridContent -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- main-bg -->

	<?php // MAIN.JS ?>
	<script src="js/main.min.js<?=$v_?>"></script>
	
</body>
</html>