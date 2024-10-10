<?php
	error_reporting (0);
	session_start ();
?>
<html>
	<head>
		<style>
			#card{
				background-color: #665;
				border-radius: 10px;
				width: 70%;
				height:70%;
				margin: 100px auto;
				padding: 10px;
			}
			form{
				
				margin: 150px auto;
				padding: 10px;
				scale:1.5;
				width:65%;
				height:30%;
			}
		
		
		</style>
	</head>
	<body>
		<?php
			if(isset($_SESSION["login"])&& $_SESSION["login"]== "s"){
		?>
			Bem Vindo(a)
			<?php echo $_SESSION['user']; ?>
			<br/>
			Área privada
			<br/>
			<a href="logout.php">Sair</a>
		<?php
			}else{
			
		?>
			
		
	<div id="card">
		<?php
			if($_SESSION["erro"] != "") {
				echo "<div
				style=background-color:red; '>";
				
				echo $_SESSION["erro"];
				
				echo"</div>";
			}
	
		?>
				</br>
		<form action="login.php" method="POST">
			<label for="usr">Usuario:</label>
			<input type="text" id="usr" name="usuario"></br>
			<label for="pwd">Senha:</label>
			<input type="password" id="pwd" name="senha"></br></br>
			<center><input type="submit" value="Enviar">
			<input type="reset" value="Limpar"></center>
		</div>
		<?php
			}
		?>
	</body>
</html>