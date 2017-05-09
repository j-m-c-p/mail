<html>
	<head>
		<title>Mail</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

		<div class="container-fluid" >
		<div class="row" style="background-color: #424242; height: 35px; text-align: right;">
			<div class="container" style="color:#ffffff">
				<b>@</b>Harley and Jhonnatan <b></b>
			</div> 
			</div><br>
			<div class="row">
				<div class="col-xs-12 col-md-4"></div>
				<div class="col-xs-12 col-md-4">
						<!-- <div class="container"> -->

					<form action="mail.php" method="get">

						<center><h2 class="well">Mensaje Nuevo</h2></center>
						<br>
						<div class="well">
							<li>Para </li>

							<input type="text" name="para" placeholder="Para" class="form-control form-control-success"> 
							<br>
							<li>Asunto </li>
							<input type="text" name="asunto" placeholder="Asunto" class="form-control">
							<br>
							<li>Mensaje </li>
							<input type="text" name="mensaje" placeholder="Mensaje" class="form-control">
							<br>
							<li>Edad </li>
							<input type="text" name="edad" placeholder="Edad" class="form-control">
							<br>
							<center><input type="submit" value="Enviar" class="btn  center" style="background-color: #424242; color:#ffffff"></center>
							
						</div>
				
					</form>
				</div>
				<div class="col-xs-12 col-md-4"></div>
			</div>
				
		</div>

	</body>
</html>
