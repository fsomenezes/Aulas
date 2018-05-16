<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php
			echo 'Teste de echo <br/>';
			print 'Teste de print';
			

		?>
		<br/>
		<?='Teste tag padrão'?>
		<br/>
		Aula variáveis

		
		<?php

		// int
		echo '<br />';
		$valorinteiro = 1 * 4;   //sinal de igual indica atribuição
		echo $valorinteiro;

		echo '<br />';

		$valorinteiro = $valorinteiro * 2;
		echo $valorinteiro;
		
		echo '<br />';

		// float
		$valorfracionado = 10.5;
		echo $valorfracionado;
		
		echo '<br />';

		// boolean
		$estado = true; //false
		echo $estado;

		echo '<br />';


		// strings
		$texto = 'Curso de PHP';
		echo $texto;

		echo '<br />';

		$texto = 'Curso de PHP - '.$valorinteiro;
		echo $texto;

		echo '<br />';

		$texto = "Curso de PHP - $valorinteiro";
		echo $texto;

		echo '<br />';
		echo '<br />';

		// arrays

		// Com um único array, os arrays podem ser alfa-numericos
		$lista_teste[1] = 'Asdas dasd adasd qwdasd asd qwd asd asd';
		$lista_teste[2] = 'Asdasd asd asd qw dferg dfg f asd asd asd';
		$lista_teste[3] = 'ASd dfg er sdf a asd ter  dfg sd ';
		$lista_teste[4] = 'Asd wet ery er qwasdf   qweasd ';
		$lista_teste[5] = 'Asd wet ery er qwasdf  asd qw df a4t 4 123 2esd a  qweasd ';
		$lista_teste['a'] = 'Asdasd asd qwaskjlkjklj lkjlj jlkj jlj laçsldkplask ads';

		//forma de impressão de arrays
		var_dump($lista_teste); //imprime o array todo
		
		echo '<br />';
		echo '<br />';

		print_r($lista_teste); //imprime o array todo

		echo '<br />';
		echo '<br />';

		echo $lista_teste[5];  // imprime um array unico

		echo '<br />';
		echo '<br />';

		print $lista_teste[4];

		echo '<br />';
		echo '<br />';

		//array passando por parametro

		$lista_teste = array(
			'1' => 'Asdas dasd adasd qwdasd asd qwd asd asd',
			'2' => 'Asdasd asd asd qw dferg dfg f asd asd asd',
			'a' => 'Asdas dasd ad asda dqwe rta t412312 123 1231',
			'b' => '56416513 654654165 65461321321564165'
		);

		var_dump($lista_teste); //imprime o array todo
		
		echo '<br />';
		echo '<br />';

		print_r($lista_teste); //imprime o array todo

		echo '<br />';
		echo '<br />';

		?>

		
	</body>
</html>
