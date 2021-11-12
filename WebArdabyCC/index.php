<?php

// Kickstart the framework
$f3=require('lib/base.php');

if ((float)PCRE_VERSION<8.0)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

//----- Index
$f3->route('GET /', 'controladores\Inicio->VistaInicio');

$f3->run();