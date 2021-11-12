<?php

namespace controladores
{
	/**
	 * Nosotros short summary.
	 *
	 * Nosotros description.
	 *
	 * @version 1.0
	 * @author Nicks
	 */
	class Nosotros
	{
		public function VistaNostros($f3){
            echo \Template::instance()->render('Empresa.html');
        }
	}
}