<html>
	<head>
		<style>
			.quadro{
				background-color: #667;
				border: 5px solid black;
				border-radius: 20px;
				width: 350px;
				height: 350px;
				margin: auto;
				margin-top: 40px;
				padding: 20px;
			}
			.formatado{
				font-size:15px;
				font-align: justify;
				font-family: calibri;
				font-weight: bold;
				color: orange;
			}
			#diferente{
				background-color:#BCF3B4;
			}

			
		</style>
	</head>
	<body>
		<div class="quadro formatado 
		">
				<?php
					$c=0;
					while($c <=10){
						if($c % 2 ==0){
							echo "<div id='diferente'>$c</div>";
						}else{ 
						echo"$c <div>$c</div>";	
					}
					$c++;
				}
				?>
		</div>
	</body>
</html>