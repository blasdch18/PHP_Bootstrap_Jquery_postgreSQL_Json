<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<!-- IMPORT BOOTSTRAP CSS FRAMEWORK -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<!-- IMPORT BOOTSTRAP JS FRAMEWORK -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/jquery.1.8.1.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
	<script type="text/javascript" src="js/jquery.1.8.1.js"></script>
	<script type="text/javascript" src="js/Login.js"></script>
	

</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top" rol="navigation">
		<div class="navbar-collapse collapse">
			<div class="container">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Home <b class="caret"></b></a>
					</li>
				</ul>
			</div>
		</div>
	</div>	

	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1>Jumbotron</h1>		
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information............</p>
				<center><br>
				<button class="btn btn-lg btn-success"> Sign Up</button></center>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " >
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 well" >

				<form action="" name="f1" method="post">
					
					<div class="input-group">
						<span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
						<input type="text" id="usuario" class="form-control">						
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" id="contrasena" class="form-control">					
					</div>		
					<br>
					<div class="input-group">
						<button type="button" class="btn btn-default" id="Iniciar"> Sign In</button>
					</div>

				</form>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="mensaje" >
			</div>
		</div>
	</div>

</body>

</html>