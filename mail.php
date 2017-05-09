<?php 

	$para=$_GET['para'];
	$g=$_GET['g'];
	$edad=$_GET['edad'];
	$asunto=$_GET['asunto'];
	$mensaje=$_GET['mensaje'];

	
	$html = "<body>";
	$html .= $mensaje;
	$html .= "<br>";
	$html .= "<img src='http://www.approckola.com/pruebasena/moreno_harley/imagen.jpg'>";
	$html .= "<br>";
	$html .= "<a href='http://www.approckola.com/pruebasena/moreno_harley/recepcion.php?correo=$para&edad=$edad'>Entrar</a>";
	$html .= "</body>";
	

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <harley0@approckola.com>' . "\r\n";
	


	echo"Enviando correo a ". $para;
	mail($para, $asunto, $html, $headers);

 ?>
