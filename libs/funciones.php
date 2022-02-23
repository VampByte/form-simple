<?php
/**
 * Funciones para protección contra ataques CSRF
 */
// Generar CSRF token
function csrfToken(){
    global $csrf_config;
    $csrf_secret = $csrf_config['csrf_secret'];
    $csrf_session_name = $csrf_config['csrf_session_name'];
    $csrf_input_name = $csrf_config['csrf_input_name'];

    // Generar un nuevo token
    $csrf_token = md5(uniqid(rand(), true) . $csrf_secret);

    // Guardar token temporalmente en una session
    $_SESSION[$csrf_session_name] = $csrf_token;

    // Crear token input <input id="form_token" name="form_token" type="hidden" value="">
    $input_hidden = '<input id="' . $csrf_input_name . '" name="' . $csrf_input_name . '" type="hidden" value="' . $csrf_token . '">';

    echo $input_hidden;
}

// Validar CSRF token
function validToken(){
    global $csrf_config;
    $csrf_secret = $csrf_config['csrf_secret'];
    $csrf_session_name = $csrf_config['csrf_session_name'];
    $csrf_input_name = $csrf_config['csrf_input_name'];

    // Validamos que exista la session del csrf token
    if(!isset($_SESSION[$csrf_session_name])) {
        return false;
    }

    // Validamos que exista el campo oculto csrf token en el formulario
    if(!isset($_POST[$csrf_input_name])){
        return false;
    }

    // Validar csrf token
    if($_SESSION[$csrf_session_name] != $_POST[$csrf_input_name]){
        return false;
    }

    // Borrar session
    unset($_SESSION[$csrf_session_name]);

    return true;
}

/* Fechas programadas */
// Ordenar por fecha de expiración
function sortFechaExpiracion( $a, $b ) {
    return strtotime($a["fecha_expiracion"]) - strtotime($b["fecha_expiracion"]);
}

// Extrae la fecha más proxima a la fecha actual
function getFechaInscripcion($arrFechas){
	$fechaExp = array();
	usort($arrFechas, "sortFechaExpiracion");
	$fechaActual = date("Y-m-d H:i:s");
	foreach ($arrFechas as $value) {
		$fechaExpiracion = date("Y-m-d H:i:s", strtotime($value['fecha_expiracion']));
		if($fechaActual < $fechaExpiracion){
			$fechaExp = $value;
			break;
		}
	}
	return $fechaExp;
}
?>