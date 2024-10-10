<?php
		session_start();
		$usuario = $_POST["usuario"];
		$senha = $_POST['senha'];
		if($usuario === "ryan" && $senha === "aula08"){
			$_SESSION["login"] = 's';
			$_SESSION["usuario"] = '$usuario';
			$_SESSION["erro"] = "";
			//echo 'Usuario correto!';
			
		}
		else {
			$_SESSION["erro"] = "usuario ou senha incorretos!";
			//echo "Usuario incorreto";
		}
		header("Location: home.php");
	
	
	
?>

