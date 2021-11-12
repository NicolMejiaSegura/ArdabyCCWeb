<?php

namespace controladores
{
	/**
	 * Noticias short summary.
	 *
	 * Noticias description.
	 *
	 * @version 1.0
	 * @author Nicks
	 */
	class Noticias
	{
		public function VistaNoticias($f3){
            echo \Template::instance()->render('Noticias.html');
        }
	}
}