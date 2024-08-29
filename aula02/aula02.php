<?php
	$aula	=	"";

	$aula	=	"AULA 02";
	
	$n1	=	$_GET["v1"];
	
	$n2	=	$_GET["v2"];
	
	$result = 0;

?>
<html>
	<head>
		<title> Testando o php</title>
	</head>
	<body>
		<?php
			echo "<center><h1>Aula PHP - $aula </h1></center>";
 		?>
		<hr/>
		<?php
			echo "<p> Site da Unicid - <a href='https://unicid.com.br'target='_blank'> CLIQUE AQUI</a> $aula</p>";
			
			echo 'Estamos na aula '. $aula;
			
			/* Operadores aritimeticos
			+ -> soma 1+1 =2
			- -> subtracao 1-1=0
			* -> multiplicacao 2*2=4
			/ -> divisao 3/2=1,5
			** -> exponenciacao 3**2=9
			% -> resto da divisao 3%2=1
			
			concatenacao ->
				"paulo" . 3 = "paulo 3"
		*/
		
		?>
		<br></hr>
		<?php
			
			 $result =$n1 + $n2 ;
			echo" O resultado de $n1 + $n2 é igual: ".$result;
			
			$result =$n1 - $n2 ;
			echo" O resultado de $n1 - $n2 é igual: ".$result;
			
			$result =$n1 * $n2 ;
			echo" O resultado de $n1 * $n2 é igual: ".$result;
			
			$result =$n1 / $n2 ;
			echo" O resultado de $n1 / $n2 é igual: ".$result;
			
			$result =$n1 ** $n2 ;
			echo" O resultado de $n1 ** $n2 é igual: ".$result;
			
			$result =$n1 % $n2 ;
			echo" O resultado de $n1 % $n2 é igual: ".$result;
			
		?>
	</body>
</html>