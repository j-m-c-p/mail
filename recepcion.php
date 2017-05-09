<?php 
	
	$correo=$_GET['correo'];
	
	$edad=$_GET['edad'];

	echo "Se ha registrado el usuario ". $correo;

	echo "<br>";

	if ($edad > 40) {
		echo "Eres cuchito";
	}else{
		echo "Eres joven";
	}

 ?>
