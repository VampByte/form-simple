<?php
require_once dirname(__FILE__) . '/config.php';
include dirname(__FILE__) . "/libs/funciones.php";
require_once dirname(__FILE__) . '/libs/informacion.php';
require_once dirname(__FILE__) . '/libs/mobile-detect/Mobile_Detect.php';

/*GET UTM VALUE*/
$_utm_source = (empty($_GET['utm_source'])) ? 'Undefined' : strtolower($_GET['utm_source']);
$_utm_medium = (empty($_GET['utm_medium'])) ? 'Undefined' : strtolower($_GET['utm_medium']);
$_utm_term = (empty($_GET['utm_term'])) ? 'Undefined' : strtolower($_GET['utm_term']);
$_utm_campaign = (empty($_GET['utm_campaign'])) ? 'Undefined' : strtolower($_GET['utm_campaign']);
$_utm_content = (empty($_GET['utm_content'])) ? 'Undefined' : strtolower($_GET['utm_content']);

$img_path = $general['img_path'];

/* Detectar si es mobile */
$detect = new Mobile_Detect;
$isTabletMobile = ($detect->isTablet() || $detect->isMobile()) ? TRUE : FALSE;

/* Dispositivo (PC o Mobile) */
$DISPOSITIVO = ($isTabletMobile) ? 'MOBILE' : 'PC';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php include "template_parts/i_scripts_head.php"; ?>
</head>
<body>
	<?php include "template_parts/i_GTM_noscript.php";?>
	<div class="main-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="gridContent">
					<?php include "template_parts/i_portada.php"; ?>
					<?php include "template_parts/i_formulario.php"; ?>
					<?php include "template_parts/i_footer.php"; ?>
				</div><!-- gridContent -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- main-bg -->

	<?php // MAIN.JS ?>
	<script src="js/main.min.js<?=$v_?>"></script>

	<?php // Script Formulario BS5 ?>
	<?php /*
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function (form) {
			form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
					event.preventDefault()
					event.stopPropagation()
				} else {
					document.querySelector('#btn_submit').disabled = true;
					document.querySelector('#btn_submit').innerHTML = 'ENVIANDO...';
				}
				form.classList.add('was-validated')
			}, false)
			})
		})()
	</script>

	<style>
	form .tooltip-help {
		font-size: 10px;
		padding: 2px 4px;
		top: 1em;
		left: 100%;
	}
	</style>
	*/?>

	<?php // TÉRMINOS Y CONDICIONES USIL ?>
	<?php /*
	<script src="//descubre.usil.edu.pe/CDN/disclaimerV2/dist/usilterms.js"></script>
	<script>
		var termsOptions = {
			formid : "form", //Atributo id del formulario <form id="xxxx">
			contentid : "appdpdc", //Donde se contendrá los input option
			inputname : "ACEPTO_POLITICAS", //Atributo name de los input option
			inputid : "termin", //Atributo id de los input option
			inputvalue : "SI", //Atributo value de los input option
			isrequired : true //True: agrega a los imput option el atributo required
		};
		new UsilTerms(termsOptions).init();
	</script>
	*/?>
</body>
</html>