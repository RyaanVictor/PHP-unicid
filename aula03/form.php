<html>
	<head>
		<title>form</title>
	</head>
	<body>
			<form action = "aula03.php" method="GET">
				<h1> Formulario de identificacao e apresentacao</h1>
				<label for="n">Nome:</label>
				<input type="text" name="n" maxlength="150" placeholder=" Digite o seu nome"/>
				<br/>
				<label for="idade">Idade:</label>
				<input type="number" name="idade" min="0" max="120"/>
				<input type="submit" value="enviar!"/>
			</form>
	</body>
</html>