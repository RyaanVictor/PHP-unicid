<?php
	session_start();
	$valor = 3;
	$_SESSION["valor"] = $valor * 3/5**4;
	echo "conta gravada com sucesso!<br/>";
	echo "<a href='session.php'>Voltar para a pagina de exibicao</a>";
?>