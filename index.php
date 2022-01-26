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

<?php
	$url = (isset($_GET['url'])) ? $_GET['url'] : 'Home';
	$url = array_filter(explode('/', $url));
	
	$file = 'Pages/' . ucfirst($url[0]) . '.php'; //define o filename

	if (is_file($file)) {
		$file == 'Pages/Home.php' ? include 'Pages/HeaderHome.php' : "";
		$file != 'Pages/Home.php' ? include 'Pages/Header.php' : "";

		include $file;
	} else {
		include 'Pages/HeaderHome.php';
		include 'Pages/Home.php';
	}
?>

<ul class="social-media">
	<li class="first">
		<img id="logo" src="Assets/IMG/Logo Vermelho - Fundo Branco 1.png" alt="logo da R&J Utilidades">
	</li>
	<li>
		<img src="Assets/IMG/wpp.svg" alt="">
	</li>
	<li>
		<img src="Assets/IMG/instagram.svg" alt="">
	</li>
	<li>
		<img src="Assets/IMG/1024px-Facebook_icon.svg" alt="">
	</li>
</ul>


<footer>
	<img src="Assets/IMG/Logo Vermelho - Fundo Branco 1.png" alt="logo da R&J Utilidades">
		
	<ul>
		<li>Empresa: J. da S. N. Santana Limpeza - ME</li>
		<li>CNPJ: 29.588.052/0001-02</li>
		<li>Rua Jair de Godoy n° 56</li>
		<li>Vila Açoreana - Poá / São Paulo</li>
	</ul>
</footer>

</body>

</html>