<!doctype html>
<html>
	<head>
		<title>
			Examen 1 eval
		</title>
	</head>
	<body>
			<br />
			<h4>Formulario de acceso de usuario</h4>

			<form action="acceso" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
			Usuario:<br>
			<input type="text" name="usuario"><br><br>
			<button type="submit">Enviar</button>
			</form>


	</body>
</html>