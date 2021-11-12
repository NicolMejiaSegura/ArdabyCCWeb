<?php

namespace controladores
{
	/**
	 * Inicio short summary.
	 *
	 * Inicio description.
	 *
	 * @version 1.0
	 * @author Nicks
	 */
	class Inicio
	{
		public function VistaInicio($f3){
            echo \Template::instance()->render('Inicio.html');
        }
	}
}