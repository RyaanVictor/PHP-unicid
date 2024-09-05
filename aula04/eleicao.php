<html>
	<head>
		<title>eleicao</title>
	</head>
	<body>
			<form action = "if-else.php" method="GET">
				<h1> Votos </h1>
				<label for="n">Nome:</label>
				<input type="text" name="n" maxlength="150" placeholder=" Digite o seu nome"/>
				<br/>
				<label for="idade">Idade:</label>
				<input type="number" name="idade" min="0" max="120"/>
				<input type="submit" value="enviar!"/>
			</form>
	</body>
</html>