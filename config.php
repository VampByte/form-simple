<?php
	session_start();
	error_reporting(0); //0, -1
	/*ini_set('display_errors', 'On');*/
	date_default_timezone_set('America/Lima');

	//	VARS DEV
	$dev = TRUE; //TRUE = En desarrollo, FALSE = En producción.
	$v_ = ($dev) ? '?v=' . rand(100, 999) : '';

	//	VARS CAMPAIGN
	//$campania['codigo'] = '514'; // 514: Código de pruebas
	$campania['codigo'] = '1069'; // 514: Código de pruebas
	$campania['estado'] = TRUE; //TRUE = Campaña activa, FALSE: Campaña finalizada
	$enDesarrollo = TRUE;

	//	VARS SEO
	$general['base_url'] = 'https://descubre.usil.edu.pe/eventos/descubriendo-destinos-turisticos/';
	$general['img_path'] = $general['base_url'] . 'images/';
	$general['social_img_path'] = $general['base_url'] . 'images/compartir.jpg';
	$general['company_name'] = 'Universidad San Ignacio de Loyola';
	$general['author'] = $general['company_name'];
	$general['title'] = 'SIU Ventures Presentation | USIL';
	$general['description'] = 'It is the prelaunch event of SIU Ventures, an entrepreneurship environment for SIU students.';
	$general['keywords'] = '';
	$general['GA'] = '';
	$general['PIXEL'] = '';

	//	VARS SOCIAL
	$social['facebook'] = "usil.peru";
	$social['facebook_id'] = "169144493992";
	$social['twitter'] = "@_USIL";

	//	VARS REGISTRATION
	$postRegistro['codigo_campania'] = $campania['codigo']; //ID_CAMPANA
	$postRegistro['redirect'] = './registro.php'; //Redirecciona despues de guardar un lead
	$thanksPage = FALSE;

	//	VARS API
	$apilead['curl'] = 'https://paneldigital.usil.edu.pe/api/savelead'; //URL EPG
	$apilead['key'] = 'c6e3e41d-f406-4ca5-b562-fdd2099928de';

	/* //	VARS SETTING CRM
	$crm_conf['INTEGRA_CRM'] = TRUE; // TRUE = Sí integrar con crm, FALSE = No integrar con crm
	$crm_conf['CODIGO_UTMSOURCE_CRM'] = 12; // 12 = Landing
	$crm_conf['CODIGO_UTMCAMPAIGN_CRM'] = 'CMP-01488-R0T2H7';//'CMP-01473-Y5W2R2';
	$crm_conf['CODIGO_PROGRAMA_CRM'] = 0; */

	/**
	 * Para evitar ataques CSRF
	 */
	$csrf_config['csrf_secret'] = 'Ju]lH@]IDrQ)Ns@(xKG(rcLzaLt^vNJh!AD5==';
	$csrf_config['csrf_session_name'] = 'csrf_session';
	$csrf_config['csrf_input_name'] = 'csrf_token';


	//	VARIABLES
?>