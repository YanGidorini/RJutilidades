<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Tudo o que precisa, encontra aqui! Papelaria, escritório, utilidades, miudezas...">
	<meta name="theme-color" content="#dc0404" />
	<meta name="robots" content="index, follow">
	<meta http-equiv="content-language" content="pt-br">
	<meta name="creator" content="Yan Gidorini; Renan Goulart.">
	<meta property="og:title" content="Poá-SP: WhatsApp 11 952950248.">
	<meta property="og:description" content="Rua Jair de Godóy, 56 - Vila Açoreana.">
	<meta property="og:site_name" content="RJ utilidades">
	<link rel="canonical" href="https://rjutilidades.com.br" />
	<link rel="apple-touch-icon" href="./Assets/IMG/icones/apple-touch-icon.png">
	<link rel="shortcut icon" href="./Assets/IMG/icones/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,500;0,600;0,700;0,900;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;700&display=swap" rel="stylesheet">
	<!-- swiper slider -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/reset.css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-BTX5XPBK30"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-BTX5XPBK30');
	</script>
</head>

<body>
	<header id="top-of-site">
		<div id="logo-container">
			<a href="home">
				<picture>
					<source srcset="Assets/IMG/red-logo-white-bg.webp" type="image/webp">
					<img src="Assets/IMG/red-logo-white-bg.png" alt="logo da R&J Utilidades">
				</picture>
			</a>
			<p>Papelaria, escritório, utilidades, miudezas...</p>
		</div>

		<h1>Tudo o que precisa, encontra aqui!</h1>

		<div id="ornament">
			<nav>
				<a class="mobile-favorite" href="favoritos">
					<svg class="mobile-heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
						<title>Salve seus itens favoritos</title>
						<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
					</svg>
					<div class="mobile-badge"></div>
				</a>

				<button id="btn-mobile"><span></span></button>

				<ul class="menu">
					<li><a href="home">INÍCIO</a></li>
					<li>PRODUTOS
						<ul class="submenu">
							<li><a href="Papelaria">Papelaria, Escritório e Escolar</a></li>
							<li><a href="Artigos-Festa">Artigos de Festa e Brinquedos</a></li>
							<li><a href="Utensilios-Cozinha">Utensílios de Cozinha</a></li>
							<li><a href="Miudezas">Miudezas</a></li>
						</ul>
					</li>
					<li><a href="/" id="contact-button">CONTATO</a></li>
					<li>
						<a href="favoritos">
							<svg role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
								<title>Salve seus itens favoritos</title>
								<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
							</svg>
							<div class="badge"></div>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<?php
	$url = (isset($_GET['url'])) ? $_GET['url'] : 'Home';
	$url = str_replace('-', '', array_filter(explode('/', $url)));

	$file = 'Pages/' . ucfirst($url[0]) . '.php'; //define o filename

	if (is_file($file)) {
		include $file;
	} else {
		include 'Pages/Home.php';
	}
	?>

	<ul class="social-media">
		<li>
			<picture>
				<source srcset="Assets/IMG/red-logo-white-bg.webp" type="image/webp">
				<img src="Assets/IMG/red-logo-white-bg.png" alt="logo da R&J Utilidades">
			</picture>
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
			<a rel="noreferrer" href="https://web.facebook.com/rjutilidadess/?ref=page_internal&_rdc=1&_rdr" target="_blank" title="Facebook da loja">
				<div alt="Facebook da loja"></div>
			</a>
		</li>
	</ul>

	<footer>
		<ul>
			<li>Empresa: J. da S. N. Santana Limpeza - ME</li>
			<li>CNPJ: 29.588.052/0001-02</li>
			<li>Rua Jair de Godoy, N°56</li>
			<li>Vila Açoreana - Poá / São Paulo</li>
			<li>        
				<svg class="mail" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="envelopeIconTitle">
					<title id="envelopeIconTitle">Envelope</title>
					<rect width="20" height="14" x="2" y="5"></rect>
					<path stroke-linecap="round" d="M2 5l10 9 10-9"></path>
					<path stroke-linecap="round" d="M2 19l6.825-7.8"></path>
					<path stroke-linecap="round" d="M22 19l-6.844-7.822"></path>
				</svg>
				rjutilidadess@gmail.com
			</li>
		</ul>
	</footer>

	<div class="contact-container" id="contact">
		<div class="contact-block">
			<button class="exit">X</button>
			<div class="favorites">
				<h2>Aqui estão os produtos que curtiu:</h2>
				<div class="swiper mySwiper2 favorite-items">
					<div class="swiper-wrapper">

					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>

			<div class="form">
				<h3>Informe seus dados e vamos entrar em contato contigo!</h3>
				<form>
					<input id="name" type="text" name="name" placeholder="Nome">
					<input id="phone" type="text" name="phone-number" placeholder="WhatsApp">
					<button id="submitButton">Enviar por WhatsApp</button>
					<!-- <p>Enviar por E-mail</p> -->
				</form>
				<p>Seus produtos curtidos são enviados para nós junto com seu nome e contato, assim podemos te atender de forma especial!</p>
			</div>
		</div>
	</div>

	<a href="#top-of-site" class="arrow" title="Retornar para o menu"><span></span></a>
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
			},
		},
		autoplay: {
			delay: 4000,
			disableOnInteraction: true,
		},
	});
</script>
<script type="module" src="./Assets/JS/main.js"></script>

</html>