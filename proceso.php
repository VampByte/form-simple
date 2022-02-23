<?php
require_once dirname(__FILE__) . '/config.php';
/* Funciones*/
require_once dirname(__FILE__) . '/libs/funciones.php';

$es_movil = '0';
if (preg_match('/(android|wap|phone|ipad)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) { $es_movil++; }
if ($es_movil > 0) { $_DISPOSITIVO = "MOBILE"; } else { $_DISPOSITIVO = "PC"; }
if ($post['utm_source'] != 'null' || $post['utm_source'] != 'undefined') { $_MEDIO = $post['utm_source']; } else { $_MEDIO = 'LANDING'; }

//if (isset($_POST["ACEPTO_POLITICAS"])) {
if (isset($_POST["ACEPTO_POLITICAS"]) && validToken()) {
	$post = $_POST;
	//VARS PANEL DIGITAL
	$post['hub_origen_pagina'] = 2; //Landing page
	$post['X-API-KEY'] = $apilead['key'];
	$post['ID_CAMPANA'] = $postRegistro['codigo_campania'];
	//VARS CUTSOM POST
	$post['MEDIO'] = $_MEDIO;
	$post['DISPOSITIVO'] = $_DISPOSITIVO;

	//VARS PANEL DIGITAL INTEGRATION
	$curl = curl_init($apilead['curl']);
	$curl_post_data = $post;
	$jsonArray = json_encode($curl_post_data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonArray);
	$curl_response = curl_exec($curl);
	if (curl_error($curl)) {
		$error_msg = curl_error($curl);
	}
	curl_close($curl);
	$jason = json_decode($curl_response, true);
	//VARS CUSTOM
	$pre_post = $post;
	$_custom_term = '&utm_term='.$_POST['utm_term'].'';
	//CONDITION EXIT
	if (!empty($jason['success'])) {
		$_SESSION["s_post"] = $pre_post;
		header('Location: ' . $postRegistro['redirect'] . '?msg=ok'.$_custom_term);
		exit;
	}
	else {
		header('Location: ' . $postRegistro['redirect'] . '?msg=error'.$_custom_term);
		exit;
	}
}