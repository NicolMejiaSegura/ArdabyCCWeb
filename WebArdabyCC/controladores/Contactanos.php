<?php

namespace controladores
{
	/**
	 * Contactanos short summary.
	 *
	 * Contactanos description.
	 *
	 * @version 1.0
	 * @author Nicks
	 */
	class Contactanos
	{
		public function VistaContactanos($f3){
            echo \Template::instance()->render('Contactanos.html');
        }
	}
}