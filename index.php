<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Tudo o que precisa, encontra aqui! Papelaria, escritório, utilidades, miudezas...">
	<meta name="theme-color" content="#fff">
	<link rel="apple-touch-icon" href="">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,500;0,600;0,700;0,900;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;700&display=swap" rel="stylesheet">
	<!-- swiper slider -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

	<link rel="stylesheet" type="text/css" href="Assets/CSS/reset.css">
	<link rel="stylesheet" type="text/css" href="Assets/CSS/style.css">
</head>

<body>

	<?php
	$url = (isset($_GET['url'])) ? $_GET['url'] : 'Home';
	$url = str_replace('-', '', array_filter(explode('/', $url)));

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
		<li>
			<img src="Assets/IMG/red-logo-white-bg.png" alt="logo da R&J Utilidades">
		</li>
		<li>
			<a rel="noreferrer" href="https://api.whatsapp.com/send?phone=5511952950248&text=Ol%C3%A1,%20vim%20pelo%20site!%20Pode%20me%20ajudar?" target="_blank" title="Whatsapp da loja">
				<div alt="Whatsapp da loja"></div>
			</a>
		</li>
		<li>
			<a rel="noreferrer" href="https://www.instagram.com/rjutilidadess/" target="_blank" title="Instagram da loja">
				<div alt="Instagram da loja"></div>
			</a>
		</li>
		<li>
			<a rel="noreferrer" href="">
				<div></div>
			</a>
		</li>
	</ul>

	<footer>
		<ul>
			<li>Empresa: J. da S. N. Santana Limpeza - ME</li>
			<li>CNPJ: 29.588.052/0001-02</li>
			<li>Rua Jair de Godoy n° 56</li>
			<li>Vila Açoreana - Poá / São Paulo</li>
		</ul>
	</footer>

</body>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper(".mySwiper", {
		spaceBetween: 30,
		loop: true,
		loopFillGroupWithBlank: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			480: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			640: {
				slidesPerView: 2,
				spaceBetween: 15,
			},
			900: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
			1280: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
			1366: {
				slidesPerView: 5,
				spaceBetween: 30,
			}
		}
	});
</script>

</html>