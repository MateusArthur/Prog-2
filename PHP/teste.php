<?php 
	if(isset($_POST['botao'])) {
		if(empty($_POST['palpite']))
		{
			$mensagem = "Palpite vazio!";
		}
		if(!is_numeric($_POST['palpite']))
		{
			$mensagem = "O palpite deve ser um número entre 0 a 9!";
		}
		elseif(strlen($_POST['palpite']) > 1) {
			$mensagem = "O palpite deve ser um número entre 0 a 9!";
		}
		else {
			$sorteio = rand(0,9);
			if($_POST['palpite'] == $sorteio) {
				$mensagem = "Você acertou";
			}
			else 
			{
				$mensagem = "Você errou";
			}
		}
	}
	else {
		$mensagem = "";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adivinhação</title>
</head>
<body>
	<h1>Jogo de adivinhação</h1>
	<p>Advinhe o número em que estou pensando...</p>
	<form method="post" action="">
		<input type="text" name="palpite" value="<?=(isset($_POST['palpite']))?$_POST['palpite']:"";?>">
		<input type="submit" name="botao" value="OK">
	</form>

	<p style="color: red; font-size: 1.5em">
		<?php
			print_r($mensagem); 
		?>
	</p>
	<br>
	<br>
	<hr>
	<p>Dados presentes em $_GET:</p>
	<pre>
		<?php
			print_r($_GET); 
		?>
	</pre>
	<p>Dados presentes em $_POST:</p>
	<pre>
		<?php
			print_r($_POST); 
		?>
	</pre>
</body>
</html>