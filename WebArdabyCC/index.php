<?php

// Kickstart the framework
$f3=require('lib/base.php');

if ((float)PCRE_VERSION<8.0)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

//----- Index
$f3->route('GET /', 'controladores\Inicio->VistaInicio');

//Nosotros
$f3->route('GET /nosotros', 'controladores\Nosotros->VistaNostros');

//Noticias
$f3->route('GET /noticias', 'controladores\Noticias->VistaNoticias');

//contacto
$f3->route('GET /contacto', 'controladores\Contactanos->VistaContactanos');
//Cotización
$f3->route('POST /cotizacion', 'controladores\Contactanos->EnviarCotizacion');



$f3->run();