<?php 
        //Variables que reciben la informaciÃÂÃÂÃÂÃÂ³n de el formulario.
	$para=$_GET['para'];
	$edad=$_GET['edad'];
	$asunto=$_GET['asunto'];
	$mensaje=$_GET['mensaje'];

	
	$html = "<body>";
        //Mensaje
	$html .= $mensaje;
	$html .= "<br>";
	$html .= "<img src='https://diagnostico.000webhostapp.com/mail/imagen.jpg'>";
	$html .= "<br>";
	$html .= "<a href='https://diagnostico.000webhostapp.com/mail/recepcion.php?correo=$para&edad=$edad'>Entrar</a>";
	$html .= "</body>";
	// Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <harley0@approckola.com>' . "\r\n";
	


	echo"Correo enviado a ". $para ."<br>" . "Por favor ingresa a tu correo";
        // Enviarlo
	mail($para, $asunto, $html, $headers);

 ?>
