<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,500;0,600;0,700;0,900;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Assets/CSS/reset.css">
	<link rel="stylesheet" href="Assets/CSS/style.css">
	
</head>

<body>
	<header>
		<div class="container">
			<div id="container-logo">
				<picture>
					<source type="" media="" srcset="">
					<img src="Assets/IMG/Logo Vermelho - Fundo Branco 1.svg" alt="">
				</picture>
				<p>Papelaria, escritório, utilidades,miudezas...</p>
			</div>

			<nav>
				<a href="home">Início</a>
				<p>Produtos</p> 
				<a href="contato">Contato</a>
				<a href="favoritos">&#10084;</a>
			</nav>
		</div>

	</header>

		<div id="enfeite">
		
		</div>


	
		


	<?php
		$url = (isset($_GET['url'])) ? $_GET['url']:'Home';
		$url = array_filter(explode('/',$url));
		var_dump($url);

		$file = 'Pages/'.ucfirst($url[0]).'.php';//define o filename
		var_dump($file);

		if(is_file($file)){
			include $file;
		}else{
			include 'Pages/Home.php';
		}
	?>

</body>
</html>
