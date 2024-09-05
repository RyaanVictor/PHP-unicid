<?php
	$slide = $_GET["n"];
	
	$idade = $_GET["idade"];
	if($idade<16){
		echo "Não pode votar";
	}else{
		if($idade >= 18 && $idade <70){
			echo "Voto obrigatorio";
			
	}else{
		if(($idade >70) || ($idade >= 16 && $idade < 18)){
			echo "Voto opcional";
			
		}
	}
		
}
?>