<html>
	<head>
		<title></title>
			<style>
		p{
					background-color:#665;
					border:1px dashed #40E0D0;
					padding:10px 20px 30px 40px;
					margin:auto;
					width:400px;
					/*
					padding-top:10px;
					padding-left:10px;
					padding-right:10px;
					padding-bottom:10px;
					*/
				}
		
				}
				#p3{
					background-color:#26f0bd;
					
				}
				p:hover{
					background-color:white;
					transition:1.4s;
					scale:0.9;
				}
				#p3:hover{
					cursor:grab;
					background-color:white;
				}
			</style>
	</head>
	<body>
		<h1>Apresentacao dinamica!</h1>
		<hr/>
		<?php
			$slide = $_GET["n"];
			
			$idade = $_GET["idade"];
			
			echo "<p id='p3'> Meu nome é $slide!<br/><hr style= 'border: 1px dashed red;'/>Tenho $idade anos!</p>";
		?>
	</body>
</html>