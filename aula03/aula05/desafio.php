<html>
	<head>
		<title>desafio</title>
	</head>
	<body>
	
		<form action = "desafio.php" method="GET">
				<h1> açai brabo</h1>
				<label for="n">Nome:</label>
				<input type="text" name="n" maxlength="150" placeholder=" Digite o seu nome"/>
				<hr/>
				<legend>Copo:</legend>
				Valor base: R$ 10.00<input type="radio" name="tm" value="m"/> Pequeno
				<br>
				<input type="radio" name="tm" checked value="m"/> Médio(+50%)
				<br>
				<input type="radio" name="tm" checked value="m"/> Grande(+100%)
				<hr/>
				<legend>Condimentos:</legend>
				Leite ninho +R$3.00<input type="checkbox" name="cond" value="s"   /> <br/> 
				Leite condesado +R$3.50<input type="checkbox" name="cond" value="s"   /> <br/> 
				Confete +R$2.50<input type="checkbox" name="cond" value="s"   /> <br/> 
				Paçoca +R$1.50<input type="checkbox" name="cond" value="s"   /> <br/> 
					<input type="submit" value="Enviar"/>
		</form>
		
		<?php
			$r = $_POST["r"];
		?>
	</body>
</html>