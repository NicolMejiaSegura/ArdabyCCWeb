<?php




namespace controladores
{
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

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

		public function EnviarCotizacion($f3){
            //Variables de la Cotización
            $nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$email = $_POST['email'];
			$tel =  $_POST['tel'];
			$empresa = $_POST['empresa'];
			$telefonoCoti = $_POST['telefonoCoti'];
			$mensaje = $_POST['mensaje'];
			if(empty($nombre) || empty($apellido) || empty($email) || empty($tel) || empty($empresa) || empty($telefonoCoti) || empty($mensaje)){
                echo "<script>alert ('Hay casillas vacías');
						window.location = '/contacto'
						</script>";
            }
			else{
				if($telefonoCoti == 1){
                    $telefonoCoti = "movil";
                }
				else{
                    $telefonoCoti = "fijo";
                }
            }

        }
	}
}